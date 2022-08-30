<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Mailer\Mailer;

/**
 * Enquiries Controller
 *
 * @property \App\Model\Table\EnquiriesTable $Enquiries
 * @method \App\Model\Entity\Enquiry[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnquiriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Suppliers'],
        ];
        $enquiries = $this->paginate($this->Enquiries);

        $this->set(compact('enquiries'));
    }

    /**
     * View method
     *
     * @param string|null $id Enquiry id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $enquiry = $this->Enquiries->get($id, [
            'contain' => ['Suppliers'],
        ]);

        $this->set(compact('enquiry'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $enquiry = $this->Enquiries->newEmptyEntity();
        if ($this->request->is('post')) {
            $enquiry = $this->Enquiries->patchEntity($enquiry, $this->request->getData());
            if ($this->Enquiries->save($enquiry)) {

                //send email
                $mailer = new Mailer('default');
                // Setup email para
                $mailer
                    ->setEmailFormat('html')
                    ->setTo(Configure::read('EnquiryMail.to'))
                    ->setFrom(Configure::read('EnquiryMail.from'))
                    ->setSubject('New order request from Sunday Everyday')
                    ->viewBuilder()
                    ->disableAutoLayout()
                    ->setTemplate('enquiry');
                // Send data to the email template
                $mailer->setViewVars([
                    'content' => $enquiry->body,
//                    'email' => $enquiry->fetchTable('Suppliers')->find('email'),
                    'email' => $enquiry->has('supplier') ? $this->link($enquiry->supplier->email, ['controller' => 'Suppliers', 'action' => 'view', $enquiry->supplier->id]) : '',
                    'created' => $enquiry->created,
                    'id' => $enquiry->id
                ]);
                //send email
                $email_result = $mailer->deliver();

                if ($email_result) {
                    $enquiry->email_sent = ($email_result) ? true : false;
                    $this->Enquiries->save($enquiry);
                    $this->Flash->success(__('The email order has been saved and sent to the supplier.'));
                } else {
                    $this->Flash->error(__('Email failed to send. Please check the system later.'));
                }

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enquiry could not be saved. Please, try again.'));
        }
        $suppliers = $this->Enquiries->Suppliers->find('list', ['limit' => 200])->all();
        $this->set(compact('enquiry', 'suppliers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Enquiry id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $enquiry = $this->Enquiries->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enquiry = $this->Enquiries->patchEntity($enquiry, $this->request->getData());
            if ($this->Enquiries->save($enquiry)) {
                $this->Flash->success(__('The enquiry has been saved successfully.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enquiry could not be saved. Please, try again.'));
        }
        $suppliers = $this->Enquiries->Suppliers->find('list', ['limit' => 200])->all();
        $this->set(compact('enquiry', 'suppliers'));
    }




    /**
     * Mark as sent method
     *
     * @param string|null $id Enquiry id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function mark($id = null)
    {
        $enquiry = $this->Enquiries->get($id);
        if ($enquiry->email_sent) {
            $this->Flash->error(__('This order is already marked as sent. '));
        } else {
            $enquiry->email_sent = true;
            if ($this->Enquiries->save($enquiry)) {
                $this->Flash->success(__('The order has been marked as sent.'));
            } else {
                $this->Flash->error(__('The order could not be marked as sent. Please, try again.'));
            }
        }


        return $this->redirect(['action' => 'index']);
    }




    /**
     * Delete method
     *
     * @param string|null $id Enquiry id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enquiry = $this->Enquiries->get($id);
        if ($this->Enquiries->delete($enquiry)) {
            $this->Flash->success(__('The enquiry has been deleted.'));
        } else {
            $this->Flash->error(__('The enquiry could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
