<?php


class Connection
{

// XANDER HELPED:  PUT CONNECTION IN FUNCTION SO YOU CAN CALL UPON IT IN ANOTHER FILE (register.php)
    function openDB()
    {
        $dbhost = "localhost";
        $dbuser = "becode";
        $dbpass = "becode123";
        $db = "becode";

        // SET DSN
        $dsn = 'mysql:host=' . '$dbhost' . ';db=' . $db;


        $driverOptions = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        return new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass, $driverOptions);


    }


}
