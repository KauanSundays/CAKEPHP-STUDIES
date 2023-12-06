<h1>Players List</h1>

<?= $this->Form->create(null, ['url' => ['controller' => 'Players', 'action' => 'store']]) ?>
    <?= $this->Form->hidden('_csrfToken', ['value' => $this->request->getAttribute('csrfToken')]) ?>
    <label for="name">Name:</label>
    <input type="text" required id="name" name="name">
    <label for="position">Position:</label>
    <?= $this->Form->select('position', $positions, 
        ['empty' => true, 'id' => 'position']) 
    ?>
    <input type="submit" value="Submit">
<?= $this->Form->end() ?>

<table>
    <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($players as $player):?>
        <tr>
            <td><?= $player->name ?></td>
            <td><?= $player->position ?></td>
            <td>
                <?= $this->Html->link("Edit", ['controller'=> 'Players', 'action'=> 'edit', $player->id]) ?>
            </td>
            <td>
                <?= $this->Form->postLink(
                    'Delete',
                    ['controller' => 'Players', 'action' => 'delete', $player->id],
                    ['confirm' => 'Are you sure you want to delete?']
                ) ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
