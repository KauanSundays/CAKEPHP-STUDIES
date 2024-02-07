<!-- Formulário para adicionar um novo produto -->
<?= $this->Form->create($product) ?>
<fieldset>
    <legend><?= __('Adicionar Produto') ?></legend>
    <?= $this->Form->control('name', ['label' => 'Nome']) ?>
    <?= $this->Form->control('description', ['label' => 'Descrição']) ?>
    <?= $this->Form->control('price', ['label' => 'Preço']) ?>
</fieldset>
<?= $this->Form->button(__('Salvar')) ?>
<?= $this->Form->end() ?>
