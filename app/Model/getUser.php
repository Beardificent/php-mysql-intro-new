<?php


class getUser extends Connection
{
//set to protected, goes through showUser to get printed.
 /*   protected function getAllUsers()
    {    //OLD CODE
        $sql = "SELECT * FROM student";
        $result = $this->connect()->query($sql);
        $students = $result->rowCount();
        if ($students > 0){
            while ($student = $result->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $student;
            }
            return $data;
        }

    }
 */

    public function getUsers()
    {
        $sql = "SELECT * FROM student";
        $result = $this->connect()->query($sql);
        while($student = $result->fetch()){
            echo $student['first_name'] . ' ' . $student['last_name'] . '<br/>';
        }
    }


/*
    public function getAllUsers($firstName, $lastName, $email)
    {
        $sql = "SELECT * FROM student WHERE first_name = ? AND last_name = ? AND email = ?";
        $result = $this->connect()->prepare($sql);
        $result->execute([$firstName, $lastName, $email]);
        $students = $result->fetchAll();
        foreach ($students as $student) {
            echo $student['first_name'] . ' ' . $student['last_name'] . '<br/>';
        }

    }
*/

}


