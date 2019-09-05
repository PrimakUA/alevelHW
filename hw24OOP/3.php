<?php


interface VehicleAdd
{
    public function addVehicle();
}


abstract class Transport implements VehicleAdd
{
    public $name;
    public $color;
    public $year;
    public $engineVolume;

    public function __construct($name, $color, $year, $engineVolume)
    {
        $this->name = $name;
        $this->color = $color;
        $this->year = $year;
        $this->engineVolume = $engineVolume;
    }
}

class Motorcycle extends Transport
{
    public function addVehicle()
    {
        echo 'New motorcycle added.' . '<br>';
    }

    public function newTransport()
    {
        return 'It is ' . $this->name . ' engine ' . $this->engineVolume . ' cm3, year ' . $this->year . ', color is - '
            . $this->color . '<br>';
    }

}

class Scooter extends Motorcycle
{
    public function addVehicle()
    {
        echo 'New scooter added.' . '<br>';
    }
}

class Quad extends Motorcycle
{
    public function addVehicle()
    {
        echo 'New quad added.' . '<br>';
    }
}
$motorcycle = new Motorcycle('Honda CBR', 'Yellow', 2014, '600');
$scooter = new Scooter('Honda Dio', 'White', 2007, '49.9');
$quad = new Quad('Spark SP', 'Green', 2015, '110');


echo $motorcycle->addVehicle() . $motorcycle->newTransport();
echo $quad->addVehicle() . $quad->newTransport();
echo $scooter->addVehicle() . $scooter->newTransport();