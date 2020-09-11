<?php

    function connect_to_db()                                                            //Connect To Database Function
    {
        $_dbhost = "localhost";                                                             //Database Host
        $_dbname = "3pixel";                                                                //Database Table Name
        $_dbuser = "3pixel_user";                                                           //Database User Name
        $_dbpass = "yA8rxknnkYevTsRJ";                                                      //Database Password

        try{
            $pdo = new PDO("mysql:host=".$_dbhost.";dbname=".$_dbname,$_dbuser,$_dbpass);    //Connect To Database
            $pdo->SetAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);               //Set Default Fetch Method To Object

            return $pdo;                                                                    //Return Object
        }catch(PDOexception $e)                                                             //Catch Eventually Errors
        {
            $e->getMessage();                                                               //Return Error
        }
    }


    
