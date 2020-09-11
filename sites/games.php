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
        <link type="text/css" href="/styles/games.css" rel="stylesheet">
        <link rel="icon" href="/img/logo.png">
    </head>
    <body>
        <div class="nav-bar">
            <?php
                include_once("nav-bar.php");
            ?>
        </div>
        <div class="container">
          <div class="gameContainer">
                <a href="game.php?id=1"><h1>Aan`alien Game</h1></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer cursus convallis ligula, a blandit magna scelerisque et. Cras molestie diam a leo faucibus aliquam. Quisque varius consectetur fermentum. Aenean eu ornare tellus. Fusce nec ipsum varius, eleifend metus quis, laoreet est. In hac habitasse platea dictumst. Cras ornare sit amet neque eu iaculis. Etiam tortor lectus, blandit a nisl vitae, mollis congue metus. Suspendisse quis molestie lorem, a consequat nulla. Praesent mollis vel est ut tempor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec maximus leo ac diam laoreet, non porta sem ornare. Cras commodo tellus vel scelerisque vulputate.</p>
                <img src="/img/ImageBoardImage1.png" alt="Game1-Img">
            </div>
            <div class="gameContainer">
                <a href="game.php?id=2"><h1>Hamdy Game</h1></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer cursus convallis ligula, a blandit magna scelerisque et. Cras molestie diam a leo faucibus aliquam. Quisque varius consectetur fermentum. Aenean eu ornare tellus. Fusce nec ipsum varius, eleifend metus quis, laoreet est. In hac habitasse platea dictumst. Cras ornare sit amet neque eu iaculis. Etiam tortor lectus, blandit a nisl vitae, mollis congue metus. Suspendisse quis molestie lorem, a consequat nulla. Praesent mollis vel est ut tempor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec maximus leo ac diam laoreet, non porta sem ornare. Cras commodo tellus vel scelerisque vulputate.</p>
                <img src="/img/ImageBoardImage2.png" alt="Game2-Img">
            </div>
            <div class="gameContainer">
                <a href="game.php?id=3"><h1>Zombbiler Game</h1></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer cursus convallis ligula, a blandit magna scelerisque et. Cras molestie diam a leo faucibus aliquam. Quisque varius consectetur fermentum. Aenean eu ornare tellus. Fusce nec ipsum varius, eleifend metus quis, laoreet est. In hac habitasse platea dictumst. Cras ornare sit amet neque eu iaculis. Etiam tortor lectus, blandit a nisl vitae, mollis congue metus. Suspendisse quis molestie lorem, a consequat nulla. Praesent mollis vel est ut tempor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec maximus leo ac diam laoreet, non porta sem ornare. Cras commodo tellus vel scelerisque vulputate.</p>
                <img src="/img/ImageBoardImage3.png" alt="Game3-Img">
            </div>
            <div class="gameContainer">
                <a href="game.php?id=4"><h1>Zombbiler Game</h1></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer cursus convallis ligula, a blandit magna scelerisque et. Cras molestie diam a leo faucibus aliquam. Quisque varius consectetur fermentum. Aenean eu ornare tellus. Fusce nec ipsum varius, eleifend metus quis, laoreet est. In hac habitasse platea dictumst. Cras ornare sit amet neque eu iaculis. Etiam tortor lectus, blandit a nisl vitae, mollis congue metus. Suspendisse quis molestie lorem, a consequat nulla. Praesent mollis vel est ut tempor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec maximus leo ac diam laoreet, non porta sem ornare. Cras commodo tellus vel scelerisque vulputate.</p>
                <img src="/img/ImageBoardImage4.png" alt="Game4-Img">
            </div>
        </div>
        <div class="footer">
        <?php
              include_once("footer.php");
        ?>
        </div>
    </body>
</html>
