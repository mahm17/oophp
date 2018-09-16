<?php
require "autoload.php";
require "config.php";

$number = $_POST["number"] ?? -1;
$tries = $_POST["tries"] ?? 6;
$guess = $_POST["guess"] ?? null;

$object = new Guess($number, $tries);

$res = null;
if (isset($_POST["doGuess"])) {
    $res = $object->makeGuess($guess);
}

if (isset($_POST["reset"])) {
    $object->random();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <h1>Gissa nummret med POST.</h1>
        <form method="POST">
            <input type="hidden" name="number" value="<?=$object->number()?>">
            <input type="hidden" name="tries" value="<?=$object->tries()?>">
            <input type="text" name="guess" value="">
            <input type="submit" name="doGuess" value="Gissa">
            <input type="submit" name="cheat" value="Fuska">
            <input type="submit" name="reset" value="Starta om">
        </form>

        <p>Antal gissningar kvar: <?=$object->tries()?></p>
        <?php if (isset($res)) : ?>
        <p><?= $res ?>
        <?php endif; ?>

        <?php if (isset($_POST["cheat"])) : ?>
        <p>Fuska: <?= $object->number() ?> </p>
        <?php endif; ?>
    </head>
</html>
