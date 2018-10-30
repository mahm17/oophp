<?php
namespace Anax\View;

?>

<!DOCTYPE html>
<h1>Alla bloggposter</h1>

<?php
if (!$resultset) {
    return;
}
?>
<a href="add">Lägg till nytt inlägg</a>
<fieldset>
    <legend>Alla poster</legend>
    <table>
        <tr class="first">
            <th>Rad</th>
            <th>Id</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Type</th>
            <th>Published</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Deleted</th>
            <th>Actions</th>
        </tr>
    <?php $id = -1; foreach ($resultset as $row) :
        $id++;
    ?>
        <tr>
            <td><?= $id ?></td>
            <td><?= $row->id ?></td>
            <td><?= $row->title ?></td>
            <td><?= $row->slug ?></td>
            <td><?= $row->type ?></td>
            <td><?= $row->published ?></td>
            <td><?= $row->created ?></td>
            <td><?= $row->updated ?></td>
            <td><?= $row->deleted ?></td>
            <td><a href="update/<?=$row->id?>">Uppdatera | </a><a href="delete/<?=$row->id?>">Ta bort</a></td>
        </tr>
    <?php endforeach; ?>
    </table>
    <p>
        <a href="<?= url("content") ?>">Tillbaka</a>
    </p>
</fieldset>
