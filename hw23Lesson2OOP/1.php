<?php

class University
{
    public $direction;

    public function info ()
    {
        return ' direction is "' . $this->direction . '"';
    }
}

class Course extends University
{
    public $course;


    public function info() {
        return ' Course ' . $this->course . parent::info() . PHP_EOL;
    }
}

$res = new Course();

$res->direction = 'Computer engineering';
$res->course = 'Computer systems and networks, ';


echo $res->info();
