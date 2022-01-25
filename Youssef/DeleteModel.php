<?php
class DeleteClass
{
    function DeleteRow($id)
    {
        $con = mysqli_connect("localhost", "root", "", "hospitalproject");
        if(!$con)
        {
            die('Could not connect: ' . mysqli_error());
        }
        //$sql = "SELECT * FROM appointment WHERE ID = $id";
        $sql= "UPDATE appointment SET isDeleted= 1 WHERE ID = $id";
        
    }
}



?>