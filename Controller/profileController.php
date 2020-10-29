<?php

class ProfileController {


    public function render (array $GET, array $POST)
    {
        //new connection
        $connection = new Connection();
        //get function from connection.php.
        $student = $connection->getProfile(intval($GET['user']));

        $path = 'View/profile.php';
        // NEEDS TO BE THIS FUNCTION OF OVERVIEWCONTROLLER $this->checkForm($POST);
        require $path;
    }

    public function updateForm()
    {
        $connection = new Connection();
        $path = 'View/updateForm.php';
        require $path;
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $email = $_POST['email'];
            $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $connection->updateUser($firstName, $lastName, $email,$hash);
        }
    }

}
