<?php


class User extends Connection
{

    protected function getAllUsers()
    {
    $sql = "SELECT * FROM student";
    $result = $this->connect()->query($sql);
    $numRows = $result->rowCount();
    if ($numRows > 0){
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        return $data;
    }

    }


}
