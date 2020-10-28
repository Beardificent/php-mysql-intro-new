<?php

class overviewController
{

    public function render (array $GET, array $POST)
    {
        //new connection
        $connection = new Connection();
        //get function from connection.php.
        $students = $connection->getUsers();


        $path = 'View/overview.php';
        // NEEDS TO BE THIS FUNCTION OF OVERVIEWCONTROLLER $this->checkForm($POST);
        require $path;
    }


}


