<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Positions seed.
 */
class PositionsSeed extends AbstractSeed
{

    public function run(): void
    {
        $data = [];

        $table = $this->table('positions');
        $table->insert($data)->save();
    }
}
