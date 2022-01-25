<?php
class UrineTestViewer{
	function UrineTestView($test)
	{
		echo"<table border = '1' id = 'abc' >";
	 echo"<tr><td>Value</td><td>orderid</td><td>OptionID</td>
		  <td>testingmethodId</td><td>patientid</td>";
	  foreach ($test as $value) {
	        echo "<tr>";
            echo "<td>".$value->Value ."</td>";
            echo "<td>". $value->orderid ."</td>";  
			echo "<td>".$value->OptionID ."</td>";  
		    echo "<td>".$value->testingmethodId ."</td>";  
		    echo "<td>".$value->patientid ."</td>";  
		echo "</tr>";
	}
	echo"</table>";
	 
	}
}
?>