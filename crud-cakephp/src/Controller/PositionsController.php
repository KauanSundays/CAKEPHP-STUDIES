<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Positions Controller
 *
 * @method \App\Model\Entity\Position[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PositionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $positions = $this->paginate($this->Positions);

        $this->set(compact('positions'));
    }

    /**
     * View method
     *
     * @param string|null $id Position id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $position = $this->Positions->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('position'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $position = $this->Positions->newEmptyEntity();
        if ($this->request->is('post')) {
            $position = $this->Positions->patchEntity($position, $this->request->getData());
            if ($this->Positions->save($position)) {
                $this->Flash->success(__('The position has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The position could not be saved. Please, try again.'));
        }
        $this->set(compact('position'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Position id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $position = $this->Positions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $position = $this->Positions->patchEntity($position, $this->request->getData());
            if ($this->Positions->save($position)) {
                $this->Flash->success(__('The position has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The position could not be saved. Please, try again.'));
        }
        $this->set(compact('position'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Position id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $position = $this->Positions->get($id);
        if ($this->Positions->delete($position)) {
            $this->Flash->success(__('The position has been deleted.'));
        } else {
            $this->Flash->error(__('The position could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
