<html>
<body>
<form action="../Controllers/PageController.php" method = "post">
<label for="PM">Choose a Testing Method</label>
<select name="PM" id="PM">
  <option value="1">BloodTest</option>
  <option value="2">UrineTest</option>
</select>
<br>
<p>Enter the order id <input type = "text" name = "ord">
<p> Enter the cost <input type = "text" name = "cost">
  <input type="submit" name = "TestChoice">
</form>


</body>
</html>