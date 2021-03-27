<?php 

class attack {
    public $attack = array();
    public function __construct($name, $damage) 
    {
        $this->attack['name'] = $name;
        $this->attack['damage'] = $damage;
    }
    public function createAttack() 
    {
        return $this->attack;
    }
   
}