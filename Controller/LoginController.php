<?php


class LoginController
{
    public function render (array $GET, array $POST)
    {
        $path = 'View/login.php';
       // $this->checkLogin();
        require $path;
    }


    public function checkLogin()
    {

    }
}
