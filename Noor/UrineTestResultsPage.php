
<!DOCTYPE html>
<html>
<head>
 <title>TEST Results FORM</title>
</head>
<body>
    <form class="box" method="post" action="../Controllers/DoctorController.php"  onsubmit="return validate_form ();">

<big>TEST FORM </big> 
<select name="TestOptions">
<option value = "1">BloodTest</option>
<option value = "2">UrineTest</option>
<option value = "3">CovidTest</option>

</select>
<input type= "text" name = "patientid" placeholder="patientid">  
<input type = "text" name = "Result" placeholder="Result">
<input type = "text" name = "Patientstatus" placeholder="Patientstatus">
<input type = "text" name = "Orderid" placeholder = "orderid">         
<input type="submit" value="Confirm" name = "TestingResults" value="UrineTest" class="button">
    
    </form>
</body>
</html>
