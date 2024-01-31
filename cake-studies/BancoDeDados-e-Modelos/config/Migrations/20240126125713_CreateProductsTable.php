<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateProductsTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('products');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('price', 'decimal', [
            'default' => null,
            'null' => false,
            'scale' => 2,
        ]);
        $table->create();
    }
}
