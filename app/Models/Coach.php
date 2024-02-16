<?php

namespace App\Models;


/**
 * Represents play field.
 */
class Coach extends Person
{
    /**
     * Coach name
     *
     * @var string
     */
    private $name;

    /**
     * Coach Status
     *

     * @var boolean
     */
    private $active;


    /**
     * Coach Motivation
     *

     * @var boolean
     */
    private $motivation;


    /**
     * Construct a Coach with a name and the status.
     *
     * @param string    $name     Coach name
     * @param bool $active  Coach Status
     * @param bool $motivation  Coach Motivation

     */
    public function __construct(string $name, bool $active, bool $motivation)
    {
        $this->name = $name;
        $this->active = $active;
        $this->motivation = $motivation;
    }
    /**
     * Get Coach name
     *
     * @return  string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Get Coach Status
     *
     * @return  bool
     */
    public function getActive()
    {
        return $this->active;
    }
    /**
     * Get Coach Motivation
     *
     * @return  bool
     */
    public function getMotivate()
    {
        return $this->motivation;
    }

    /**
     * Set Coach name in string
     *
     * @param  string  $name is string
     *
     * @return  self
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     * Set status in bool
     *
     * @param  bool  $active is true or false
     *
     * @return  self
     */
    public function setActive(bool $active)
    {
        $this->active = $active;

        return $this;
    }
    /**
     * Set Motivation in bool
     *
     * @param  bool  $Motivation is true or false
     *
     * @return  self
     */
    public function setMotivate(bool $motivation)
    {
        $this->motivation = $motivation;

        return $this;
    }
    function train()
    {
        echo "{$this->name} says: Come on Team lets go train!!!!!";
    }
}
