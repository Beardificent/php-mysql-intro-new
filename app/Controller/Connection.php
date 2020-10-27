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

        //ASK WHAT THIS DRIVEROPTIONS IS
        $driverOptions = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        try {
            $dsn = 'mysql:host=' . $this->dbhost . ';dbname=' . $this->db;
            $pdo = new PDO($dsn, $this->dbuser, $this->dbpass, $driverOptions);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "connection failed: " . $e->getMessage();
        }





    }


}
