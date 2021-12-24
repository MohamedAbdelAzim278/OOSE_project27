<?php
class UrineTestViewer{
	function UrineTestView($test)
	{
	echo "Color: " . $test->Color;
	echo "<br>";
	echo "Appearance : ". $test->Appearance;
	echo "<br>";
	echo "Mucus : ". $test->Mucus;
	echo "<br>";
    echo "Ph : " . $test->PH;
	}
}
?>