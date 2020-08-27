<?php
    session_start();                                    //Session Start
    require_once '../scripts/functions.php';                 //Connecting functions file

    if(!isset($_SESSION['SignedIn']) && !$_SESSION['SignedIn'])
    {
        header("location:../index.php");
    }
?>

<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <meta charset='utf-8'/>
        <title>3Pixel</title>
        <link type="text/css" href="/styles/main.css" rel="stylesheet">
        <link type="text/css" href="/styles/home.css" rel="stylesheet">
        <link type="text/css" href="/styles/navbar.css" rel="stylesheet">
        <link type="text/css" href="/styles/webhook.css" rel="stylesheet">
        <link rel="icon" href="/img/logo.png">
        <script src="/scripts/jsfunctions.js"></script>
        <script>
            function switchForm()
            {
                document.getElementById('isembed').checked ? changeObjectVisibility("webhookform","none", "webhookembedform", "flex") : changeObjectVisibility("webhookform","flex", "webhookembedform", "none");
            }
             

            </script>
    </HEAD>
    <BODY>
        <div id="container">
            <div id="nav-bar">
                <?php
                    include_once("nav-bar.php");
                ?>
            </div>
            <div id="main-container"> 
            <div id="form-container">
                <div id="visiblity">
                    <label>Embed</label>
                    <input type="checkbox" name="isEmbed" id="isembed" onchange='switchForm()'> <br>
                </div>
                <div id="msg-container">
                    <form action="/scripts/WebHookControler.php" method="POST" id="webhookform">
                        <h1>Msg</h1>
                        <label for="msg">Message</label>
                        <textarea type="text" name="msg"></textarea>
                        <label for="author">Author </label>
                        <input type="text" name="author">
                        <label for="avatarurl">Avatar URL </label>
                        <input type="text" name="avatarurl">
                        <input type="submit" name="submit" value="Send">
                    </form>
                    <?php
                        if(isset($_SESSION['webhook-err'])&&!empty($_SESSION['webhook-err']))
                        {
                            echo $_SESSION['webhook-err'];
                            $_SESSION['webhook-err'] = NULL;
                        }
                    ?>
                </div>     
                <div id="embed-container">
                    <form action="/scripts/WebHookControler.php" method="POST" id="webhookembedform">
                        <h1>Embed</h1>
                        <label for="embed-title">Title </label>
                        <input type="text" name="embed-title">
                        <label for="embed-description">Message </label>
                        <textarea type="text" name="embed-description"></textarea>
                        <label for="embed-author">Author </label>
                        <input type="text" name="embed-author">
                        <label for="embed-avatarurl">Avatar URL </label>
                        <input type="text" name="embed-avatarurl">
                        <label for="embed-link">Link </label>
                        <input type="link" name="embed-link">
                        <input type="submit" name="embed-submit" value="Send">        
                    </form>
                    <?php
                        if(isset($_SESSION['webhook-err'])&&!empty($_SESSION['webhook-err']))
                        {
                            echo $_SESSION['webhook-err'];
                            $_SESSION['webhook-err'] = NULL;
                        }
                    ?>
                </div>
            </div>
            </div>
        </div>
        <div id="footer">
            <?php
              include_once("footer.php");  
            ?>
        </div>
    </BODY>
</HTML>

