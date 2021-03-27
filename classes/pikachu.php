<?php

class pikachu extends pokemon {
    public $attacks = array();

    public function __construct($name) {
        $this->name = $name;
        $this->type = 'electric';
        $this->maxHealth = 60;
        $this->weakness = 'earth';
        $this->resistance = 'air';
        $this->attacks[1] = 'electric bolt!';
    }

    public function getName() {
        return $this->name;
    }
}