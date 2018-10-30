<?php
namespace Anax\View;

?>

<!DOCTYPE html>
<h1>Alla poster</h1>

<?php
if (!$resultset) {
    return;
}
?>

<article>

<?php foreach ($resultset as $row) : ?>
<section>
    <header>
        <h1><a href="<?= $row->title ?>"><?= $row->title ?></a></h1>
        <p><i>Published: <time datetime="<?= esc($row->published_iso8601) ?>" pubdate><?= esc($row->published) ?></time></i></p>
    </header>
    <?= esc($row->data) ?>
</section>
<?php endforeach; ?>
<p>
    <a href="<?= url("content") ?>">Tillbaka</a>
</p>

</article>
