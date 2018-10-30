<?php
namespace Anax\View;

?>

<!DOCTYPE html>
<?php foreach ($resultset as $row) : ?>
<?php
if (!$resultset) {
    return;
}
?>

<article>
    <header>
        <h1><?= esc($row->title) ?></h1>
        <p><i>Latest update: <time datetime="<?= esc($row->modified_iso8601) ?>" pubdate><?= esc($row->modified) ?></time></i></p>
    </header>
    <?= $filtered ?>
</article>

<?php endforeach; ?>
