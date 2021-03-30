<?php if ($_GET['pokemon'] == 'pikachu' || $_GET['pokemon'] == 'charmeleon') {
    
} else {header('Location: ?page=choosePokemon');} ?>

<div class="backgroundDiv">
    <h1 class="title minecraft">name your pokemon!</h1>
    <form action="?page=createPokemon" method="post" class="centerForm">
        <input type="hidden" name="pokemonType" value="<?= $_GET['pokemon']; ?>">
        <label for="pokemonName">What would you like to name your <?= $_GET['pokemon']; ?>?</label> <br>
        <input type="text" name="pokemonName" id="pokemonName" required> <br>
        <button class="formBtn minecraft" type="submit">Ok</button> <a class="formBtn minecraft" href="?page=choosePokemon">Take me back</a>
    </form>
</div>