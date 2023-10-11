<?php
// Avoids primitive obession - and readability
// Helps with consistency
// Inmutable

class Age
{
    private $age;

    /**
     * @param $age
     */
    public function __construct($age)
    {

        if ($age < 0 || $age > 120) {
            throw new InvalidArgumentException('That make non sense');
        }


        $this->age = $age;
    }


    //mutable because we can change internal state
    //inmutable

    public function increment()
    {
        //mutable
        // $this->age +=1;

        //inmutable
        return new self($this->age + 1);
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }


}

function register(string $name, Age $age)
{
}


$age = 35;
$age = new Age($age);
$age->increment();

var_dump($age->getAge());;

register('Gus', $age);

