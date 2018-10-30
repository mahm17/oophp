<?php
namespace Anax\View;

?>

<!DOCTYPE html>
<h1>Ta bort bloggpost</h1>

<?php
if (!$resultset) {
    return;
}
?>
<form method="POST">
    <fieldset>
        <legend>Ta bort</legend>
        <?php foreach ($resultset as $row) : ?>
        <p>
            <label>Titel:<br>
            <input type="text" name="contentTitle" value="<?= esc($row->title) ?>" readonly/>
        </p>

        <p>
            <label>Path:<br>
            <input type="text" name="contentPath" value="<?= esc($row->path) ?>"/ readonly>
        </p>

        <p>
            <label>Slug:<br>
            <input type="text" name="contentSlug" value="<?= esc($row->slug) ?>"/ readonly>
        </p>

        <p>
            <label>Text:<br>
            <textarea name="contentData" readonly><?= esc($row->data) ?></textarea>
        </p>

        <p>
            <label>Type:<br>
            <input type="text" name="contentType" value="<?= esc($row->type) ?>" readonly/>
        </p>

        <p>
            <label>Filter:<br>
            <input type="text" name="contentFilter" value="<?= esc($row->filter) ?>" readonly/>
        </p>

        <p>
            <label>Publish:<br>
            <input type="datetime" name="contentPublish" value="<?= esc($row->published) ?>" readonly/>
        </p>

        <input type="submit" name="delete" value="Ta bort">
        <p>
            <a href="<?= url("content/admin") ?>">Show all</a>
        </p>
    </fieldset>
</form>

<?php endforeach; ?>
