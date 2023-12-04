<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Player {{}}</title>
</head>
<body>
    <div>
        <?= $this->Form->create(null, ['url' => ['controller' => 'Players', 'action' => 'edit']]) ?>
            <?= $this->Form->hidden('_csrfToken', ['value' => $this->request->getAttribute('csrfToken')]) ?>
            <label for="name">Name:</label>
            <input type="text" required id="name" name="name">
            <label for="position">Position:</label>
            <input type="text" required id="position" name="position">
            <input type="submit" value="Edit">
        <?= $this->Form->end() ?>
    </div>
</body>
</html>