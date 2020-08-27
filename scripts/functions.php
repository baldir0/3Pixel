<?php

    require __DIR__ .'/config.php';

    

    function getUserName($userid, $conn)
    {
        $request = $conn -> query('Select nick from profiles inner join users on profiles.id = users.profile_id where users.id="'.$userid.'"');
        if(!$request)
        {
            return false;
        }

        $res = $request -> fetch(PDO::FETCH_ASSOC);

        return $res['nick'];
    }


