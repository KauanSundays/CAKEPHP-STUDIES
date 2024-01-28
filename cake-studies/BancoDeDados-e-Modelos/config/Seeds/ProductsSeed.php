<?php
use Cake\Database\Seeder;

class ProductsSeed extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'name' => 'Produto 1',
                'price' => 19.99,
            ],
            [
                'name' => 'Produto 2',
                'price' => 29.99,
            ],
            // Adicione mais dados conforme necessário
        ];

        $table = $this->table('products_table');
        $table->insert($data)->save();
    }
}
