<?php

class CoffeeMaker
{
    public function brew()
    {
        var_dump('Brewing a coffee');

    }


}

class SpecialityCoffeeMaker extends CoffeeMaker
{
    public function brewLatter()
    {
        var_dump('Brewing Latte');

    }
}


(new CoffeeMaker())->brew();
(new SpecialityCoffeeMaker())->brew();
(new SpecialityCoffeeMaker())->brewLatter();