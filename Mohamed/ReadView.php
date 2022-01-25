<!DOCTYPE html>
<body>
    
<?php 
  $mysqli = NEW Mysqli('localhost', 'root', '', 'hospitalproject'); 
  $list=$mysqli->query("select * from patient order by ID");
  
    ?>

    <h1> Enter Patient ID </h1>
    <form class="box" method="get" action="ReadController.php"  onsubmit="return validate_form ();">
    <select name ="patient">
       <?php
        $name ="";
        echo "<option value='$name'>$name</option>";
        while($row_list=$list->fetch_assoc()){ 
            $name =  $row_list['Name']; 
            echo "<option value='$name'>$name</option>";
        }
        ?>
         </select>
     
       <input type = "submit" value = "Read"/>
    </form>
</body>
</html>