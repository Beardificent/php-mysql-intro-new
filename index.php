<?php
declare(strict_types=1);

//DISPLAY ERROR HANDLING
ini_set("display_errors", '1');
ini_set("display_startup_errors", '1');
error_reporting(E_ALL);

//include all your controllers here
require 'Model/Connection.php';
require 'Controller/insertController.php';






//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

/*This if(getAllUsers was a public function && have the newer code active) would print out the data from the database.
$testObj = new getUser();
$testObj->getAllUsers();
*/

$controller = new insertController();
$controller->render($_GET, $_POST);

//meerdere controllers nodig voor meerdere paginas.

/*
//Adjust parameters to highlight specific database entries (example ALL MALE or everyone named BOB)
//$users->setUsers('cis', 'magito', 'cis.magito@gmail.com');
*/



