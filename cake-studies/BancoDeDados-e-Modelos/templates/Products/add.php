<h1>Add Product</h1>

<?= $this->Form->create($product) ?>
    <div>
        <?= $this->Form->control('name', [
            'label' => 'Name',
            'placeholder' => 'Type the name of the product',
            'required' => true,
        ]) ?>
    </div>
    <div>
        <?= $this->Form->control('price', ['label' => 'Price', 'placeholder' => 'Select the price of the product']) ?>
    </div>
    <div>
        <?= $this->Form->submit('Submit') ?>
    </div>
<?= $this->Form->end() ?>

<?= $this->Html->link('Go to Index', ['controller' => 'Products', 'action' => 'index']) ?>