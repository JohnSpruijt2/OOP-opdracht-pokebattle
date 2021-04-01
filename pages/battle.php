<div class="backgroundDiv">
    <div id='hereToCenterDivs'>
        <div class="leftPokemon">
            <img src="img/<?= $_SESSION['playerPokemon']->getPokemonType(); ?>.png" class="pokemonImg" alt="">
            <a>health: <?= $_SESSION['playerPokemon']->getCurrentHealth(); ?></a>
        </div>
        <div class="rightPokemon">
            <img src="img/<?= $_SESSION['enemyPokemon']->getPokemonType(); ?>.png" class="pokemonImg flipped" alt="">
            <a>health: <?= $_SESSION['enemyPokemon']->getCurrentHealth(); ?></a>
        </div>
    </div>
</div>