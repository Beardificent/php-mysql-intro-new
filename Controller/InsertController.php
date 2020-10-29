<?php


class insertController
{
    public function render (array $GET, array $POST)
    {
        $path = 'View/register.php';
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
                //new
                $password = $data['password'];
                $passwordConfirm = $data['passwordConfirm'];
                if($password == $passwordConfirm){
                    $hash = PASSWORD_HASH($password, PASSWORD_DEFAULT); // make $hash so you can give that to your password in the query
                } else {
                    echo "password should be equal to password confirm.";
                }
                //end new
                $obj = new Connection();
                $obj->insertAllData($firstName,$lastName,$email, $hash);
            }
        }

}
