<!DOCTYPE html>

<head>
 <title>AppointmentAdd</title>
 <style>
 input[type=text] {
  width: 20%;
  padding: 5px 20px;
  
  margin: 10px 10px;
  /* margin-left: 10%; */
 }
 input[type=password] {
  width: 20%;
  padding: 5px 20px;
  
  margin: 10px 10px;
  /* margin-left: 10%; */
 }
 /* body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #ADABAB;
         } */
 </style>
</head>

<body>

            <?php 
  $mysqli = NEW Mysqli('localhost', 'root', '', 'hospitalproject'); 
  $list=$mysqli->query("select * from usertype order by ID");
  
    ?>
    
    
    <h1> Write the details for register </h1>
    <form class="box" method="post" action="UserController.php"  onsubmit="return validate_form ();">
       First Name : 
        <br> 
        <!-- <? echo("ss" . "<br>");?> -->
       <input type = "text" name = "firstName" /> 
       <br>
       Last Name :
       <br> <input type = "text" name = "lastName" /> 
       <br>
       Date Of Birth :
       <br> <input type = "text" name = "DOB" /> 
       <br>
       User Type ID : <br>
       <select name ="user_type">
        <?php
        $name ="";
        echo "<option value='$name'>$name</option>";
        while($row_list=$list->fetch_assoc()){ 
            $name =  $row_list['Name']; 
            echo "<option value='$name'>$name</option>";
        }
        ?>
        
    </select>
       <br>
       Username : <br>
       <input type = "text" name = "Username" /> 
       <br>
       Password :<br>
        <input type = "password" name = "Password" /> 
       <br>
       Confirm Password :<br>
        <input type = "password" name = "ConfirmPassword" /> 
       <br>
       Email : <br>
       <input type = "text" name = "email" /> 
       <br>
       Phone Number : <br>
        <input type = "text" name = "phoneNumber" /> 
       <br>
       Day Working : <br>
        <input type = "text" name = "DayWorking" /> 
       <br>
       Start Time  : <br>
        <input type = "text" name = "StartTime" /> 
       <br>
       End Time : <br>
       <input type = "text" name = "EndTime" /> 
       <br>
       Gender : <br>
       <input type = "text" name = "Gender" /> 
       <br>
       Salary : <br>
       <input type = "text" name = "Salary" /> 
       <br>
       
       <input type = "submit" value = "Create User"/>
    </form>
</body>
</html>