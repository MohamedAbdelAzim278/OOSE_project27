<!DOCTYPE html>
<body>
    <?php 
  $mysqli = NEW Mysqli('localhost', 'root', '', 'hospitalproject'); 
  $list=$mysqli->query("select * from patient order by ID");

    ?>
 
    <h1> Create Medical History </h1>
    <form class="box" method="post" action="Controller.php"  onsubmit="return validate_form ();">
     Patient ID : <br>
    <select name ="patient">
        <br>
        <?php
        $name ="";
        echo "<option value='$name'>$name</option>";
        while($row_list=$list->fetch_assoc()){ 
            $name =  $row_list['Name']; 
            echo "<option value='$name'>$name</option>";
        }
        ?>
<br> 

       DateTimeStamp :
       <br> <input type = "text" name = "Date" /> 
      <br>
       Surgeries :
       <br> <input type = "text" name = "Surgeries" /> 
       <br>
       VitalSigns : 
       <br><input type = "text" name = "VitalSigns" /> 
       <br>
       <input type = "submit" value = "Create User"/>
    </form>
    <style>
        h1{
      margin: 0 40%;
        color: rgb(255, 255, 255);
     }
        body {
           background-color: rgb(35, 149, 255);
          }  
          form[class =box]{
        margin: 0 40%;
        padding: 10px;
        background-color: #1ecbff;
      }
      input[type=text], select {
        width: 90%;
        padding: 12px 10px;
        margin: 8px 5%;
        display: block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }
        input[type=submit] {
        width: 50%;
        background-color: #114ffa;
        color: rgb(255, 255, 255);
        padding: 14px 20px;
        margin: 8px 25%;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition-duration: 0.4s;
        }

        input[type=submit]:hover {
         background-color: #0084ff;
        }
    </style>
</body>
</html>