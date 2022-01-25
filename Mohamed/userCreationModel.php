<?php 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
class UserCreation
{
    function userCreation2( $firstName, $lastName, $DOB, $Username, $Password, $email, $phoneNumber, $Day_Working, $Start_Time, $End_Time, $sex, $salary, $usertype_name)
    {
        $con = mysqli_connect("localhost", "root", "", "hospitalproject");
        if(!$con)
        {
            die('Could not connect: ' . mysqli_error());
        }
        $sql = "SELECT * FROM usertype WHERE Name = '$usertype_name'";
        $result =  mysqli_query($con, $sql);
        if($row = $result->fetch_assoc())
           {
               $ids= $row["ID"];
           }
        $sql = "INSERT INTO user(firstName, lastName, DOB, UserTypeId, Username, Password, email, phoneNumber, Day_Working, Start_Time, End_Time, sex, salary) VALUES (
        '$firstName', '$lastName', '$DOB', '$ids', '$Username', '$Password', '$email', '$phoneNumber$', '$Day_Working', '$Start_Time', '$End_Time', '$sex', '$salary')";
        
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