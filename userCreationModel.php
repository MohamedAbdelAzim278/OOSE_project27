<?php 

class UserCreation
{
    function userCreation2( $firstName, $lastName, $DOB, $UserTypeId, $Username, $Password, $email, $phoneNumber, $Day_Working, $Start_Time, $End_Time, $sex, $salary)
    {
        $con = mysqli_connect("localhost", "root", "", "hospitalproject");
        if(!$con)
        {
            die('Could not connect: ' . mysqli_error());
        }
        $sql = "INSERT INTO user(firstName, lastName, DOB, UserTypeId, Username, Password, email, phoneNumber, Day_Working, Start_Time, End_Time, sex, salary) VALUES (
        '$firstName', '$lastName', '$DOB', '$UserTypeId', '$Username', '$Password', '$email', '$phoneNumber$', '$Day_Working', '$Start_Time', '$End_Time', '$sex', '$salary')";
        
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