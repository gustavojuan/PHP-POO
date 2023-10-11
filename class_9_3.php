<?php

class TeamException extends Exception
{

    public static function fromTooManyMembers()
    {
        return new static('You may not add more than 3 members.');
    }
}


class Member
{
    public $name;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


}

class Team
{

    protected $members = [];


    public function add(Member $member)
    {

        if (count($this->members) === 3) {
            throw  TeamException::fromTooManyMembers();
        }

        $this->members[] = $member;
    }

    /**
     * @return array
     */
    public function getMembers(): array
    {
        return $this->members;
    }
}


class TeamMembersController
{
    public function store()
    {

        try {
            $team = new Team(); //has a maximun of three members
            $team->add(new Member('Jane Doe'));
            $team->add(new Member('John  Doe'));
            $team->add(new Member('Frank Doe'));
            $team->add(new Member('Susan Doe'));
            var_dump($team->getMembers());
        } catch (TeamException $e) {
            var_dump($e->getMessage());
        }

    }
}


(new TeamMembersController())->store();