<?php


class getUser extends Connection
{
//set to protected, goes through showUser to get printed.
    protected function getAllUsers()
    {
        $sql = "SELECT * FROM student";
        $result = $this->connect()->query($sql);
        $numRows = $result->rowCount();
        //NEW CODE will only work if set to public function (no need for showUser class)
        /* while ($row = $result->fetch()){
             echo $row['first_name'];
         }
        */
        //OLD CODE
        if ($numRows > 0){
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
            return $data;
        }


    }


}


