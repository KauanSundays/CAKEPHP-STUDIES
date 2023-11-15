<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class User extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('users');
        $table->addColumn('firstName', 'string', options: [
            "limit" => 30, 
            'null' => false,
        ]);
         
        $table->addColumn('lastName', 'string', options: [
            "limit" => 30, 
            'null' => false,
        ]);

        $table->addColumn('email', 'string', options: [
            "limit" => 30, 
            'null' => false,
        ]);
        $table->addColumn('password', 'string', options: [
            "limit" => 30, 
            'null' => false,
        ]);

        $table->addColumn('created_at', 'timestamp', options:[
            'default'=> 'CURRENT_TIMESTAMP',
        ]);

        $table->addColumn('updated_at', 'timestamp', options:[
            'default'=> 'CURRENT_TIMESTAMP',
            'update'=> 'CURRENT_TIMESTAMP',
        ]);

        $table->addIndex('email', ['unique' => true]); //email é unico

        $table->create();
    }
}
