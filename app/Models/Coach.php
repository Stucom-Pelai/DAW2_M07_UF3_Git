<?php

namespace App\Models;


// **
//  * Represents play field.
//  */
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
     * Coach team
     *
     * @var string
     */
    private $team;


    /**
     * Construct a Coach with a name and the status.
     *
     * @param string    $name     Coach name
     * @param bool $active  Coach Status
     */
    public function __construct(string $name, bool $active, string $team)
    {
        $this->name = $name;
        $this->active = $active;
        $this->team = $team;
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
     * Get Coach team
     *
     * @return  string
     */
    public function getTeam()
    {
        return $this->team;
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
     * Set Coach team in string
     *
     * @param  string  $team is string
     *
     * @return  self
     */
    public function setTeam(string $team)
    {
        $this->team = $team;

        return $this;
    }

    function presentation()
    {
        echo "Hi my name is {$this->name} and my team is {$this->team}";
    }

    function train()
    {
        echo "{$this->name} says: Come on Team lets go train!!!!!";
    }
}
