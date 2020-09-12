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
        <link type="text/css" href="/styles/index.css" rel="stylesheet">
        <link type="text/css" href="/styles/navbar.css" rel="stylesheet">
        <link type="text/css" href="/styles/footer.css" rel="stylesheet">
        <link type="text/css" href="/styles/game.css" rel="stylesheet">
        <link rel="icon" href="/img/logo.png">
    </HEAD>
    <BODY>
      <?php
          include($_SERVER['DOCUMENT_ROOT']."/scripts/gameClass.php");
          $game = new gameMenager($_GET['id']);
       ?>
        <div class="nav-bar">
            <?php
                include_once("nav-bar.php");
            ?>
        </div>
        <div class="container">
            <div class="title">
              <h1>
              <?php
                echo $game->_getTitle();
               ?>
             </h1>
            </div>
            <hr>
            <div class="overlay">
              <?php
              echo $game->_getOverlay();
              ?>
            </div>
            <div class="team">

            </div>
        </div>
        <div class="footer">
        <?php
              include_once("footer.php");
        ?>
        </div>
    </BODY>
</HTML>
