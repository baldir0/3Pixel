<?php
    session_start();                                    //Session Start
    require_once '../scripts/functions.php';                 //Connecting functions file

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
                <div>
                    <p>Account Created</p>
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