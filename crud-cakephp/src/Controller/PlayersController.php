<?php
declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;

/**
 * Players Controller
 *
 * @method \App\Model\Entity\Player[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlayersController extends AppController
{
    /**
     * @var \App\Model\Table\PlayersTable
     */
    protected $players;

    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadComponent('Flash');
        $this->loadModel('Players');
    }


    public function index()
    {
        $players = $this->paginate($this->Players);

        $this->set(compact('players'));
    }   
}
