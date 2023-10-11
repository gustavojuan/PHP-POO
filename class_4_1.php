<?php


//Cannot instance itself only childs classes
abstract class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();

        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function icon()
    {

        return strtolower(str_replace(' ', '-', $this->name()) . '.png');

    }


    //Requirements methods
    abstract  public function qualifier($user);


}

class FirstThousandsPoints extends AchievementType
{


    public function qualifier($user)
    {

    }
}

class FirstBestAnswer extends AchievementType
{

    public function qualifier($user)
    {

    }
}


class ReachTop50 extends AchievementType
{
    public function qualifier($user)
    {

    }

}
//$achievement = new AchievementType();
$achievement = new ReachTop50();

echo $achievement->qualifier('asdas');

echo $achievement->icon();