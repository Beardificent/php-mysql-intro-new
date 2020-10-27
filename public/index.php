<?php
declare(strict_types=1);

//DISPLAY ERROR HANDLING
ini_set("display_errors", '1');
ini_set("display_startup_errors", '1');
error_reporting(E_ALL);

//include all your controllers here
require '../app/Controller/Connection.php';
require '../app/Model/User.php';
require '../app/View/viewUser.php';
require '../app/Controller/HomepageController.php';
require '../app/Controller/InfoController.php';








//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!



$users = new viewUser();
$users->showAllUsers();
