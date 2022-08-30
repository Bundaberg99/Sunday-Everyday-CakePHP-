<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CustomerProductsCartDetail Controller
 *
 * @property \App\Model\Table\CustomerProductsCartDetailTable $CustomerProductsCartDetail
 * @method \App\Model\Entity\CustomerProductsCartDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomerProductsCartDetailController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Carts'],
        ];
        $customerProductsCartDetail = $this->paginate($this->CustomerProductsCartDetail);

        $this->set(compact('customerProductsCartDetail'));
    }

    /**
     * View method
     *
     * @param string|null $id Customer Products Cart Detail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customerProductsCartDetail = $this->CustomerProductsCartDetail->get($id, [
            'contain' => ['Products', 'Carts'],
        ]);

        $this->set(compact('customerProductsCartDetail'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customerProductsCartDetail = $this->CustomerProductsCartDetail->newEmptyEntity();
        if ($this->request->is('post')) {
            $customerProductsCartDetail = $this->CustomerProductsCartDetail->patchEntity($customerProductsCartDetail, $this->request->getData());
            if ($this->CustomerProductsCartDetail->save($customerProductsCartDetail)) {
                $this->Flash->success(__('The customer products cart detail has been saved.'));

                return $this->redirect(['controller'=>'customers','action' => 'index']);
            }
            $this->Flash->error(__('The customer products cart detail could not be saved. Please, try again.'));
        }
        $products = $this->CustomerProductsCartDetail->Products->find('list', ['limit' => 200])->all();
        $carts = $this->CustomerProductsCartDetail->Carts->find('list', ['limit' => 200])->all();
        $this->set(compact('customerProductsCartDetail', 'products', 'carts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer Products Cart Detail id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customerProductsCartDetail = $this->CustomerProductsCartDetail->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customerProductsCartDetail = $this->CustomerProductsCartDetail->patchEntity($customerProductsCartDetail, $this->request->getData());
            if ($this->CustomerProductsCartDetail->save($customerProductsCartDetail)) {
                $this->Flash->success(__('The customer products cart detail has been saved.'));

                return $this->redirect(['controller'=>'customers','action' => 'index']);
            }
            $this->Flash->error(__('The customer products cart detail could not be saved. Please, try again.'));
        }
        $products = $this->CustomerProductsCartDetail->Products->find('list', ['limit' => 200])->all();
        $carts = $this->CustomerProductsCartDetail->Carts->find('list', ['limit' => 200])->all();
        $this->set(compact('customerProductsCartDetail', 'products', 'carts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer Products Cart Detail id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customerProductsCartDetail = $this->CustomerProductsCartDetail->get($id);
        if ($this->CustomerProductsCartDetail->delete($customerProductsCartDetail)) {
            $this->Flash->success(__('The customer products cart detail has been deleted.'));
        } else {
            $this->Flash->error(__('The customer products cart detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['controller'=>'customers','action' => 'index']);
    }
}
