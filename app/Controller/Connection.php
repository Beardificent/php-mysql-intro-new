<?php


class Connection
{

// XANDER HELPED:  PUT CONNECTION IN FUNCTION SO YOU CAN CALL UPON IT IN ANOTHER FILE (register.php)

        private $dbhost;
        private $dbuser;
        private $dbpass;
        private $db;


    protected function connect()
    {
        $this->dbhost = "localhost";
        $this->dbuser = "becode";
        $this->dbpass = "becode123";
        $this->db = "becode";


        $driverOptions = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        $conn = new PDO('mysql:host=' . $this->dbhost . ';dbname=' . $this->db, $this->dbuser, $this->dbpass, $driverOptions);
        return $conn;

    }


}
