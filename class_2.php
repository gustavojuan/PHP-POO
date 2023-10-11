<?php

class  Team
{

    protected $name;

    protected $members = [];

    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }


    //Nice readable name to instance objects
    public static function start(...$params)
    {
        return new static(... $params);
    }

    //Accesors or Gettes

    public function name()
    {
        return $this->name;
    }

    public function members()
    {
        return $this->members;
    }


    //Setters
    public function add($name)
    {
        $this->members[] = $name;

    }

    public function cancel()
    {

    }
}

class Member
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function lastViewed()
    {

    }
}

//instancinado objetos "Crear un equipo"
$acme = Team::start('acme', [
    new Member('Gus'),
    new Member('Juan')
]);

$laracasts = new Team('Laracasts');
$learners = new Team('Laerners');




var_dump($acme->members());
