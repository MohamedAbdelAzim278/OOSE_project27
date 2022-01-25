<?php 

class PatientCreation
{
    function addPatient($Name, $DOB,$LastName,$phoneNumber)
    {
        $con = mysqli_connect("localhost", "root", "", "hospitalproject");
        if(!$con)
        {
            die('Could not connect: ' . mysqli_error());
        }
        $sql = "INSERT INTO patient( Name, DOB, LastName, phoneNumber) VALUES ('$Name', '$DOB', '$LastName', '$phoneNumber')";
        
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