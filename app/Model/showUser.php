<?php

// Class is not used because I went for a public function
class showUser extends getUser
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
