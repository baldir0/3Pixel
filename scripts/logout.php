<?php
    session_start();

    if(!function_exists('hash_equals'))
    {
        function hash_equals($str1,$str2)
        {
            if(strlen($str1)!=strlen($str2))
                return false;
            
            $res = $str1 ^ $str2;
            $ret = 0;
            for($i = strlen($res) - 1; $i >= 0; $i--) $ret |= ord($res[$i]);
            return !$ret;
        }
    }

    if(isset($_GET['token']))
    {
        if(hash_equals($_SESSION['SessionToken'],$_GET['token']))
        {
            session_destroy();

            header('location: ../index.php');
            exit;
        }else header('location: ../index.php');
    }else header('location: ../index.php');
?>