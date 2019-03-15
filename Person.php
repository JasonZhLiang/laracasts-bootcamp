<?php
/**
 * Created by PhpStorm.
 * User: jliang
 * Date: 4/4/2018
 * Time: 11:06 AM
 */

class Person
{
    protected $name; //diff between protected and private is protected can be access by its child class, private is inclusive only be used within current class
    private $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        if($age < 18){
            throw new Exception('Person is not old enough.');
        }
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age*365;
    }
}

$john = new Person('john doe');
$john->setAge(19);

var_dump($john->getAge().'days');