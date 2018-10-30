<?php
namespace Anax\View;

?>

<!DOCTYPE html>
<h1>Lägg till bloggpost</h1>

<form method="POST">
    <fieldset>
        <legend>Lägg till</legend>
        <p>
            <label>Titel:<br>
            <input type="text" name="contentTitle" value=""/>
        </p>

        <input type="submit" name="add" value="Lägg till">
        <p>
            <a href="<?= url("content/admin") ?>">Show all</a>
        </p>
    </fieldset>
</form>
