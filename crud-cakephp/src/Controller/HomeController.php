<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Datasource\ConnectionManager;

/**
 * Home Controller
 *
 * @method \App\Model\Entity\Home[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomeController extends AppController
{
    public function index()
    {
        $connection = ConnectionManager::get('default');
        $users = $connection->execute('select * from users')->fetchAll('obj');

        $this->set(compact('users'));
        return $this->render('index');
    }
}