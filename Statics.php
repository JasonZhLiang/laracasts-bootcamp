<?php

class Math{
    public static function adds()
    {
        return array_sum(func_get_args());
    }
    //this is a new way to pass any number of parameters to the function, flexible
    public function add(...$nums)
    {
        return array_sum($nums);
    }

}

$math = new Math;

var_dump($math->add());//you can pass 0 - many number to this function.

var_dump($math->add(1,2,3,4));//you can pass 0 - many number to this function.


echo Math::adds(4,5,6);//this is call static method (without instantiate a class.


class Person{
    public static $age = 1;

    public function haveBirthday()
    {
        static::$age++;
    }
}

$joe = new Person;
$joe->haveBirthday();
$joe->haveBirthday();

echo ('age now is : '.Person::$age);

$jone = new Person;
$jone->haveBirthday();

echo ('age now change : '.Person::$age);



class BankAccount{
    const TAX = 0.90;
}

//BankAccount::TAX = 10; //not assignable error will occur.

echo BankAccount::TAX; //constant can be access without instantiate a class as well, like static but cannot be change