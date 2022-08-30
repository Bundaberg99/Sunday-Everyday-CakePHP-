<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
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
        $this->paginate = [
            'contain' => ['Suppliers','ProductImages'],
        ];

        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
    }

    public function guestsHome(){

        $this->viewBuilder()->setLayout('guests_home');
        $this->paginate = [
            'contain' => ['Suppliers','ProductImages'],
        ];

        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
    }

    /**
     * understock method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function understock(){

        $query=$this->Products->find();
        $query->where([
            'quantity <='=>50
        ]);


        $products=$this->paginate($query);
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
        $product = $this->Products->get($id, [
            'contain' => ['Suppliers', 'CustomersOrderDetail', 'StaffsRestockingDetail','ProductImages'],
        ]);

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
            $product = $this->Products->patchEntity($product, $this->request->getData());

            if(!$product->getErrors())
            {
                $image = $this->request->getData('image_file');

                $name = $image->getClientFilename();
                $targetPath= WWW_ROOT . 'img'. DS . $name;

                if($name){ $image->moveTo($targetPath);}

                $product->image =$name;
            }
            if ($this->Products->save($product)) {
                $this->Flash->success(__('Product has been saved successfully.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Product could not be saved. Please, try again.'));
        }
        $suppliers = $this->Products->Suppliers->find('list', ['limit' => 200])->all();
        $this->set(compact('product', 'suppliers'));
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
        $product = $this->Products->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('Product has been saved successfully.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Product could not be saved. Please, try again.'));
        }
        $suppliers = $this->Products->Suppliers->find('list', ['limit' => 200])->all();
        $this->set(compact('product', 'suppliers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);

        if ($this->Products->delete($product)) {
            $this->Flash->success(__('Product has been deleted.'));
        } else {
            $this->Flash->error(__('Product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }



}
