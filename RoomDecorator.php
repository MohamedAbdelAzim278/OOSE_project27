<?php
interface RoomDecorator
{
 
    public string function getDescription()
    {
        public string $desc="";
        return $desc;
    }

    public float function Cost();

}
class HeartRateMonitor implements RoomDecorator
{
    public string function getDescription()
    {
        $desc = "heart rate monitor";
    }
    public float function Cost()
    {
        return 10000;
    }
}

class PatientWarmer implements RoomDecorator
{
    public string function getDescription()
    {
        $desc = "patient warmer";
    }
    public float function Cost()
    {
        return 2000;
    } 
}

class InfusionPumps implements RoomDecorator
{
    public string function getDescription()
    {
        $desc = "infusion pumps";
    }
    public float function Cost()
    {
        return 1500;
    }
}

class EndoscopyEquipment implements RoomDecorator
{
    public string function getDescription()
    {
        $desc = "Endoscopy Equipment";
    }
    public float function Cost()
    {
        return 19000;
    }
}

?>