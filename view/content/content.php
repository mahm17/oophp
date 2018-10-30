<?php
namespace Anax\View;

?>

<!DOCTYPE html>
<h1>Alla bloggposter</h1>
<a href="content/admin">Admin sida</a>
<a href="content/posts">Visa alla poster</a>
<a href="content/pages">Visa alla pages</a>

<?php
if (!$resultset) {
    return;
}
?>
<article>

<?php foreach ($resultset as $row) : ?>
<section>
    <header>
        <h1><a href="content/<?= $row->title ?>"><?= $row->title ?></a></h1>
        <p><i>Published: <time datetime="<?= esc($row->published_iso8601) ?>" pubdate><?= esc($row->published) ?></time></i></p>
    </header>
    <?= $row->data ?>
</section>
<?php endforeach; ?>

</article>
