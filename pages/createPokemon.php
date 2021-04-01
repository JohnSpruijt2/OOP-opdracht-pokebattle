<?php

$_SESSION['playerPokemon'] = new $_POST['pokemonType']($_POST['pokemonName']);

if (mt_rand(1,2) == 1) {
    $_SESSION['enemyPokemon'] = new pikachu("gary's pikachu");
} else {
    $_SESSION['enemyPokemon'] = new charmeleon("gary's charmeleon");
}

header('Location: ?page=battle');

?>