<?php

class University
{
    public $direction;

    public function info ()
    {
        return ' direction is "' . $this->direction . '",';
    }
}

class Course extends University
{
    public $course;


    public function info() {
        return ' Course ' . $this->course . parent::info() . PHP_EOL;
    }
}

class Group extends Course
{
    public $group;

    public function info() {
        return parent::info() . ' group - '. $this->group . PHP_EOL;
    }
}

$res = new Group();
$res->direction = 'Computer engineering';
$res->course = 'Computer systems and networks, ';
$res->group = 'KI-07-3';

echo $res->info();
