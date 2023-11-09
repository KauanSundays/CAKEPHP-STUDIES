<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Post extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('posts'); //nome da tabela

        $table->addColumn('title', 'string', [
            "limit" => 100,  
            'null' => false, //não aceita nulo
        ]);

        $table->addColumn('created_at', 'timestamp', options:[
            'default'=> 'CURRENT_TIMESTAMP',
        ]);

        $table->addColumn('updated_at', 'timestamp', options:[
            'default'=> 'CURRENT_TIMESTAMP',
            'update'=> 'CURRENT_TIMESTAMP',
        ]);

    }
}
