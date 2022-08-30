<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CustomersOrderDetail Controller
 *
 * @property \App\Model\Table\CustomersOrderDetailTable $CustomersOrderDetail
 * @method \App\Model\Entity\CustomersOrderDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomersOrderDetailController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Orders'],
        ];
        $customersOrderDetail = $this->paginate($this->CustomersOrderDetail);

        $this->set(compact('customersOrderDetail'));
    }

    /**
     * View method
     *
     * @param string|null $id Customers Order Detail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customersOrderDetail = $this->CustomersOrderDetail->get($id, [
            'contain' => ['Products', 'Orders'],
        ]);

        $this->set(compact('customersOrderDetail'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customersOrderDetail = $this->CustomersOrderDetail->newEmptyEntity();
        if ($this->request->is('post')) {
            $customersOrderDetail = $this->CustomersOrderDetail->patchEntity($customersOrderDetail, $this->request->getData());
            if ($this->CustomersOrderDetail->save($customersOrderDetail)) {
                $this->Flash->success(__('Product was added to the order successfully.'));

                return $this->redirect(['controller'=>'orders','action' => 'index']);
            }
            $this->Flash->error(__('The product could not be added. Please, try again.'));
        }
        $products = $this->CustomersOrderDetail->Products->find('list', ['limit' => 200])->all();
        $orders = $this->CustomersOrderDetail->Orders->find('list', ['limit' => 200])->all();
        $this->set(compact('customersOrderDetail', 'products', 'orders'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Customers Order Detail id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customersOrderDetail = $this->CustomersOrderDetail->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customersOrderDetail = $this->CustomersOrderDetail->patchEntity($customersOrderDetail, $this->request->getData());
            if ($this->CustomersOrderDetail->save($customersOrderDetail)) {
                $this->Flash->success(__('The order was altered successfully.'));

                return $this->redirect(['controller'=>'customersOrderDetail','action' => 'index']);
            }
            $this->Flash->error(__('The order could not be saved. Please, try again.'));
        }
        $products = $this->CustomersOrderDetail->Products->find('list', ['limit' => 200])->all();
        $orders = $this->CustomersOrderDetail->Orders->find('list', ['limit' => 200])->all();
        $this->set(compact('customersOrderDetail', 'products', 'orders'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Customers Order Detail id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customersOrderDetail = $this->CustomersOrderDetail->get($id);
        if ($this->CustomersOrderDetail->delete($customersOrderDetail)) {
            $this->Flash->success(__('The customers order detail has been deleted successfully.'));
        } else {
            $this->Flash->error(__('The customers order detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['controller'=>'customersOrderDetail','action' => 'index']);
    }
}
