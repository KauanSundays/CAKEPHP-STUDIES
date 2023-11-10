<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

class DatabaseSeed extends AbstractSeed
{
    public function run(): void
    {
       $this->call(UserSeed::class);
       $this->call(PostSeed::class);
    }
}
