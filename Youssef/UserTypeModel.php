<?php 

class UserTypeCreation
{
    function addUserType($Name)
    {
        $con = mysqli_connect("localhost", "root", "", "hospitalproject");
        if(!$con)
        {
            die('Could not connect: ' . mysqli_error());
        }
        $sql = "INSERT INTO usertype(Name) VALUES ('$Name')";
        
        if($con->query($sql)===true)
        {
            echo ("Created");
        }
        else
        {
            echo("not created");
        }
    }
}

?>