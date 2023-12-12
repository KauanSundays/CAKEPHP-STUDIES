<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Players extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('players');
        $table->addColumn('name', 'string', ['limit' => 255, 'null' => false])
              ->addColumn('position_id', 'integer', ['null' => false])
              ->addForeignKey('position_id', 'positions', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
              ->create();
    }
}
