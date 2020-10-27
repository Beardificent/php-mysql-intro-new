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

    public function getAllUsers()
    {
        $sql = "SELECT * FROM student";
        $result = $this->connect()->query($sql);
        while($student = $result->fetch()){
            echo $student['first_name'] . ' ' . $student['last_name'] . '<br/>';
        }
    }

}


