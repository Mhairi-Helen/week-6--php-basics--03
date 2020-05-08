<?php

declare(strict_types=1);

namespace App\Library;



class Shelf
{
    //properties
    private $books;
    
    //constructor method
    public function __construct()
    {
        $this->books = collect();
        
    }

    //methods
    public function addBook(Book $book) : Shelf //since Book is in the same namespace this is found by PHP without using the USE function to tell it where the class is
    {
        $this->books->push($book);
        return $this;
    }

    public function titles()
    {
        return $this->books->map(function ($book) 
        {
            return $book->title();
        })->all();


    }
}