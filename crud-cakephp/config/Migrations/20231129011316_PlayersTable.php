<?php
declare(strict_types=1);

use Migrations\AbstractMigration;
use Phinx\Db\Action\AddColumn;

class PlayersTable extends AbstractMigration
{

    public function change(): void
    {
        $table = $this->table('players');
        
        $table
        ->addIndex(['id'], ['unique' => true])
        ->addColumn('name', 'string', [
                'limit' => 30,
                'default' => null,
                'null' => false,
            ])
        ->AddColumn('position', 'string', [
            'limit' => 15,
            'default' => 'Indefinido',
            'null' => false,
        ])
            ->create();
    }
}
