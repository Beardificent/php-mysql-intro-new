<?php


class insertController
{
    public function render (array $GET, array $POST)
    {
        $path = 'View/insert.php';
        var_dump($POST);
        $this->checkForm($POST);
        require $path;
}

    public function checkForm($data)
    {
            if(isset($data['first_name'])) {
                $firstName = $data['first_name'];
                $lastName = $data['last_name'];
                $email = $data['email'];
                $obj = new Connection();
                $obj->insertAllData($firstName,$lastName,$email);
/*
                if (empty($firstName) || empty($lastName) || empty($email)) {
                    $status = "All fields are mandatory.";
                } else {
                    if (!preg_match('/^[\p{L} ]+$/u', $firstName) || !preg_match('/^[\p{L} ]+$/u', $lastName)) {
                        $status = "Check your spelling.";
                    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $status = "Please enter a valid email";
                    }
                }*/
            }
        }

}
