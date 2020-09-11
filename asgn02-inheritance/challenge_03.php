<?php 

class motorVehicles {
    
    var $wheelCount;
    var $seatsAvailable;
    var $is_roadLegal = false;

    function aboutVehicle() {
        return "This motor vehicle has $this->wheelCount wheels and $this->seatsAvailible many seats availible";
    }

}

class Truck extends motorVehicles {
    var $wheelCount = 4;
    var $seatsAvailable = 6;
    var $is_roadLegal = true;

    var $has_bed = true;
    var $fourWheelDrive = true; 
    
    function truckFunction() {
        return "This truck has four wheel drive and has a full size bed!";
    }

    
}

class Car extends motorVehicles {
    var $wheelCount = 4;
    var $seatsAvailable = 5;
    var $is_roadLegal = true;function
    
    carFunction () {
        return "Cars are good for fuel efficency!";
    }

    
}

class Van extends motorVehicles {
    var $wheelCount = 4;
    var $seatsAvailable = 7;
    var $is_roadLegal = true;
    
    function vanFunction () {
        return "Vans are the perfect family vehicle!";
    }

}

class Motorcycle extends motorVehicles {
    var $wheelCount = 2;
    var $seatsAvailable = 2;
    var $is_roadLegal = true;

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