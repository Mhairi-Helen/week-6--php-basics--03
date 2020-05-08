<?php

declare (strict_types=1);


namespace App\Library;

class Library
{
    //properties
    private $shelves;

    
    //constructor method

    public function __construct()
    {
        $this->shelves = collect();
        
    }

    public function addShelf(Shelf $shelf) : Library
    {
        $this->shelves->push($shelf);
        return $this;
    }
    
    public function titles()
    {
        // return $this->shelves->flatMap(function ($shelf) 
        // {
        //     return $shelf->titles();
        // })->all();


        return $this->shelves->reduce(function ($acc, $shelf)
        {
            return $acc->merge($shelf->titles());
        }, collect()); 
        //same in JS as an empty array or a 0

    }

   


}