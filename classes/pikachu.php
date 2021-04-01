<?php

class pikachu extends pokemon {
    public $attacks = array();
    public $pokemonType = 'pikachu';

    public function __construct($name) {
        $this->name = $name;
        $this->type = 'electric';
        $this->maxHealth = 60;
        $this->currentHealth = $this->maxHealth;
        $this->weakness = 'fire';
        $this->resistance = 'air';
        $attack1 = new attack('electric ring' , 50);
        $this->attacks[0] = $attack1->createAttack();
        $attack2 = new attack('pika punch' , 20);
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