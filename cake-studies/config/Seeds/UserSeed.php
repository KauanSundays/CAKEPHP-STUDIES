<?php
declare(strict_types=1);

use Migrations\AbstractSeed;
use Faker\Factory;

/**
 * User seed.
 */
class UserSeed extends AbstractSeed
{
    public function run(): void
    {
        $data = [];

        $faker = Faker\Factory::create();

        for ($i = 1; $i < 20; $i++) {
            $data['firstName'] = $faker->firstName();
            $data['lastName'] = $faker->lastName();
            $data['email'] = $faker->unique()->email;
            $data['password'] = password_hash('123', PASSWORD_DEFAULT);

            $table = $this->table('users');
            $table->insert($data)->save();
        }
    }
}
