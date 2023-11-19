<!-- src/Template/User/index.ctp -->
<h1>Lista de Usuários</h1>

<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Ações</th> <!-- Nova coluna para o botão de editar -->
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= h($user->firstName) ?></td>
            <td><?= h($user->lastName) ?></td>
            <td><?= h($user->email) ?></td>
            <td>
                <?= $this->Html->link(
                    'Editar',
                    ['action' => 'edit', $user->id],
                    ['class' => 'button']
                ) ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
