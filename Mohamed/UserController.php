<?php
include_once("user.php");
include_once("../Error/errors.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $DOB = $_POST['DOB'];
    //usertype
    $pass=0;
    $userx = new user();
    
    $uname = $_POST['Username'];
    $password = $_POST['Password'];
    $confirm=$_POST['ConfirmPassword'];
    if($password==$confirm)
    {$pass++;}
    else
    {$pass=10;}
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $DayWorking = $_POST['DayWorking'];
    $StartTime = $_POST['StartTime'];
    $EndTime = $_POST['EndTime'];
    $Gender = $_POST['Gender'];
    $Salary = $_POST['Salary'];
    $usertype_name=$_POST['user_type'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    include_once('userCreationModel.php');//model

    if (!empty($fname)&&!empty($password)&&!empty($email)&&!empty($phoneNumber)&&!empty($DayWorking)&&!empty($StartTime)&&!empty($EndTime)&&!empty($Gender)&&
    !empty($Salary)&&!empty($usertype_name)&&!empty($confirm))
    {
        $pass++;
    }
    if($pass==2)
      {  $user = new UserCreation();
        $user->userCreation2($fname, $lname, $DOB, $uname, $hashed_password, $email, $phoneNumber, $DayWorking, $StartTime, $EndTime, $Gender, $Salary,$usertype_name);
      }
   if($pass<2)
    {    $err=new errors();
        $err->errosList(2); 
    }
    if($pass>=10)
    {    $err=new errors();
        $err->errosList(3);
    }
}

?>