<?php

class University
{
    private $direction;

    public function getDirection()
    {
        return$this->direction;
    }

    public function setDirection($direction)
    {
        $this->direction = $direction;
    }

    public function info ()
    {
        return ' direction is "' . $this->getDirection() . '",';
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
    private $group;

    public function getGroup()
    {
        return$this->group;
    }

    public function setGroup($group)
    {
        $this->group = $group;
    }

    public function info() {
        return parent::info() . ' group - '. $this->getGroup() . PHP_EOL;
    }
}

$res = new Group();
$res->setDirection('Computer engineering');
$res->course = 'Computer systems and networks, ';
$res->setGroup('KI-07-3');

echo $res->info();
