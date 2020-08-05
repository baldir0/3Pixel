<?php
    session_start();                                    //Session Start
    require '../scripts/functions.php';                 //Connecting functions file

    if(!isset($_SESSION['SignedIn']))
    {
        if(isset($_POST['sign-in-button'])&&
        isset($_POST['sign-in-login'])&&
        isset($_POST['sign-in-password']))                                              //Checking datas
        {
            $db = connect_to_db();                                                      //Connecting to Database
            if(!signIn($_POST['sign-in-login'],$_POST['sign-in-password'],$db))         //Calling SignIn Function from "functions.php"
            {
                $style = "style='display:block;'";
            }else{
                $style = "style='display:none;'";
                header("location: ../index.php");
            }
        }
    }
?>

<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <meta charset='utf-8'/>
        <title>3Pixel</title>
        <link type="text/css" href="../styles/main.css" rel="stylesheet">
        <link type="text/css" href="../styles/home.css" rel="stylesheet">
        <link type="text/css" href="../styles/signin.css" rel="stylesheet">
        <link rel="icon" href="../img/logo.png">
        <script src="../scripts/jsfunctions.js"></script>
    </HEAD>
    <BODY>
        <div id="container">
            <div id="nav-bar">
                <nav>
                    <div class="logo">
                        <img src="../img/logo.png" alt="Image Logo">
                    </div>
                    <ul>
                        <li><a href="../index.php#top">Home</a></li>
                        <li><a href="../index.php#news-container">News</a></li>
                        <li><a href="../index.php#about-us">About Us</a></li>
                        <div id="sign-in-button">
                            <li><a href="">Sign In</a></li>
                        </div>
                    </ul>
                </nav>
            </div>
            <div id="main-container">
                <div id="signin-form-container">
                    <form method="post">
                        <table id="signin-table">
                            <tr>
                                <td><label for="sign-in-login">Login</label></td>
                                <td><input type="text" name='sign-in-login' id="sign-in-login" required/></td>
                            </tr>
                            <tr>
                                <td><label for="sign-in-password">Password</label></td>
                                <td><input type="password" name='sign-in-password' id="sign-in-password" required/></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" value="Sign in" name="sign-in-button"></td>
                            </tr>
                        </table>
                        <span id="signin-failed-message" <?php if(isset($style)) echo $style; else echo "style='display:none;'"; ?>>Wrong login or password, please try again.</span>
                    </form>
                    <span id='signup'>Now Have account yet? <a href='./signup.php'>Sign Up</a> now!</span>
                </div>
            </div>
            <div id="footer">
                <footer>
                    <span>© 2020 - 3 Pixel Team</span>
                    <div class="logo">
                        <img src="../img/logo.png" alt="img">
                    </div>
                </footer>
            </div>
        </div>
    </BODY>
</HTML>