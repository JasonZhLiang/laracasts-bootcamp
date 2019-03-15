<?php
//by using composer install, will autoload all dependencies.

use Acme\User\Person;
use Acme\Business;
use Acme\Staff;

$jaffrey = new Person('Jeffery Way');
$staff = new Staff([$jaffrey]);
$laracast = new Business($staff);
$laracast->hire(new Person('Jane Doe'));
//var_dump($staff);
var_dump($laracast->getStaffMembers());