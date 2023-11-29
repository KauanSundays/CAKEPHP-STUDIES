<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class PlayersTable extends AbstractMigration
{

    public function change(): void
    {
        $table = $this->table('players');
        
        $table
            ->addColumn('nome', 'string', [
                'limit' => 30,
                'default' => null,
                'null' => false,
            ])
            ->create();
    }
}
