<?php

namespace Acme;

use Acme\User\Person;

class Business
{
    protected $staff;
    public function __construct(Staff $staff)
    {
        $this->staff=$staff;
    }
    public function hire(Person $person)//alternate way of use/import class person, you add \before Person, means not look for the Person in Acme,
    {
        //add $person to the staff collection
        $this->staff->add($person);
    }

    public function getStaffMembers()
    {
        return $this->staff->members();
    }
}
