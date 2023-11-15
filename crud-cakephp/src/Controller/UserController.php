<?php
declare(strict_types=1);

namespace App\Controller;

class UserController extends AppController
{
    public function index()
    {
        $users = $this->Users->find()->all();
        $this->set(['users' => $users]);
    }
}
