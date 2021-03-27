<?php

class charmeleon extends pokemon {
    public $attacks = array();
    
    public function __construct($name) {
        $this->name = $name;
        $this->type = 'fire';
        $this->maxHealth = 60;
        $this->currentHealth = $this->maxHealth;
        $this->weakness = 'water';
        $this->resistance = 'air';
        $attack1 = new attack('fire stick' , 50);
        $this->attacks[0] = $attack1->createAttack();
    }

    public function getName() {
        return $this->name;
    }

    public function getAttack($number) {
        return $this->attacks[$number];
    }
}