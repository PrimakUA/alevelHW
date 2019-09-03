<?php

abstract class Animal
{
    public function doSound()
    {
        echo '';
    }
}

class Dog extends Animal
{
    public function doSound()
    {
        echo 'Gav gav. Grrrrr' . "<br>";
    }
}

class Bird extends Animal
{
    public function doSound()
    {
        echo 'Crrrrr crrrrrr' . "<br>";
    }
}

class Master extends Animal
{
    public function requestSound(Animal $animal)
    {
        return $animal->doSound();
    }

    public function doSound()
    {
        echo 'Kyky' . "<br>";
    }
}

$dog = new Dog;
$bird = new Bird;

$me = new Master;

$me->requestSound($bird);

$me->requestSound($dog);

$me->requestSound($me);

$me->doSound();