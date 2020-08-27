<?php

require_once 'config.php';

define("WEBADDRESS", "https://www.3pixel.000webhostapp.com/");

$login = "";
$password = "";

$errors = [];

$str = file_get_contents("../config/errors.json");
$ERRORS = json_decode($str,true);

if(!isset($_SESSION['SignedIn']))
{
    // ▼ Sign In ▼
    if(isset($_POST['sign-in-button']))
    {
        setcookie('Form',0);
        // ===▼ Check Input Fields ▼===
        // ======▼ Check Does Login Field Is Not Empty ▼======
        if(empty($_POST['sign-in-login']))
            $errors['sign-in-login'] = "<span class='err'>".$ERRORS['sign-in-login']."</span>";
        // ======▼ Check Does Password Field Is Not Empty ▼======
        if(empty($_POST['sign-in-password']))
            $errors['sign-in-password'] = "<span class='err'>".$ERRORS['sign-in-password']."</span>";
        // ===▼ Assign Post Value To Local Variables ▼===
        $login = $_POST['sign-in-login'];
        $password = $_POST['sign-in-password'];
        
        $db = connect_to_db();
        $request = 'Select id,password from users where login="'.$login.'"'; 
        // ===▼ Check Number Of Errors ▼===
        if(count($errors) == 0)
        {
            // ======▼ Call The Query ▼======
            if($stmt = $db -> query($request))
            {
                // =========▼ Check Number Of Results ▼=========
                if($stmt -> rowCount() > 0)
                {
                    $res = $stmt->fetch(PDO::FETCH_ASSOC);
                    // ============▼ Verify Password ▼============
                    if(password_verify($password,$res['password']))
                    {
                        $_SESSION['SignedIn']=true;
                        $_SESSION['UserId']=$res['id'];                                    
                        $_SESSION['SessionToken']=bin2hex(openssl_random_pseudo_bytes(24));
                        header('location: ../index.php');
                    }
                }
            }else $errors['sign-in-err'] = "<span class='err'>".$ERRORS['sign-in-failed']."</span>";
        }
        // ===▼ Disconnect From Database ▼===
        $db = null;
    }

    // ▼ Sign Up ▼
    if(isset($_POST['sign-up-button']))
    {

        setcookie('Form',1);

        // ===▼ Check Input Fields ▼===
        // ======▼ Check Does Login Field Is Not Empty ▼======
        if(empty($_POST['sign-up-login']))
            $errors['sign-up-login'] = "<span class='err'>".$ERRORS['sign-up-login']."</span>";
        // ======▼ Check Does Password Field Is Not Empty ▼======
        if(empty($_POST['sign-up-password']))
            $errors['sign-up-password'] = "<span class='err'>".$ERRORS['sign-up-password']."</span>";
        // ======▼ Check Does Repeated Password Is The Same ▼======
        if((isset($_POST['sign-up-password']) && ($_POST['sign-up-password'] !== $_POST['sign-up-password-repeat'])))
            $errors['sign-up-password-repeat'] = "<span class='err'>".$ERRORS['sign-up-password-repeat']."</span>";
        // ======▼ Check Does Email Field Is Not Empty ▼======
        if(empty($_POST['sign-up-email']))
            $errors['sign-up-email'] = "<span class='err'>".$ERRORS['sign-up-email']."</span>";

        // ======▼ Check Does Password Is In A Good Format ▼======
        $upperCase = preg_match('@[A-Z]@', $_POST['sign-up-password']);
        $lowerCase = preg_match('@[a-z]@', $_POST['sign-up-password']);
        $numberCase = preg_match('@[0-9]@', $_POST['sign-up-password']);
        if(!$upperCase)
            $errors['password-requires-upperCase'] = "<span class='err'>".$ERRORS['password-requires-upperCase']."</span>";
        
        if(!$lowerCase)
            $errors['password-requires-lowerCase'] = "<span class='err'>".$ERRORS['password-requires-lowerCase']."</span>";
        
        if(!$numberCase)
            $errors['password-requires-numberCase'] = "<span class='err'>".$ERRORS['password-requires-numberCase']."</span>";
        
        if(strlen($_POST['sign-up-password']) < 8)
            $errors['password-requires-lenght'] = "<span class='err'>".$ERRORS['password-requires-lenght']."</span>";

        
        $login = $_POST['sign-up-login'];
        $password = password_hash($_POST['sign-up-password'],PASSWORD_DEFAULT);
        $email = $_POST['sign-up-email'];
        $token = bin2hex(random_bytes(50));

        $db = connect_to_db();
        // ======▼ Check Does Used Email Is Free ▼======
        $request = 'SELECT * FROM users WHERE email= "'.$email.'"';
        if($res = $db->query($request))
            if($res->fetchColumn() > 0)
            {
                $errors['sign-up-email'] = "<span class='err'>".$ERRORS['sign-up-email-already-used']."</span>";
            }
        // ======▼ Check Does Used Login Is Free ▼======
        $request = 'SELECT * FROM users WHERE login= "'.$login.'"';
        if($res = $db->query($request))
            if($res->fetchColumn() > 0)
            {
                $errors['sign-up-login'] = "<span class='err'>".$ERRORS['sign-up-login-already-used']."</span>";
            }
        // ======▼ Check Number Of Errors ▼======
        if(count($errors) == 0)
        {
            $request = $db->prepare('INSERT INTO users (login,password,email,token) VALUES (?,?,?,?)');
            // ======▼ Call The Query ▼======
            $result = $request->execute(array($login,$password,$email,$token));
            if($result){
                $db->query('INSERT INTO profiles (nick) VALUES ("'.$login.'")');
                $subject = "Account Verification";

                $msg = '
                <HTML>
                    <HEAD>
                        <title>3Pixel Team Email Verification</title>
                    </HEAD>
                    <BODY>
                        <p>Thanks For Signing Up!</p>
                        <p>You can Sign in using folowing data:</p>
                        <br>
                        <p>---------------------</p>
                        <p>login = login</p>
                        <p>password = password</p>
                        <p>---------------------</p>
                        <br>
                        <p>To activate your account click <a href=https://www.3pixel.000webhostapp.com/sites/accountConfirm.php?email=lewucha2000@gmail.com&token=fe641f943e6f7f58ace569ac20834a19a63dddf4c734729530dec2736350170d84123bd555492ece93a186c6fee78c9b3487>here</a></p>
                        <p>3Pixel Team</p>
                    </BODY>
                </HTML>';

                $headers = "MIME-Version: 1.0" . '\r\n';
                $headers .= "Content-type:text/html;charset=UTF-8" . '\r\n';
                $headers .= 'From:3PixelTeam@noreplay.com'.'\r\n';


                // ===▼ Send Verification Email ▼===
                if(mail($email,$subject,$msg,$headers))
                    header('location: RegisterResult.php');
                else echo "Email send failed";

            }
        }else{
            $_SESSION['err_msg'] = "<span class='err'>".$ERRORS['sign-up-failed']."</span>";
        }
        $db = null;
    }
}