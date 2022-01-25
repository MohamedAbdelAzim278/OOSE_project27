<?php

class errors{

function errosList($id)
{
    $con = mysqli_connect("localhost", "root", "", "hospitalproject");
        if(!$con)
        {
            die('Could not connect: ' . mysqli_error());
        }
        $sql= "SELECT * FROM errormessages WHERE ID=$id";

        $result =  mysqli_query($con, $sql);
        if (!empty($result) && $result->num_rows > 0)
        {
           if($row = $result->fetch_assoc()) 
           {
               $Name= $row["Error"];
           }
        }
        echo($Name);
}

}



?>