<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    $uname = $_POST['Username'];
    $password = $_POST['Password'];

    include_once('LoginModel.php');//model
    $user = new loginCheck();
    $user->checkLogin($uname,$password);
}
?>