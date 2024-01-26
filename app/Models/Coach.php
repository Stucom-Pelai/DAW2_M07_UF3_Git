<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Person
{
    /**
     * person active
     * @var boolean
     */
    private $active;

    
    /**
     * Get active person
     * @return boolean
     */
    public function getActive(){
        return $this->active;
    }


    /**
     * set active of person
     * @param boolean $active 
     * @return self
     */
    public function setActive(boolean $active){
        $this->active = $active;
        return $this;
    }

    function train(){
        echo "people training";
    }

}
