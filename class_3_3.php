<?php

class  AchievementType
{

    public function name()
    {
        //Achievement type
    }

    public function difficulty()
    {
        return  'intermediate';
    }

    public function icon()
    {

    }
}

class FirstThousandsPoints extends AchievementType
{


    public function qualifier($user)
    {
        
    }


    //Override
    public function name()
    {
        return 'Welcome Aboard!';
    }
    
}