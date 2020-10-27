<?php


class viewUser extends User
{
    public function showAllUsers()
    {
        $students = $this->getAllUsers();
        foreach ($students as $student) {
            echo $student['first_name'] . '<br/>';
            echo $student['last_name'] . '<br/>';
            echo $student['email'] . '<br/>';
        }

    }

}
