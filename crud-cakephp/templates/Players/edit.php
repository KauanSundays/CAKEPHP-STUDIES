<!-- templates/Players/edit.php -->

<h1>Edit Player</h1>

<?= $this->Form->create($player) ?>
    <?= $this->Form->hidden('_csrfToken', ['value' => $this->request->getAttribute('csrfToken')]) ?>
    
    <label for="name">Name:</label>
    <?= $this->Form->text('name') ?>
    
    <label for="position">Position:</label>
    <?= $this->Form->select('position', $positions, [
        'empty' => true, 
        'id' => 'position',
        'default' => $player->position
    ]) ?>


    <input type="submit" value="Update">
<?= $this->Form->end() ?>
