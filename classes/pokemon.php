<?php 

class pokemon {
    public $name;
    public $type;
    public $maxHealth;
    public $currentHealth;
    public $weakness;
    public $resistance;

    public function takeDamage($amount, $type) {
        $this->currentHealth - $amount;
    }

    public function getCurrentHealth() {
        return $this->currentHealth;
    }
}