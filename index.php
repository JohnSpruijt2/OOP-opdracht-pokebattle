<?php
require_once 'init.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pokemon = new $_POST['pokemon']($_POST['name']);

    echo $pokemon->getName().' use '.$pokemon->getAttack(0)['name'].'!';
}

if ($_GET['page'] == null) {
    $page = 'choosePokemon';
} else {
    $page = $_GET['page'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="styles/style.css">
    <title>Pokebattle</title>
</head>
<body>
<?php require_once 'pages/'.$page.'.php'; ?>





<?php if ($_SERVER['REQUEST_METHOD'] != 'POST') { ?>
<form action="" method="post">
    <label for="name">name :</label> <br>
    <input id="name" name="name" type="text"> <br>
    <input type="radio" id="pikachu" name="pokemon" value="pikachu" checked> <label for="pikachu">Pikachu</label>
    <input type="radio" id="charmeleon" name="pokemon" value="charmeleon"> <label for="charmeleon">charmeleon</label> <br>
    <button type="submit">submit</button>
</form>
<?php } ?>


</body>
</html>


