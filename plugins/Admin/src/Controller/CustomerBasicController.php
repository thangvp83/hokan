<?php
namespace Admin\Controller;

use Admin\Controller\AppController;
use Cake\I18n\Time;

/**
 * CustomerBasic Controller
 *
 * @property \Admin\Model\Table\CustomerBasicTable $CustomerBasic
 */
class CustomerBasicController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $customerBasic = $this->CustomerBasic->find('all', [
            'conditions' => ['customer_id' => $this->CurUser->id]
        ])->first();

        $customerBasic->birthday = $customerBasic->birthday->i18nFormat('yyyy/MM/dd');
        $customerBasic->created_time = $customerBasic->created_time->i18nFormat('yyyy/MM/dd');
        $customerBasic->update_time = $customerBasic->update_time->i18nFormat('yyyy/MM/dd');

        $this->set(compact('customerBasic'));
        $this->set('_serialize', ['customerBasic']);
    }

    /**
     * View method
     *
     * @param string|null $id Customer Basic id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customerBasic = $this->CustomerBasic->get($id, [
            'contain' => []
        ]);

        $this->set('customerBasic', $customerBasic);
        $this->set('_serialize', ['customerBasic']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customerBasic = $this->CustomerBasic->newEntity();
        if ($this->request->is('post')) {
            $customerBasic = $this->CustomerBasic->patchEntity($customerBasic, $this->request->data);
            if ($this->CustomerBasic->save($customerBasic)) {
                $this->Flash->success(__('The customer basic has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The customer basic could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('customerBasic'));
        $this->set('_serialize', ['customerBasic']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer Basic id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customerBasic = $this->CustomerBasic->get($id, [
            'contain' => []
        ]);
        $customerBasic->birthday = $customerBasic->birthday->i18nFormat('yyyy/MM/dd');
        $customerBasic->created_time = $customerBasic->created_time->i18nFormat('yyyy/MM/dd');
        $customerBasic->update_time = $customerBasic->update_time->i18nFormat('yyyy/MM/dd');


        if ($this->request->is(['patch', 'post', 'put'])) {

            $this->request->data['birthday'] =  Time::parseDateTime($this->request->data['birthday'], 'yyyy-MM-dd HH:mm:ss');
            $this->request->data['created_time'] =  Time::parseDateTime($this->request->data['created_time'], 'yyyy-MM-dd HH:mm:ss');
            $this->request->data['update_time'] =  Time::parseDateTime($this->request->data['update_time'], 'yyyy-MM-dd HH:mm:ss');
            $customerBasic = $this->CustomerBasic->patchEntity($customerBasic, $this->request->data);
            if ($this->CustomerBasic->save($customerBasic)) {
                $this->Flash->success(__('The customer basic has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The customer basic could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('customerBasic'));
        $this->set('_serialize', ['customerBasic']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer Basic id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customerBasic = $this->CustomerBasic->get($id);
        if ($this->CustomerBasic->delete($customerBasic)) {
            $this->Flash->success(__('The customer basic has been deleted.'));
        } else {
            $this->Flash->error(__('The customer basic could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
