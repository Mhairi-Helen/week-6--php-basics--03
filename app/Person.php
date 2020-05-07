<?php

declare (strict_types=1);


namespace App;

class Person
{   
    //properties
    private $firstname;
    private $secondname;


    //construct method
    public function __construct(string $first, string $second)
    {
        $this->firstname = $first;
        $this->secondname = $second;
    }

    //methods

    public function fullName() : string
    {
        return "{$this->firstname} {$this->secondname}";
    }

    public function sayHelloTo(Person $person) : string
    {
        return "Hello {$person->fullName()}";
    } //it's $person->fullname() $this->fullname() because we want them to talk to each other

}