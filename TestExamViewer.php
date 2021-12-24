<?php
class TestExamViewer{
	function ExamViewer($test)
	{
		echo "<br>";
	echo "TestType" . $test->TestTypeId;
	echo "<br>";
	echo "TestResultDescription : ".$test->TestResultDescription;
	echo "<br>";
	echo "DangerStatus : ". $test->DangerStatus;
	echo "<br>";
	}
}
?>