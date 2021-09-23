<?php

$_SESSION['leftPokemon'] = new pikachu('pika');
$_SESSION['rightPokemon'] = new charmeleon('gary');

$_SESSION['population'] = pokemon::getPopulation(); //couldn't figure out how to keep the static counter across multiple pages so in the session it goes
header('Location: ?page=battle');

?>