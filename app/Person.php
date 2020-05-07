<?php

declare (strict_types=1);


namespace App;

class Person
{   
    //properties
    private $firstname;
    private $secondname;


    //construct method
    public function __construct($first, $second)
    {
        $this->firstname = $first;
        $this->secondname = $second;
    }

    //methods

    public function fullName()
    {
        return "{$this->firstname} {$this->secondname}";
    }

    public function sayHelloTo($person) 
    {
        return "Hello {$person->fullName()}";
    }

}