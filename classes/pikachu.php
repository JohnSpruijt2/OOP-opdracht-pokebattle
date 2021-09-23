<?php

class pikachu extends pokemon {
    public $attacks = array();
    public $pokemonType = 'pikachu';

    public function __construct($name) {
        $this::$counter++;  //increases population counter

        $this->name = $name;
        $this->type = 'electric';
        $this->maxHealth = 60;
        $this->currentHealth = $this->maxHealth;
        $this->weakness = ['fire', 1.5];
        $this->resistance = ['fighting', 20];
        $attack1 = new attack('electric ring' , 50);
        $this->attacks[0] = $attack1->createAttack();
        $attack2 = new attack('pika punch' , 20);
        $this->attacks[1] = $attack2->createAttack();
    }
    
}