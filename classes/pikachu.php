<?php

class Pikachu extends Pokemon {
    
    public $pokemonType = 'pikachu';

    public function __construct($name) {
        parent::__construct($name, 60);
        $this->type = 'electric';
        $this->weakness = ['fire', 1.5];
        $this->resistance = ['fighting', 20];
        $this->attacks[0] = new Attack('electric ring' , 50);
        $this->attacks[1] = new Attack('pika punch' , 20);
    }
    
}