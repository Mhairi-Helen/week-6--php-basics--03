<?php

declare (strict_types=1);


namespace App\Library;

class Book
{

    //properties

    private $title;
    private $pages;
    private $pageCount = 0;

    //constructor method

    public function __construct(string $title, int $pages)
    {
        $this->title = $title;
        $this->pages = $pages;
    }

    //methods

    //to add on to the current page count  up to the number of pages of the book

    public function read($pageRead) 
    {
        if ( $pageRead + $this->pageCount > $this->pages)
        {
            return $this->pages;
        } else
        {
            $this->pageCount += $pageRead;
            return $this;
        }
        
        // function clamp($this->pages, $this->pageCount){
        //     if($this->pageCount > $this->pages)
        //     {
        //         return $this->pages;
        //     } else{
        //         $this->pageCount += $pageRead;
        //     return $this;
        //     }
        // }
    }


    public function currentPage ()
    {
       return $this->pageCount + 1;

    }


}