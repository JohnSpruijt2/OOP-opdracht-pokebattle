<?php 

class pokemon {
    public static $counter = 0;

    public $name;
    public $type;
    public $maxHealth;
    public $currentHealth;
    public $weakness;
    public $resistance;

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