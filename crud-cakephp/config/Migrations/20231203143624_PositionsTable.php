<?php
declare(strict_types=1);

use Migrations\AbstractMigration;
use Phinx\Db\Action\AddColumn;

class PositionsTable extends AbstractMigration
{

    public function change(): void
    {
        $table = $this->table('positions');
        
        $table
        ->addIndex(['id'], ['unique' => true])
        ->addColumn('position', 'string', [
                'limit' => 30,
                'default' => 'indefinido',
                'null' => false,
            ])
            ->create();
    }
}
