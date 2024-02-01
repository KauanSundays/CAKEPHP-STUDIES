<h1>Products index</h1>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= h($product->name) ?></td>
                <td><?= h($product->price) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
