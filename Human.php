<?php

include ("Animal.php");


class Human extends Animal
{
    private $name;
    private $age;
    public function _construct($name, $age);
{
    $this->name = $name;
$this->age = $age;

}
    function  say($words){
        echo $words;
    }

    public function setAge ($age): void
    {
        $this->age = $age;
    }
    public function increaseAge ()
    {
        $this->age++;
    }

}