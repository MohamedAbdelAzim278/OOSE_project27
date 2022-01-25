<?php
include_once'Medicine.php';
include_once'MedicineInsert.php';
class Proxy implements InsertMedicine
{
    $medicine = new Medicine();
    public $md;
    function __construct($med)
    {
        $this->md = $med; 
    }
    function InsertMedicine($md)
    {
        $z = $md->CheckExpirationDate($md->medicineExpirationYear);
        if($z == 1)
        {
            $this->medicine->InsertMedicine($md);
        }
    }
}
?>