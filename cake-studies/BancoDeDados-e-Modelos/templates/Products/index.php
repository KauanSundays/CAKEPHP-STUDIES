<?php

use Symfony\Contracts\Service\Attribute\Required;
?>
<div>
<?= $this->Form->create(null, ['url' => ['controller' => 'Products', 'action' => 'add']]) ?>
    <div>
        <?= $this->Form->control('name', ['type' => 'text', 'placeholder' => 'Type the name of the product']) ?>
    </div>
    <div>
        <?= $this->Form->control('price', ['type' => 'number', 'placeholder' => 'Select the price of the product']) ?>
    </div>
    <div>
        <?= $this->Form->submit('Submit') ?>
    </div>
<?= $this->Form->end() ?>

</div>