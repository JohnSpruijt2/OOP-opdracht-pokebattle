<?php 
    if (is_numeric($_POST['step']) == null && $_POST['step'] != null) 
    {
        header('Location: ?page=start');
    }
    
    if ($_POST['step'] == 1) {
        $attacker = 'leftPokemon';
        $attack = 0;
    } elseif ($_POST['step'] == 2) {
        $attacker = 'rightPokemon';
        $attack = 1;
    }

    require_once 'php/battleLogic.php';

    if ($_POST['page'] == 'population') {
        $battleMessage = 'population : '.$_SESSION['population'];
    }
?>

<div class="backgroundDiv">
    <div id='hereToCenterDivs'>
        <div class="leftPokemon">
            <img src="img/<?= $_SESSION['leftPokemon']->getPokemonType(); ?>.png" class="pokemonImg" alt=""><br>
            <a class='minecraft'><?= $_SESSION['leftPokemon']->getName(); ?> <br>
            health: <?= $_SESSION['leftPokemon']->getCurrentHealth(); ?></a>
            
        </div>
        <div class="rightPokemon">
            <img src="img/<?= $_SESSION['rightPokemon']->getPokemonType(); ?>.png" class="pokemonImg flipped" alt=""> <br>
            <a class='minecraft'><?= $_SESSION['rightPokemon']->getName(); ?> <br>
            health: <?= $_SESSION['rightPokemon']->getCurrentHealth(); ?></a>
        </div>
    </div>
    <div class="battleMsg minecraft">
        <?= $battleMessage; ?>
    </div>
   <?php if ($_POST['page'] == 'population') { ?>

    <form class='fakeForm' method="post">
        <input type="hidden" name="step" value="3">
        <button type="submit" class="bigBtn minecraft">back</button>
    </form>

    <?php } elseif ($_POST['step'] < 2) { ?>
    <form class='fakeForm' method="post">
        <input type="hidden" name="step" value="<?php if ($_POST['step'] == null) {echo 1;} else {echo $_POST['step']+1;} ?>">
        <button type="submit" class="bigBtn minecraft">next</button>
    </form>
    
    <?php } else { ?>
    <form class='fakeForm' method="post">
        <input type="hidden" name="page" value="population">
        <button type="submit" class="bigBtn minecraft">population</button>
    </form>
    <?php } ?>
</div>