<?php

namespace Mahm\Guess;

require __DIR__ . "/../../vendor/autoload.php";
require __DIR__ . "/config.php";

$number = $_POST["number"] ?? -1;
$tries = $_POST["tries"] ?? 6;
$guess = $_POST["guess"] ?? null;

session_name("guess");
session_start();

if (!isset($_SESSION["game"])) {
    $_SESSION["game"] = new Guess($number, $tries);
}

$object = $_SESSION["game"];

$res = null;
if (isset($_POST["doGuess"])) {
    $res = $object->makeGuess($guess);
}

if (isset($_POST["reset"])) {
    $object->random();
    header("Location: index_session.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <h1>Gissa nummret med SESSION.</h1>
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
