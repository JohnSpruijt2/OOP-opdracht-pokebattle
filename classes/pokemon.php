<?php 

class Pokemon {
    public static $counter = 0; //counter exists outside of specific object to count all pokemons

    public $name;
    public $type;
    public $maxHealth;
    public $currentHealth;
    public $weakness;
    public $resistance;
    public $attacks = array();

    public function __construct($name, $health) {
        $this->name = $name;
        $this->maxHealth = $health;
        $this->currentHealth = $health;
    }

    public static function getPopulation()
    {   
        return self::$counter;
    }
    
    public function takeDamage($amount, $type) {
        if ($type == $this->weakness[0]) {
            $amount = $amount * $this->weakness[1]; 
        } elseif ($type == $this->resistance[0]) {
            $amount = $amount / $this->resistance[1]; 
        }
        $this->currentHealth = $this->currentHealth -$amount;
    }

    public function getCurrentHealth() {
        return $this->currentHealth;
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