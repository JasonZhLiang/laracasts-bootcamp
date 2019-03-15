<?php

//interface for share common, only set term, no concrete logical set here, only term
//every time when implement the interface, must specify the methods define in interface
interface Animal{
    public function communicate();
}


class Dog implements Animal{
    public function communicate(){
        return 'bark';
    }
}

class Cat implements Animal{
    public function communicate(){
        return 'meow';
    }
}


interface Logger{
    public function execute($message);
}

class LogToFile implements Logger {
    public function execute($message)
    {
        var_dump('log the message to a file: '. $message);
    }
}
class LogToDatabase implements Logger {
    public function execute($message)
    {
        var_dump('log the message to a database: '.$message);
    }
}

class UsersController{

    protected $logger;

    //the problem now is too specific, when you want to change to log into database, you have to change everywhere LogToFile
    //program to interfaces, not implementations. Interfaces are just contracts or signatures and they don't know anything about implementations
//    public function __construct(LogToFile $logger)
//    {
//        $this->logger =$logger;
//    }

    public function __construct(Logger $logger)
    {
        $this->logger =$logger;
    }

    public function show(){
        $user ='JohnDoe';

        //we want to log this information
        $this->logger->execute($user);
    }
}


//here pass instance of LogToFile, Not interface Logger, we can pass other class's instance here as well, this is polymorphism
$controller = new UsersController(new LogToFile());
$controller->show();
$controller = new UsersController(new LogToDatabase());
$controller->show();