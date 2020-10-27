<?php
declare(strict_types=1);

//include all your model files here

require 'Model/User.php';
//include all your controllers here
require 'Controller/Connection.php';
require 'Controller/HomepageController.php';
require 'Controller/InfoController.php';


//DISPLAY ERROR HANDLING
ini_set("display_errors", '1');
ini_set("display_startup_errors", '1');
error_reporting(E_ALL);


//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$pdo = new PDO($dsn, $dbuser, $dbpass);
