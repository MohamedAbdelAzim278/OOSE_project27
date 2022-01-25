
<!DOCTYPE html>
<html>
<head>
 <title>AppointmentAdd</title>
 <style>

 </style>
</head>
<body>
    <form class="box" method="post" action="../Controllers/NurseController.php"  onsubmit="return validate_form ();">

<big>Command Pattern Form For Bed</big> 
<br>
<big>BedID</big><input type= "text" name = "BedID" placeholder="BedID">
<br>
<big>Select Move</big>
<select name="MoveOption">
  <option value="UP">UP</option>
  <option value="DOWN">DOWN</option>
  <option value="LEFT">LEFT</option>
  <option value="RIGHT">RIGHT</option>
</select>
<br>
 <input type="submit" name = "Move">
</form>
</body>
</html>
