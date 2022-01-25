<?php
include_once("permissionModel.php");
include_once("../Error/errors.php");
class loginCheck
{
    function checkLogin($username, $pass)
    {
        $con = mysqli_connect("localhost", "root", "", "hospitalproject");
        if(!$con)
        {
            die('Could not connect: ' . mysqli_error());
        }
        $sql="select * from user where Username = '$username'";

        $result =  mysqli_query($con, $sql);
        //echo($sql);
        if (!empty($result) && $result->num_rows > 0)
        {
           if($row = $result->fetch_assoc()) 
           {
               $pw = $row["Password"];
              $type=$row["UserTypeId"];
               $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
                if(password_verify($pass, $pw))
                {
                //echo("welcome ".$row["Username"]);
                $permission = new links();
                $permission->availableLinks($row);
                }
                else
                {
                    $err=new errors();
                    $err->errosList(1);
                }
            }
        }
        else {$err=new errors();
            $err->errosList(1); }
        //$stmt = "SELECT ID, Username, Password from user where Username= '$username' limit 1";
        //$stmt=mysqli_query($con,$stmt);
        //mysqli_stmt_bind_param($stmt, "s", $param_username);
    }
}



?>