<?php
class UrineTestViewer{
	function UrineTestViewer($test)
	{
	echo "Haemglobin " . $test->Haemglobin;
	echo "Neutrophilis : ". $test->Neutrophilis;
	echo "Lymphocytes : ". $test->Lymphocytes;
	}
}
?>