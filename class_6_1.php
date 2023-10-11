<?php

// Encapsulation =>  Enclose within a capsule

class Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function job()
    {
        return 'Backend Developer';
    }


    public function favoriteTeam()
    {

    }

    private function thingsThatKeepUpAtNight()
    {
        return "We are all going to die and that is terrifying";
    }
}


$person = new Person('Bob');
$person->name = null;
var_dump($person);