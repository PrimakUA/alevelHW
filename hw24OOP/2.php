<?php

abstract class Transport
{
    public function engineSound()
    {
        echo 'Engine sound is - ';
    }
}

class Car extends Transport
{
    public function engineSound()
    {
        echo parent::engineSound() . 'brrrrrrrrr have a car' . '<br>';
    }
}

class Motorcicle extends Transport
{
    public function engineSound()
    {
        echo parent::engineSound() . 'br br br br br have a motorbike' . '<br>';
    }
}

$car = new Car();
$motorcicle = new Motorcicle();
echo $car->engineSound();
echo $motorcicle->engineSound();
