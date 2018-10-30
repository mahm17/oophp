<?php
namespace Anax\View;

?>

<!DOCTYPE html>
<h1>Alla filmer</h1>
<a href="movies/search-title">Sök efter film (titel)</a>
<a href="movies/search-year">Sök efter film (årtal)</a>
<a href="movies/select">CRUD för filmer</a>
<?php
if (!$resultset) {
    return;
}
?>

<table>
    <tr class="first">
        <th>Rad</th>
        <th>Id</th>
        <th>Bild</th>
        <th>Titel</th>
        <th>År</th>
    </tr>
<?php $id = -1; foreach ($resultset as $row) :
    $id++; ?>
    <tr>
        <td><?= $id ?></td>
        <td><?= $row->id ?></td>
        <td><img class="thumb" src="<?= substr($row->image, 3) ?>" style="width: 7em; height: 7em;"></td>
        <td><?= $row->title ?></td>
        <td><?= $row->year ?></td>
    </tr>
<?php endforeach; ?>
</table>
