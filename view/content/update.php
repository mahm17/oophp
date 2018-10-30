<?php
namespace Anax\View;

?>

<!DOCTYPE html>
<h1>Uppdatera bloggpost</h1>

<?php
if (!$resultset) {
    return;
}
?>
<form method="POST">
    <fieldset>
        <legend>Edit</legend>
        <?php foreach ($resultset as $row) : ?>
        <p>
            <label>Titel:<br>
            <input type="text" name="contentTitle" value="<?= esc($row->title) ?>"/>
        </p>

        <p>
            <label>Path:<br>
            <input type="text" name="contentPath" value="<?= esc($row->path) ?>"/>
        </p>

        <p>
            <label>Slug:<br>
            <input type="text" name="contentSlug" value="<?= esc($row->slug) ?>"/>
        </p>

        <p>
            <label>Text:<br>
            <textarea name="contentData"><?= esc($row->data) ?></textarea>
        </p>

        <p>
            <label>Type:<br>
            <input type="text" name="contentType" value="<?= esc($row->type) ?>"/>
        </p>

        <p>
            <label>Filter:<br>
            <input type="text" name="contentFilter" value="<?= esc($row->filter) ?>"/>
        </p>

        <p>
            <label>Publish:<br>
            <input type="datetime" name="contentPublish" value="<?= esc($row->published) ?>"/>
        </p>

        <input type="submit" name="doSave" value="Spara">
        <p>
            <a href="<?= url("content/admin") ?>">Show all</a>
        </p>
    </fieldset>
</form>

<?php endforeach; ?>
