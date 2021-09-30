<?php

class Charmeleon extends Pokemon {
    
    public $pokemonType = 'charmeleon';
    
    public function __construct($name) {
        $this::$counter++;  //increases population counter
        parent::__construct($name, 60);
        $this->type = 'fire';
        $this->weakness = ['water', 2];
        $this->resistance = ['lightning', 10];
        $this->attacks[0] = new Attack('headbut',10);
        $this->attacks[1] = new Attack('flare' , 30);
    }
}