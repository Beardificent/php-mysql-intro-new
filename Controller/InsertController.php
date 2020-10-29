<?php


class insertController
{
    public function render (array $GET, array $POST)
    {
        $path = 'View/register.php';
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
                //don't make a variable of the passwordconfirm -> is saved otherwise
                $password = password_hash($data['password'], PASSWORD_DEFAULT);
                if(password_verify($data['passwordConfirm'], $password)){
                    $hash = $password; // make $hash so you can give that to your password in the query
                } else {
                    echo "password should be equal to password confirm.";
                }
                //end new
                $obj = new Connection();
                $obj->insertAllData($firstName,$lastName,$email, $hash);
            }
        }

}
