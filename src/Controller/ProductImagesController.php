<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProductImages Controller
 *
 * @property \App\Model\Table\ProductImagesTable $ProductImages
 * @method \App\Model\Entity\ProductImage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductImagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products'],
        ];
        $productImages = $this->paginate($this->ProductImages);

        $this->set(compact('productImages'));
    }

    /**
     * View method
     *
     * @param string|null $id Product Image id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productImage = $this->ProductImages->get($id, [
            'contain' => ['Products'],
        ]);

        $this->set(compact('productImage'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productImage = $this->ProductImages->newEmptyEntity();
        if ($this->request->is('post')) {
            $productImage = $this->ProductImages->patchEntity($productImage, $this->request->getData());

            if(!$productImage->getErrors())
            {$image = $this->request->getData('image_file');

                $name = $image->getClientFilename();
                $targetPath= WWW_ROOT . 'img'. DS . $name;

                if($name){ $image->moveTo($targetPath);}

                $productImage->filename =$name;
            }


            if ($this->ProductImages->save($productImage)) {
                $this->Flash->success(__('The product image has been saved successfully.'));

                return $this->redirect(['controller'=>'products','action' => 'index']);
            }
            $this->Flash->error(__('The product image could not be saved. Please, try again.'));
        }
        $products = $this->ProductImages->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('productImage', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Image id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productImage = $this->ProductImages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productImage = $this->ProductImages->patchEntity($productImage, $this->request->getData());
            if ($this->ProductImages->save($productImage)) {
                $this->Flash->success(__('The product image has been saved successfully.'));

                return $this->redirect(['controller'=>'products','action' => 'index']);
            }
            $this->Flash->error(__('The product image could not be saved. Please, try again.'));
        }
        $products = $this->ProductImages->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('productImage', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Image id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productImage = $this->ProductImages->get($id);
        if ($this->ProductImages->delete($productImage)) {
            $this->Flash->success(__('The product image has been deleted successfully.'));
        } else {
            $this->Flash->error(__('The product image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['controller'=>'products','action' => 'index']);
    }
}
