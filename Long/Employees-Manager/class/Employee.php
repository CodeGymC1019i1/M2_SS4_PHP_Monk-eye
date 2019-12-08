<?php


namespace Manage;


class Employee
{
    public $firstName;
    public $lastName;
    public $birthday;
    public $address;
    public $position;

    public function __construct($firstName,$lastName,$birthday,$address,$position)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthday = $birthday;
        $this->address = $address;
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    public function getInfo(){
        return "Name: ".$this->lastName.$this->firstName." - Address: ".$this->address;
    }
}