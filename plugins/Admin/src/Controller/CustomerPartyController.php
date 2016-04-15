<?php
namespace Admin\Controller;

use Admin\Controller\AppController;

/**
 * CustomerParty Controller
 *
 * @property \Admin\Model\Table\CustomerPartyTable $CustomerParty
 */
class CustomerPartyController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
//        $this->paginate = [
//            'contain' => ['Belongs']
//        ];
        $customerParty = $this->paginate($this->CustomerParty);

        $this->set(compact('customerParty'));
        $this->set('_serialize', ['customerParty']);
    }

    /**
     * View method
     *
     * @param string|null $id Customer Party id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customerParty = $this->CustomerParty->get($id, [
            'contain' => ['Belongs']
        ]);

        $this->set('customerParty', $customerParty);
        $this->set('_serialize', ['customerParty']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customerParty = $this->CustomerParty->newEntity();
        if ($this->request->is('post')) {
            $customerParty = $this->CustomerParty->patchEntity($customerParty, $this->request->data);
            if ($this->CustomerParty->save($customerParty)) {
                $this->Flash->success(__('The customer party has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The customer party could not be saved. Please, try again.'));
            }
        }
        $belongs = $this->CustomerParty->Belongs->find('list', ['limit' => 200]);
        $this->set(compact('customerParty', 'belongs'));
        $this->set('_serialize', ['customerParty']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer Party id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customerParty = $this->CustomerParty->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customerParty = $this->CustomerParty->patchEntity($customerParty, $this->request->data);
            if ($this->CustomerParty->save($customerParty)) {
                $this->Flash->success(__('The customer party has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The customer party could not be saved. Please, try again.'));
            }
        }
        $belongs = $this->CustomerParty->Belongs->find('list', ['limit' => 200]);
        $this->set(compact('customerParty', 'belongs'));
        $this->set('_serialize', ['customerParty']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer Party id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customerParty = $this->CustomerParty->get($id);
        if ($this->CustomerParty->delete($customerParty)) {
            $this->Flash->success(__('The customer party has been deleted.'));
        } else {
            $this->Flash->error(__('The customer party could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
