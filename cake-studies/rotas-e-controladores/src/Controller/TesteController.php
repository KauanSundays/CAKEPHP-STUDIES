<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Teste Controller
 *
 */
class TesteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Teste->find();
        $teste = $this->paginate($query);

        $this->set(compact('teste'));
    }

    /**
     * View method
     *
     * @param string|null $id Teste id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $teste = $this->Teste->get($id, contain: []);
        $this->set(compact('teste'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $teste = $this->Teste->newEmptyEntity();
        if ($this->request->is('post')) {
            $teste = $this->Teste->patchEntity($teste, $this->request->getData());
            if ($this->Teste->save($teste)) {
                $this->Flash->success(__('The teste has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The teste could not be saved. Please, try again.'));
        }
        $this->set(compact('teste'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Teste id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $teste = $this->Teste->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teste = $this->Teste->patchEntity($teste, $this->request->getData());
            if ($this->Teste->save($teste)) {
                $this->Flash->success(__('The teste has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The teste could not be saved. Please, try again.'));
        }
        $this->set(compact('teste'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Teste id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $teste = $this->Teste->get($id);
        if ($this->Teste->delete($teste)) {
            $this->Flash->success(__('The teste has been deleted.'));
        } else {
            $this->Flash->error(__('The teste could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
