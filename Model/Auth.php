<?php


class Auth {

    public function checkform()
    {
        $data = $_POST;

        if (empty($data['first_name']) ||
            empty($data['last-name']) ||
            empty($data['email']) ||
            empty($data['password']) ||
            empty($data['passwordConfirm'])) {

            die('Please fill all required fields!');
        }

        if ($data['password'] !== $data['passwordConfirm']) {
            die('Password and Confirm password should match!');
        }

    }
}
