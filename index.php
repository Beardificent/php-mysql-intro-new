<?php
declare(strict_types=1);

//DISPLAY ERROR HANDLING
ini_set("display_errors", '1');
ini_set("display_startup_errors", '1');
error_reporting(E_ALL);

//include all your controllers here
require 'Model/Connection.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!


if(isset($_GET['page']) && $_GET['page'] == 'overview'){
    require 'Controller/OverviewController.php';
    $controller = new overviewController();
} elseif (isset($_GET['user'])){
    require 'Controller/profileController.php';
    $controller = new ProfileController();

} elseif(isset($_GET['Edit']) && $_GET['Edit'] != null){
    require 'Controller/profileController.php';
    $controller = new ProfileController();
    $controller->updateForm();
}
elseif (isset($_GET['page']) && $_GET['page'] == 'register'){
    require 'Controller/InsertController.php';
    $controller = new insertController();
} else {
    require 'Controller/LoginController.php';
    $controller = new LoginController();
}


$controller->render($_GET, $_POST);

//meerdere controllers nodig voor meerdere paginas. if statements gebruiken?

/*
//Adjust parameters to highlight specific database entries (example ALL MALE or everyone named BOB)
//$users->setUsers('cis', 'magito', 'cis.magito@gmail.com');
*/



