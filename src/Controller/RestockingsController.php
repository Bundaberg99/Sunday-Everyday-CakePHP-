<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Restockings Controller
 *
 * @property \App\Model\Table\RestockingsTable $Restockings
 * @method \App\Model\Entity\Restocking[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RestockingsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Staffs'],
        ];
        $restockings = $this->paginate($this->Restockings);

        $this->set(compact('restockings'));
    }

    /**
     * View method
     *
     * @param string|null $id Restocking id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $restocking = $this->Restockings->get($id, [
            'contain' => ['Staffs', 'StaffsRestockingDetail','StaffsRestockingDetail.Products'],
        ]);

        $this->set(compact('restocking'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $restocking = $this->Restockings->newEmptyEntity();
        if ($this->request->is('post')) {
            $restocking = $this->Restockings->patchEntity($restocking, $this->request->getData());
            if ($this->Restockings->save($restocking)) {
                $this->Flash->success(__('Restocking has been saved successfully.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Restocking could not be saved. Please, try again.'));
        }
        $staffs = $this->Restockings->Staffs->find('list', ['limit' => 200])->all();
        $this->set(compact('restocking', 'staffs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Restocking id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $restocking = $this->Restockings->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $restocking = $this->Restockings->patchEntity($restocking, $this->request->getData());
            if ($this->Restockings->save($restocking)) {
                $this->Flash->success(__('Restocking has been saved successfully.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Restocking could not be saved. Please, try again.'));
        }
        $staffs = $this->Restockings->Staffs->find('list', ['limit' => 200])->all();
        $this->set(compact('restocking', 'staffs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Restocking id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $restocking = $this->Restockings->get($id);
        if ($this->Restockings->delete($restocking)) {
            $this->Flash->success(__('Restocking has been deleted successfully.'));
        } else {
            $this->Flash->error(__('Restocking could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
