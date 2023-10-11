<?php


// Not all Custom types
function register(FirstName $first, LastName $last, Age $age, EmailAddress $email, Password $password)
{

}


class Coordinates {
    public $x;
    public $y;

    /**
     * @param $x
     * @param $y
     */
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

}


//coordinates
function distance(Coordinates $begin, Coordinates $end)
{

}

class Money
{

}

class DateSpan
{
    private $begin;
    private $end;

}

function scheduleVacation($arrive, $depart) {

}