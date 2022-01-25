<!DOCTYPE html>

<head>
 <title>Medication</title>
 <style>
 /* input[type=text] {
  width: 20%;
  padding: 5px 20px;
  
  margin: 10px 10px;
  /* margin-left: 10%; */
 } */
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
  $list=$mysqli->query("select * from medication order by ID");
  
    ?>
    
    
    <h1> Add categories </h1>
    <form class="box" method="post" action="Controller.php"  onsubmit="return validate_form ();">
       First Name : 
        <br> 
        <!-- <? echo("ss" . "<br>");?> -->
       
       Name :
       <br> <input type = "text" name = "Name" /> 
       <br>
       Category : 
       <select name ="Parent">
        <?php
        $name='';
        echo "<option value='$name'>$name</option>";
        while($row_list=$list->fetch_assoc()){ 
          
            $name =  $row_list["Name"];
            echo "<option value='$name'>$name</option>";
        }
        ?>
        
    </select>
       <br>
       <input type = "submit" value = "Submit"/>
    </form>
</body>
</html>