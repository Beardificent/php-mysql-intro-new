<?php

class ProfileController {


    public function render (array $GET, array $POST)
    {var_dump($GET);
        //new connection
        $connection = new Connection();
        //get function from connection.php.
        $student = $connection->getProfile(intval($GET['user']));

        $path = 'View/profile.php';
        // NEEDS TO BE THIS FUNCTION OF OVERVIEWCONTROLLER $this->checkForm($POST);
        require $path;
    }


}
