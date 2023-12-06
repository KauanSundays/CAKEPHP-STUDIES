<?php

namespace App\Controller;

use App\Controller\AppController;

class PlayersController extends AppController
{
    public function index()
    {
        $players = $this->paginate($this->Players);

        // No método index de PlayersController
        $positionsTable = $this->getTableLocator()->get('Positions');

        $positions = $positionsTable->find
                    ('list', ['keyField' => 'id', 
                    'valueField' => 'position'
                ])->toArray();
        
        $this->set(compact('players', 'positions'));
    }

    public function store()
    {
        $player = $this->Players->newEmptyEntity();
        if ($this->request->is('post')) {
            $player = $this->Players->patchEntity($player, $this->request->getData());
            if ($this->Players->save($player)) {
                $this->Flash->success(__('The player has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The player could not be saved. Please, try again.'));
        }
        $this->set(compact('player'));
    }

    public function edit($id = null)
    {
        $player = $this->Players->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $player = $this->Players->patchEntity($player, $this->request->getData());
            if ($this->Players->save($player)) {
                $this->Flash->success(__('The player has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The player could not be updated. Please, try again.'));
        }

        $this->set(compact('player'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $player = $this->Players->get($id);

        if ($this->Players->delete($player)) {
            $this->Flash->success(__('The player has been deleted.'));
        } else {
            $this->Flash->error(__('The player could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
?>
