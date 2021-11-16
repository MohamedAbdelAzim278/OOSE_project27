<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $DOB = $_POST['DOB'];
    //usertype
    $UserTypeIdMock = $_POST['UserTypeID'];
    if($UserTypeIdMock == 1 || $UserTypeIdMock == 2 || $UserTypeIdMock == 3 )
    {
        $UserTypeID = $UserTypeIdMock; 
    }
    else
    {
        echo "Write a proper User Type ID";
    }
    $uname = $_POST['Username'];
    $password = $_POST['Password'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $DayWorking = $_POST['DayWorking'];
    $StartTime = $_POST['StartTime'];
    $EndTime = $_POST['EndTime'];
    $Gender = $_POST['Gender'];
    $Salary = $_POST['Salary'];

    include_once('userCreationModel.php');//model
    $user = new UserCreation();
    $user->userCreation2($fname, $lname, $DOB, $UserTypeID, $uname, $password, $email, $phoneNumber, $DayWorking, $StartTime, $EndTime, $Gender, $Salary);
}
?>