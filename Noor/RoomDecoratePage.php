
<!DOCTYPE html>
<html>
<head>
 <title>BLOOD TEST</title>
</head>

<style>
.submit{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

<body>
  

<big>RoomDecorator</big> 
<br>
<br>

<p>CHOOSE ROOMTYPE</p>
<input type= "button" name = "RichRoom" value = "RichRoom" id = "Rich" onclick="Add(0)">  
<input type = "button" name = "MiddleRoom"value= "MiddleRoom" id = "Poor" onclick="Add(1)">
<br>
<p> CHOOSE NEEDED TOOLS </p> 
<input type= "submit" name = "HeartRateMonitor" value = "HeartRateMonitor" id = "HR"onclick="Add(2)">  
<input type = "submit" name = "PatientWarmers"value= "PatientWarmers" id = "PW"onclick="Add(3)">
<br>
    
<br>   


<p>Choose Patient ID</p>
    <input type = "text" name = "ID">
    <br>
<input type = "button" value="Confirm" name = "RoomDec" value="RoomDec" onclick = "submitJArray()">


 
 


</body>
<script src = "Activate.js"></script>
</html>
