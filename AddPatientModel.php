<?php 

class PatientCreation
{
    function addPatient($Name, $DOB)
    {
        $con = mysqli_connect("localhost", "root", "", "hospitalproject");
        if(!$con)
        {
            die('Could not connect: ' . mysqli_error());
        }
        $sql = "INSERT INTO patient( Name, DOB) VALUES ('$Name', '$DOB')";
        
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