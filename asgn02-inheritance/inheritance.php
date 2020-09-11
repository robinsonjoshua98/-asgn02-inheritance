<?php 

class motorVehicles {
    
    public $wheelCount;
    public $seatsAvailable;
    public $is_roadLegal = false;

    function aboutVehicle() {
        return "This motor vehicle has $this->wheelCount wheels and $this->seatsAvailible many seats availible";
    }

}

class Truck extends motorVehicles {
    public $wheelCount = 4;
    public $seatsAvailable = 6;
    public $is_roadLegal = true;

    protected $has_bed = true;
    protected $fourWheelDrive = true; 
    
    function truckFunction() {
        return "This truck has four wheel drive and has a full size bed!";
    }

    
}

class Car extends motorVehicles {
    public $wheelCount = 4;
    public $seatsAvailable = 5;
    public $is_roadLegal = true;function
    
    carFunction () {
        return "Cars are good for fuel efficency!";
    }

    
}

class Van extends motorVehicles {
    public $wheelCount = 4;
    public $seatsAvailable = 7;
    public $is_roadLegal = true;
    
    function vanFunction () {
        return "Vans are the perfect family vehicle!";
    }

}

class Motorcycle extends motorVehicles {
    public $wheelCount = 2;
    public $seatsAvailable = 2;
    public $is_roadLegal = true;

    function motoFunction () {
        return "Motorcycles are a fun adrenaline rush for you and maybe one other person to enjoy!";
    }
}


echo "<hr />";

$f150 = new Truck;
$f150->wheelCount = 4;
$f150->seatsAvailible = 6;


$corrola = new Car;
$corrola->wheelCount = 4;
$corrola->seatsAvailible = 5;


$TownandCountry = new Van;
$TownandCountry->wheelCount = 4;
$TownandCountry->seatsAvailible = 7;


$motorcycle = new Motorcycle;
$motorcycle->wheelCount = 4;
$motorcycle->seatsAvailible = 2;

echo 'F150: ' . $f150->aboutVehicle() . "<br />";
echo $f150->truckFunction(). "<br />";
echo 'Town and Country: ' . $TownandCountry->aboutVehicle() . "<br />";
echo $TownandCountry->vanFunction(). "<br />";
echo 'Corrola: ' . $corrola->aboutVehicle() . "<br />";
echo $corrola->carFunction(). "<br />";
echo 'Motorcyle: ' . $motorcycle->aboutVehicle() . "<br />";
echo $motorcycle->motoFunction(). "<br />";

?>