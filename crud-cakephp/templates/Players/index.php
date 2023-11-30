<h1>Players List</h1>

<form action="" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <label for="position">Position:</label>
    <input type="text" id="position" name="position">
    <input type="submit" value="Submit">
</form>

<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Position</th>
    </tr>

    <?php foreach ($players as $player):?>
        <tr>
            <td><?= $player->id ?></td>
            <td><?= $player->name ?></td>
            <td><?= $player->position ?></td>
        </tr>
    <?php endforeach; ?>
</table>