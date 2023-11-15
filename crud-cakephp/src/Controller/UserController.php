<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\ORM\TableRegistry;

class UserController extends AppController
{
    public function index()
    {
        $usersTable = TableRegistry::getTableLocator()->get('Users');
        $users = $usersTable->find()->all();
        $this->set('users', $users);
    }
}
