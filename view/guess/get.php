<?php

namespace Anax\view;

?>

<!DOCTYPE html>
<html>
    <head>
        <h1>Gissa nummret med GET.</h1>
        <form method="GET">
            <input type="hidden" name="number" value="<?=$object->number()?>">
            <input type="hidden" name="tries" value="<?=$object->tries()?>">
            <input type="text" name="guess" value="">
            <input type="submit" name="doGuess" value="Gissa">
            <input type="submit" name="cheat" value="Fuska">
        </form>
        <p>
            <a href="?reset">Starta om</a>
        </p>
        <p>Antal gissningar kvar: <?=$object->tries()?></p>
        <?php if (isset($res)) : ?>
        <p><?= $res ?>
        <?php endif; ?>

        <?php if (isset($_GET["cheat"])) : ?>
        <p>Fuska: <?= $object->number() ?> </p>
        <?php endif; ?>
    </head>
</html>
