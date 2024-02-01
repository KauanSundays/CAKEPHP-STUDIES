<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Validation\Validator;

/**
 * Products Controller
 *
 */
class ProductsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Products->find();
        //dd('oi');

        $products = $this->paginate($query);

        $this->set(compact('products'));
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, ['contain' => []]);
        $this->set(compact('product'));
    }
    

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $product = $this->Products->newEmptyEntity();
        
        if ($this->request->is('post')) {
            $validator = new Validator();
            $validator
                ->requirePresence('name')
                ->notEmptyString('name', 'Please enter the name of the product.')
                ->minLength('name', 4, 'Name must be at least 4 characters long.'); // Alterado para 4 caracteres

            $errors = $validator->validate($this->request->getData());

            if (empty($errors)) {
                $product = $this->Products->patchEntity($product, $this->request->getData());

                if ($this->Products->save($product)) {
                    $this->Flash->success(__('The product has been saved.'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The product could not be saved. Please, try again.'));
                }
            } else {
                // Adiciona mensagem de erro manualmente se o campo 'name' não atender à validação personalizada
                if (isset($errors['name']['minLength'])) {
                    $this->Products->setError('name', 'Campo muito pequeno');
                }

                $this->Flash->error(__('Validation error. Please fix the errors and try again.'));
            }
        }

        $this->set(compact('product'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Products->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $this->set(compact('product'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
