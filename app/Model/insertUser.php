<?php

class insertUser extends Connection
{

    public function insertAllData()
    {
        $sql ="INSERT INTO student (first_name, last_name, email)
            VALUES (?,?,?)";
        $result = $this->connect()->prepare($sql);
        $result->execute(['first_name' => $firstName, 'last_name' => $lastName, 'email' => $email]);
        echo 'Your information has been stored to be sold to third parties.';
    }

}
