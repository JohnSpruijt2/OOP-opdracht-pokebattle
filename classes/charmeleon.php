<?php

class charmeleon extends pokemon {
    public $attacks = array();
    public $pokemonType = 'charmeleon';
    
    public function __construct($name) {
        $this->name = $name;
        $this->type = 'fire';
        $this->maxHealth = 60;
        $this->currentHealth = $this->maxHealth;
        $this->weakness = ['water', 2];
        $this->resistance = ['lightning', 10];
        $attack1 = new attack('headbut' , 10);
        $this->attacks[0] = $attack1->createAttack();
        $attack2 = new attack('flare' , 30);
        $this->attacks[1] = $attack2->createAttack();
    }

    public function getName() {
        return $this->name;
    }

    public function getAttack($number) {
        return $this->attacks[$number];
    }

    public function getPokemonType() {
        return $this->pokemonType;
    }
}