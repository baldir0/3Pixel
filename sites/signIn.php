<?php
    session_start();                                    //Session Start
    require_once '../scripts/functions.php';                 //Connecting functions file

    require_once '../scripts/accountControler.php';

    if(isset($_SESSION['SignedIn']) && $_SESSION['SignedIn'])
    {
        header("location:../index.php");
    }
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset='utf-8'/>
        <title>3Pixel</title>
        <link type="text/css" href="/styles/main.css" rel="stylesheet">
        <link type="text/css" href="/styles/index.css" rel="stylesheet">
        <link type="text/css" href="/styles/navbar.css" rel="stylesheet">
        <link type="text/css" href="/styles/footer.css" rel="stylesheet">
        <link type="text/css" href="/styles/signin.css" rel="stylesheet">
        <link rel="icon" href="/img/logo.png">
        <script src="/scripts/jsfunctions.js"></script>
    </head>
    <body onload="form()">
        <div class="nav-bar">
                <?php
                    include_once("nav-bar.php");
                ?>
            </div>
        <div class="container">
            <div>
                <!--Sign In Container-->
                <div class="SinC">
                    <h3>Sign In</h3>
                    <form method="post">
                        <input type="text" name='sign-in-login' id="sign-in-login" placeholder="Login" <?php if(isset($_POST['sign-in-login'])) echo "value=".$_POST['sign-in-login']; ?> >
                        <?php
                            if(isset($errors)){
                                if(sizeof($errors)!=0){
                                    if(isset($errors['sign-in-login']))
                                        echo $errors['sign-in-login'];
                                }
                            }
                        ?>
                        <input type="password" name='sign-in-password' id="sign-in-password" placeholder="Password"/>
                        <?php
                            if(isset($errors)){
                                if(sizeof($errors)!=0){
                                    if(isset($errors['sign-in-password']))
                                        echo $errors['sign-in-password'];
                                }
                            }
                        ?>
                        <input type="submit" value="Sign In" name="sign-in-button">
                    </form>
                    <span id='signup'>Now Have account yet? <a href='#' onclick="changeObjectVisibility('.SinC','.SupC','block')">Sign Up</a> now!</span>
                </div>
                <!--Sign Up Container-->
                <div class="SupC">
                    <h3>Sign Up</h3>
                    <form method="post">
                        <input type="text" name='sign-up-login' id='sign-up-login' placeholder="Login" <?php if(isset($_POST['sign-up-login'])) echo "value=".$_POST['sign-up-login']; ?> >
                        <?php
                            if(isset($errors)){
                                if(sizeof($errors)!=0){
                                    if(isset($errors['sign-up-login']))
                                        echo $errors['sign-up-login'];

                                    if(isset($errors['sign-up-login-already-used']))
                                        echo $errors['sign-up-login-already-used'];
                                }
                            }
                        ?>
                        <input type="password" name='sign-up-password' id='sign-up-password' placeholder="Password"/>
                        <?php
                            if(isset($errors)){
                                if(sizeof($errors)!=0){
                                    if(isset($errors['sign-up-password']))
                                        echo $errors['sign-up-password'];

                                    if(isset($errors['password-requires-upperCase']))
                                        echo $errors['password-requires-upperCase'];

                                    if(isset($errors['password-requires-lowerCase']))
                                        echo $errors['password-requires-lowerCase'];

                                    if(isset($errors['password-requires-numberCase']))
                                        echo $errors['password-requires-numberCase'];

                                    if(isset($errors['password-requires-lenght']))
                                        echo $errors['password-requires-lenght'];
                                }
                            }
                        ?>
                        <input type="password" name='sign-up-password-repeat' id='sign-up-password-repeat' placeholder="Repeat Password"/>
                        <?php
                            if(isset($errors)){
                                if(sizeof($errors)!=0){
                                    if(isset($errors['sign-up-password-repeat']))
                                        echo $errors['sign-up-password-repeat'];
                                }
                            }
                        ?>
                        <input type="email" name='sign-up-email' id='sign-up-email' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email" <?php if(isset($_POST['sign-up-email'])) echo "value=".$_POST['sign-up-email']?> >
                        <?php
                            if(isset($errors)){
                                if(sizeof($errors)!=0){
                                    if(isset($errors['sign-up-email']))
                                        echo $errors['sign-up-email'];

                                    if(isset($errors['sign-up-email-already-used']))
                                        echo $errors['sign-up-email-already-used'];
                                }
                            }
                        ?>
                        <input type="submit" value="Sign Up" name='sign-up-button'/>
                    </form>
                    <span id='signin'>Already have an account? Click here and <a href='#' onclick="changeObjectVisibility('.SupC','.SinC','block')">Sign In</a> now!</span>
                </div>

            </div>
        </div>
        <div class="footer">
        <?php
              include_once("footer.php");
            ?>
        </div>
    </body>
</html>
