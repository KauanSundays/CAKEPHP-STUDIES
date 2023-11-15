<?php
declare(strict_types=1);

use Migrations\AbstractSeed;
use Faker\Factory;


class PostSeed extends AbstractSeed
{
    public function run(): void
    {
        $data = [];

        $faker = Faker\Factory::create();

        for ($i = 1; $i < 20; $i++) {
            $title = $faker->sentence(5);
            $data['title'] = $title;
            $data['slug'] = $faker->text();
            $data['user_id'] = $faker->randomNumber(1, 19);

            $table = $this->table('posts');
            $table->insert($data)->save();
        }

        
    }
}
