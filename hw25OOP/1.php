<?php

class StaticTest
{
    protected static $counter;
    static protected $last;
    public $data;

    public static function getInstance() {
        if (StaticTest::$counter++ < 1) {
            StaticTest::$last = new StaticTest();
            return StaticTest::$last;
        }
        else {
            return StaticTest::$last;
        }
    }
}

$st1 = StaticTest::getInstance();
$st1->data = 4;

$st2 = StaticTest::getInstance();
var_dump($st2->data);//должен вывести 4

$st3 = StaticTest::getInstance();
$st3->data = 8;
var_dump($st1->data);//Должно вывести 8, $st1 и $st3 - один и тот же объект