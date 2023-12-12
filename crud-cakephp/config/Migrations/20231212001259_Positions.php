<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Positions extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('positions');
        $table->addColumn('position_name', 'string', ['limit' => 255, 'null' => false])
              ->create();
    }
}

