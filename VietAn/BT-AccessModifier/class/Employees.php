<?php


class employees
{
    public $firstName;
    public $lastName;
    public $birthDay;
    public $address;
    public $job;

    public function __construct($firstName, $lastName, $birthDay, $address, $job)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDay = $birthDay;
        $this->address = $address;
        $this->job = $job;
    }

    public function getfirstName($firstName)
    {
        return $this->firstName;
    }
    public function setfirstName($firstName)
    {
        return $this -> firstName;
    }
    public function getlastName($lastName)
    {
        return $this -> lastName;
    }
    public function setlastName($lastName)
    {
        return $this -> lastName;
    }
//   public function getInfo()
//    {
//        return "firstName:" . $this -> firstName . "lastName:" . $this ->lastName
//            . "- Address:" . $this -> address;
//    }

}