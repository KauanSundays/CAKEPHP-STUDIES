<h1>Players List</h1>

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