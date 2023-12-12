<h1>Players List</h1>

<?= $this->Form->create(null, ['url' => ['controller' => 'Players', 'action' => 'store'], 'id' => 'playerForm']) ?>
    <?= $this->Form->hidden('_csrfToken', ['value' => $this->request->getAttribute('csrfToken')]) ?>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <label for="position">Position:</label>
    <?= $this->Form->select('position', $positions, ['empty' => true, 'id' => 'position']) ?>

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
            <td><?= $player->position->position_name ?></td>
            <td>
                <button type="button" onclick="editAction(<?= $player->id ?>, '<?= $player->name ?>', <?= $player->position->id ?>)">
                    Edit
                </button>
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

<script>
    function editAction(id, player_name, player_position_id) {
        console.log(id, player_name, player_position_id);

        // Ajuste a URL de ação do formulário para a URL de edição do jogador específico
        document.getElementById('playerForm').action = '/players/edit/' + id;

        // Preencha os campos
        document.getElementById('name').value = player_name;
        document.getElementById('position').value = player_position_id;
    }
</script>
