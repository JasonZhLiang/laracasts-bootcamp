<?php

class Mother{
    public function getEyeCount()
    {
        return 2;
    }
}

class Child extends Mother{

}

echo(new Child)->getEyeCount();


abstract class Shape{
    protected $color;
    public function __construct($color ='red')//set default color
    {
        $this->color= $color;
    }

    public function getColor(){
        return $this->color;
    }

    abstract protected function getArea();//abstract method in parent class will let child class have to override is method.
}

class Square extends Shape{
    protected $length=4;
    public function getArea(){
        return pow($this->length,2);
    }

}

class Triangle extends Shape{
    protected $base =4;
    protected $height =7;

    public function getArea()//this is overriding, means Same Method Name, Same Parameter. Overloading means same method name, different parameter
    {
        return .5*$this->base*$this->height;
    }
}

class Circle extends Shape{
    protected $radius = 5;

    public function getArea()
    {
        return M_PI*pow($this->radius,2); //pi()*pow($this->radius, 2)
    }
}

echo (new Square)->getArea();
echo (new Triangle)->getArea();

var_dump(new Circle);
var_dump((new Circle('green'))->getColor());
var_dump((new Circle('green'))->getArea());