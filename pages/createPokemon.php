<?php

$_SESSION['leftPokemon'] = new pikachu('pika');
$_SESSION['rightPokemon'] = new charmeleon('gary');

header('Location: ?page=battle');

?>