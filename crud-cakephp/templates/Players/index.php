<h1>Players List</h1>

<?= $this->Form->create(null, ['url' => '/']) ?>
    <?= $this->Form->hidden('_csrfToken', ['value' => $this->request->getAttribute('csrfToken')]) ?>
    <label for="name">Name:</label>
    <input type="text" required id="name" name="name">
    <label for="position">Position:</label>
    <input type="text" required id="position" name="position">
    <input type="submit" value="Submit">
</form>

<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Position</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($players as $player):?>
        <tr>
            <td><?= $player->id ?></td>
            <td><?= $player->name ?></td>
            <td><?= $player->position ?></td>
            <td>
                <?= $this->Html->link("Edit", 
                    ["controller"=> "Players",
                    "action"=> "edit",$player->id
                ]) ?>
            </td>
            <td>
                <?= $this->Html->link("Delete", 
                ["controller" => "Players",
                "action" => "delete", $player->id
            ]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>