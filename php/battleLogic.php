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
    $oldHealth = $_SESSION[$defender]->getCurrentHealth(); //saves old health to display

    $_SESSION[$defender]->takeDamage($_SESSION[$attacker]->getAttack($attack)->damage, $_SESSION[$attacker]->getPokemonType()); //does attack to defender taking weakness and resistances into account

    $battleMessage = $_SESSION[$attacker]->getName().' uses '.$_SESSION[$attacker]->getAttack($attack)->name.'! <br>'.$_SESSION[$defender]->getName()."'s health was reduced from ".$oldHealth.' to '.$_SESSION[$defender]->getCurrentHealth(); //displays what has been done in a nice little message for the user

    if ($_SESSION[$defender]->getCurrentHealth() <= 0) { //incase pokemon dies (doesn't get used but incase one ever increases the size of this project)
        $_SESSION[$defender]->$currentHealth = 0;
        $_SESSION['population']--;
    }

}