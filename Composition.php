<?php
/**
 * Created by PhpStorm.
 * User: jliang
 * Date: 4/4/2018
 * Time: 1:35 PM
 */

class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

}

class Business{
    protected $staff;
    public function __construct(Staff $staff)
    {
        $this->staff=$staff;
    }
    public function hire(Person $person)
    {
        //add $person to the staff collection
        $this->staff->add($person);
    }

    public function getStaffMembers()
    {
        return $this->staff->members();
    }
}

//here we can see the object - business has an dependency which is staff(this case fair to see the business depends upon staff in order to run). how many dependency does this object have?

class Staff{
    protected  $members = [];

    public function __construct($members = [])
    {
        $this->members = $members;
    }

    public function add(Person $person)
    {
        $this->members[]=$person;
    }

    public function members()
    {
        return $this->members;
    }
}


//by call the methods, see how classes communicate with each other.
$jaffrey = new Person('Jeffery Way');
$staff = new Staff([$jaffrey]);
$laracast = new Business($staff);
$laracast->hire(new Person('Jane Doe'));
//var_dump($staff);
var_dump($laracast->getStaffMembers());