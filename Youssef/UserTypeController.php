<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST['name'];
    include_once('UserTypeModel.php');//model
    $userType = new UserTypeCreation();
    $userType->addUserType($name);
}
?>