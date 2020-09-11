<?php
    define('ROOTPATH',__DIR__);
    session_start();
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
        <link href='https://fonts.googleapis.com/css?family=Amatic SC' rel='stylesheet'>
        <link rel="icon" href="/img/logo.png">
        <script src='scripts/jsfunctions.js'></script>
        <script src='scripts/changeImage.js'></script>
    </head>
    <body>
        <div class="nav-bar">
            <?php
                include_once("sites/nav-bar.php");
            ?>
        </div>
        <div class="container">
            <div>
                <div class="ImbB">
                    <div>
                        <a href="/sites/game.php?id=1"><img class="show" src="/img/ImageBoardImage1.png" alt="ImageBoard Image"/></a>
                        <a href="/sites/game.php?id=2"><img src="/img/ImageBoardImage2.png" alt="ImageBoard Image"/></a>
                        <a href="/sites/game.php?id=3"><img src="/img/ImageBoardImage3.png" alt="ImageBoard Image"/></a>
                        <a href="/sites/game.php?id=4"><img src="/img/ImageBoardImage4.png" alt="ImageBoard Image"/></a>
                        <div id="ImageBoardButtons">
                            <button class="active" onclick='changeImage("this")'></button>
                            <button onclick='changeImage("this")'></button>
                            <button onclick='changeImage("this")'></button>
                            <button onclick='changeImage("this")'></button>
                        </div>
                    </div>
                </div>
                <div class="AboutUsB">
                    <h3 id="about-us-title">About Us</h3>
                    <p id="about-us-text">We are group of people starting to build fast games or flash project games.
                    We are working in that games to filter out people we cant relay on and with people we can relay on start working bigger better and more stable games thoward building one day company and stay as employs.
                    As of now on game release we will all gain portfolio and letter of reccomendation by me.</p>
                </div>
                <div class="NewsB">
                    <h3>News</h3>
                    <div class="news">
                        <div id="title-container">
                            <h2 id="title">Title</h2>
                            <span id="date">Author: author<br>Date:22.02.2002</span>
                        </div>
                        <div id="news-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas turpis enim, mattis at orci non, blandit faucibus dui. Cras ullamcorper ac nisl pulvinar tristique. Morbi mattis justo
 sed lectus blandit ultricies. Suspendisse a purus turpis. Maecenas fringilla porttitor laoreet. Vestibulum quam ex, viverra quis rhoncus id, varius sed nisl. Quisque vitae luctus massa.
Nunc commodo tortor nec tincidunt eleifend. Aenean non ultricies ante, nec tincidunt mauris. Phasellus tincidunt porta magna, sit amet rhoncus ligula luctus quis. Nunc turpis eros,
vehicula feugiat nibh ut, scelerisque lacinia lectus.</p>
                        </div>
                    </div>
                    <div class="news">
                        <div id="title-container">
                            <h2 id="title">Title</h2>
                            <span id="date">Author: author<br>Date:22.02.2002</span>
                        </div>
                        <div id="news-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas turpis enim, mattis at orci non, blandit faucibus dui. Cras ullamcorper ac nisl pulvinar tristique. Morbi mattis justo
 sed lectus blandit ultricies. Suspendisse a purus turpis. Maecenas fringilla porttitor laoreet. Vestibulum quam ex, viverra quis rhoncus id, varius sed nisl. Quisque vitae luctus massa.
Nunc commodo tortor nec tincidunt eleifend. Aenean non ultricies ante, nec tincidunt mauris. Phasellus tincidunt porta magna, sit amet rhoncus ligula luctus quis. Nunc turpis eros,
vehicula feugiat nibh ut, scelerisque lacinia lectus.</p>
                        </div>
                    </div>
                    <div class="news">
                        <div id="title-container">
                            <h2 id="title">Title</h2>
                            <span id="date">Author: author<br>Date:22.02.2002</span>
                        </div>
                        <div id="news-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas turpis enim, mattis at orci non, blandit faucibus dui. Cras ullamcorper ac nisl pulvinar tristique. Morbi mattis justo
 sed lectus blandit ultricies. Suspendisse a purus turpis. Maecenas fringilla porttitor laoreet. Vestibulum quam ex, viverra quis rhoncus id, varius sed nisl. Quisque vitae luctus massa.
Nunc commodo tortor nec tincidunt eleifend. Aenean non ultricies ante, nec tincidunt mauris. Phasellus tincidunt porta magna, sit amet rhoncus ligula luctus quis. Nunc turpis eros,
vehicula feugiat nibh ut, scelerisque lacinia lectus.</p>
                        </div>
                    </div>
                <?php
                    //Here Will Be 3 Last News
                ?>
                </div>
            </div>
        </div>
        <div class="footer">
        <?php
              include_once("sites/footer.php");
        ?>
        </div>
    </body>
</html>
