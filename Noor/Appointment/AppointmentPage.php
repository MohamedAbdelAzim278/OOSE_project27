
<!DOCTYPE html>
<html>
<head>
 <title>AppointmentAdd</title>
 <style>
 input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
 }
 </style>
</head>
<body>
    <form class="box" method="post" action="ReceptionistController.php"  onsubmit="return validate_form ();">

<big>Appointment For Patient FORM</big> 
<br>
<input type= "text" name = "DocID" placeholder="DocID">  
<br>
<input type = "text" name = "ReceptionistID" placeholder="ReceptionistID">
<br>
<input type = "text" name = "PatientId" placeholder="patientId">         
<br>
<input type= "text" name = "StartDate" placeholder="StartDate">  
<br>
<input type = "text" name = "Cost" placeholder="Cost">
<br>
<input type = "text" name = "roomID" placeholder="roomID">         
<br>
<input type = "text" name = "bedNumber" placeholder="bedNumber">
<br>
<input type="submit" value="Confirm" name = "AppointmentP" value="AppointmentP" class="button">

    </form>
</body>
</html>
