<?php

declare(strict_types=1);

namespace App\Library;



class Shelf
{
    //properties
    private $books;
    //link up the book class




    
    //constructor method

    public function __construct()
    {
        
    }

    public function addBook(Book $book) : Shelf
    {
        $this->books->push($book);
        return $this;


    }

    public function titles()
    {


    }
}