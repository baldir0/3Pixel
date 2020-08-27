<?php
    define('ROOTPATH',__DIR__);
    session_start();
?>
<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <meta charset='utf-8'/>
        <title>3Pixel</title>
        <link type="text/css" href="/styles/main.css" rel="stylesheet">
        <link type="text/css" href="/styles/home.css" rel="stylesheet">
        <link type="text/css" href="/styles/navbar.css" rel="stylesheet">
        <link rel="icon" href="/img/logo.png">
        <script src='scripts/jsfunctions.js'></script>
    </HEAD>
    <BODY onload="switchImage()">
        <div id="nav-bar">
            <?php
                include_once("sites/nav-bar.php");
            ?>
        </div>
        <div id="container">
            <div id="main-container">
                <div id="ImageBoard">
                    <div class='ImageBoardImage'>
                        <a href="#link1" id="BoardImgLink"><img src="/img/ImageBoardImage1.png" alt="ImageBoard Image" id="BoardImg"/></a>
                    </div>
                    <div id="ImageBoardButtons">
                        <button id="Img1" class="active" onclick='changeImage("BoardImg","./img/ImageBoardImage1.png","#Img1")'></button>
                        <button id="Img2" onclick='changeImage("BoardImg","./img/ImageBoardImage2.png","#Img2")'></button>
                        <button id="Img3" onclick='changeImage("BoardImg","./img/ImageBoardImage3.png","#Img3")'></button>
                        <button id="Img4" onclick='changeImage("BoardImg","./img/ImageBoardImage4.png","#Img4")'></button>
                    </div>
                </div>
                <div id="about-us">
                    <h3 id="about-us-title">About Us</h3>
                    <p id="about-us-text">We are group of people starting to build fast games or flash project games.
                    We are working in that games to filter out people we cant relay on and with people we can relay on start working bigger better and more stable games thoward building one day company and stay as employs.
                    As of now on game release we will all gain portfolio and letter of reccomendation by me.</p>
                </div>
                <div id="news-container">
                    <h3 id="news-title">News</h3>
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
        <div id="footer">
        <?php
              include_once("sites/footer.php");
        ?>
        </div>
    </BODY>
</HTML>
