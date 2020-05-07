<?php

declare (strict_types=1);

namespace App\Stuff\Things;

class Potato
{   
    //class properties
    private $water = 0;
    private $grow = false;
    

    //constructor method
    

    //methods

    public function water()
    {
        $this->water += 1;
        return $this;        
    }

    public function hasGrown()
    {   
        if ($this->water >= 5)
        {
            $this->grow = true;
            return $this;

        }
        
        $this->grow = false;
        return $this;


    }

}


// class Potato
// {   
//     //class properties
//     private $water = 0;
       

//     //methods

//     public function water()
//     {
//         $this->water += 1;
//         return $this;        
//     }

//     public function hasGrown() : bool
//     {   
//         return $this->water >= 5;
        

//     }

// }