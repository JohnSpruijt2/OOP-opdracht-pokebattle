<div class="backgroundDiv">
    <div id='hereToCenterDivs'>
        <div class="leftPokemon">
            <img src="img/<?= $_SESSION['leftPokemon']->getPokemonType(); ?>.png" class="pokemonImg" alt="">
            <a>health: <?= $_SESSION['leftPokemon']->getCurrentHealth(); ?></a>
        </div>
        <div class="rightPokemon">
            <img src="img/<?= $_SESSION['rightPokemon']->getPokemonType(); ?>.png" class="pokemonImg flipped" alt="">
            <a>health: <?= $_SESSION['rightPokemon']->getCurrentHealth(); ?></a>
        </div>
    </div>
    <a class="bigBtn minecraft">next</a>
</div>