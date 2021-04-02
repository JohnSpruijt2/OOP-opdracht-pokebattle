<?php 

if ($attacker == 'leftPokemon') 
{
    $defender = 'rightPokemon';
} 
elseif ($attacker == 'rightPokemon') 
{
    $defender = 'leftPokemon';
} 

if ($defender != null) {
    $oldHealth = $_SESSION[$defender]->getCurrentHealth();

    $_SESSION[$defender]->takeDamage($_SESSION[$attacker]->getAttack($attack)['damage'], $_SESSION[$attacker]->getPokemonType());

    $battleMessage = $_SESSION[$attacker]->getName().' uses '.$_SESSION[$attacker]->getAttack($attack)['name'].'! <br>'.$_SESSION[$defender]->getName()."'s health was reduced from ".$oldHealth.' to '.$_SESSION[$defender]->getCurrentHealth();

    if ($_SESSION[$defender]->getCurrentHealth() <= 0) {
        $_SESSION[$defender]->$currentHealth = 0;
        $_SESSION['population']--;
    }

}