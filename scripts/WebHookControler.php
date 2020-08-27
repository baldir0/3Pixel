<?php
session_start();
if(!isset($_SESSION['SignedIn'])||!$_SESSION['SignedIn'])
{
    header("location: ../index.php");
}

// ▼ CHECK IS FORM SENDED ▼
if(isset($_POST['submit']))
{
    // === ▼ CHECK FIELDS ▼ ===
    if(isset($_POST['msg'])&&isset($_POST['author'])&&isset($_POST['avatarurl'])&&!empty($_POST['msg']))
    {
        // ====== ▼ IMPORT CLASS ▼ ======
        require_once 'webhook.php';
        // ====== ▼ CREATE NEW OBJECT ▼ ======
        $_WEBHOOK = new DiscordWebHook();

        // ====== ▼ ASSIGN DATA TO OBJECT VARIABLES ▼ ======
        if(!empty($_POST['msg']))
            $_WEBHOOK->setMsg($_POST['msg']);
        if(!empty($_POST['author']))
            $_WEBHOOK->setUserName($_POST['author']);
        if(!empty($_POST['avatarurl']))
            $_WEBHOOK->setAvatarUrl($_POST['avatarurl']);
            
        // ====== ▼ SEND MESSAGE ▼ ======
        $_WEBHOOK->send();
    }
}
// ▼ CHECK IS FROM SENDED
if(isset($_POST['embed-submit']))
{
    // === ▼ CHECK FIELDS ▼ ===
    if(isset($_POST['embed-title'])&&isset($_POST['embed-description'])&&!empty($_POST['embed-title'])&&!empty($_POST['embed-description']))
    {
        // ====== ▼ IMPORT CLASS ▼ ======
        require_once 'webhook.php';
        // ====== ▼ CREATE NEW OBJECT ▼ ======
        $_WEBHOOK = new DiscordWebHook();
        
        // ====== ▼ ASSIGN DATA TO OBJECT VARIABLES ▼ ======
        if(!empty($_POST['embed-title']))
            $_WEBHOOK->setTitle($_POST['embed-title']);

        if(!empty($_POST['embed-author']))
            $_WEBHOOK->setUserName($_POST['embed-author']);

        if(!empty($_POST['embed-avatarurl']))
            $_WEBHOOK->setAvatarUrl($_POST['embed-avatarurl']);

        if(!empty($_POST['embed-description']))
            $_WEBHOOK->setDescription($_POST['embed-description']);

        if(!empty($_POST['embed-link']))
            $_WEBHOOK->setLink($_POST['embed-link']);

        // ====== ▼ SEND MESSAGE ▼ ======
        $_WEBHOOK->sendEmbed();
            
    }else echo "Title and Message cannot be empty!";
}
header("location: ../sites/webhooks.php");

?>