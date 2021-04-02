<?php

$_SESSION['leftPokemon'] = new pikachu('pika');
$_SESSION['rightPokemon'] = new charmeleon('gary');

$_SESSION['population'] = pokemon::getPopulation();
header('Location: ?page=battle');

?>