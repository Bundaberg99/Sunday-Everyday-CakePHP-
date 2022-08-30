<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * StaffsRestockingDetail Controller
 *
 * @property \App\Model\Table\StaffsRestockingDetailTable $StaffsRestockingDetail
 * @method \App\Model\Entity\StaffsRestockingDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StaffsRestockingDetailController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Restockings'],
        ];
        $staffsRestockingDetail = $this->paginate($this->StaffsRestockingDetail);

        $this->set(compact('staffsRestockingDetail'));
    }

    /**
     * View method
     *
     * @param string|null $id Staffs Restocking Detail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $staffsRestockingDetail = $this->StaffsRestockingDetail->get($id, [
            'contain' => ['Products', 'Restockings'],
        ]);

        $this->set(compact('staffsRestockingDetail'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $staffsRestockingDetail = $this->StaffsRestockingDetail->newEmptyEntity();
        if ($this->request->is('post')) {
            $staffsRestockingDetail = $this->StaffsRestockingDetail->patchEntity($staffsRestockingDetail, $this->request->getData());
            if ($this->StaffsRestockingDetail->save($staffsRestockingDetail)) {
                $this->Flash->success(__('The staffs restocking detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The staffs restocking detail could not be saved. Please, try again.'));
        }
        $products = $this->StaffsRestockingDetail->Products->find('list', ['limit' => 200])->all();
        $restockings = $this->StaffsRestockingDetail->Restockings->find('list', ['limit' => 200])->all();
        $this->set(compact('staffsRestockingDetail', 'products', 'restockings'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Staffs Restocking Detail id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $staffsRestockingDetail = $this->StaffsRestockingDetail->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $staffsRestockingDetail = $this->StaffsRestockingDetail->patchEntity($staffsRestockingDetail, $this->request->getData());
            if ($this->StaffsRestockingDetail->save($staffsRestockingDetail)) {
                $this->Flash->success(__('The staffs restocking detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The staffs restocking detail could not be saved. Please, try again.'));
        }
        $products = $this->StaffsRestockingDetail->Products->find('list', ['limit' => 200])->all();
        $restockings = $this->StaffsRestockingDetail->Restockings->find('list', ['limit' => 200])->all();
        $this->set(compact('staffsRestockingDetail', 'products', 'restockings'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Staffs Restocking Detail id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $staffsRestockingDetail = $this->StaffsRestockingDetail->get($id);
        if ($this->StaffsRestockingDetail->delete($staffsRestockingDetail)) {
            $this->Flash->success(__('The staffs restocking detail has been deleted.'));
        } else {
            $this->Flash->error(__('The staffs restocking detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
