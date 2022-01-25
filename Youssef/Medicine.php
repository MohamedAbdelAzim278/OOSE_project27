<?php
include_once'MedicineInsert';
class Medicine implements InsertMedicine
{
    $medicineName;
    $medicineID;
    $medicineExpirationDay;
    $medicineExpirationMonth;
    $medicineExpirationYear;
   

    function InsertMedicine($medX)
    {
        $con = mysqli_connect("localhost", "root", "", "DBproject");
		$sql = "Insert into Medicine (MedicineID, MedicineName, MedicioneExpirationYear) values ('$medX->medicineID', '$medX->medicineName', '$medX->medicineExpirationYear')";
    }

    function CheckExpirationDate($expirationYear)
    {
        $currentYear = date("Y");
        if($currentYear < $medicineExpirationYear)
            return 1;
        else
            return 0;
    }
}
?>