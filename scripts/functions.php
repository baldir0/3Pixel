<?php

    require __DIR__ .'/config.php';

    function signIn($login,$password,$conn)
    {
        $request = $conn->query('Select profile_id,password From users where login="'.$login.'"');
        if(!$request){
            return false;
        }

        $res = $request -> fetch(PDO::FETCH_ASSOC);
        if(password_verify($password,$res['password']))
        {
            $_SESSION['SignedIn']=true;
            $_SESSION['UserId']=$res['profile_id'];
            $_SESSION['SessionToken']=bin2hex(openssl_random_pseudo_bytes(24));
            return true;
        }
        return false;
    }

    function getUserName($userid, $conn)
    {
        $request = $conn -> query('Select nick from profiles where id="'.$userid.'"');
        if(!$request)
        {
            return false;
        }

        $res = $request -> fetch(PDO::FETCH_ASSOC);

        return $res['nick'];
    }

    