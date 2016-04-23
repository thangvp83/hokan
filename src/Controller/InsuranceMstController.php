<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Date;
use Cake\I18n\Time;

/**
 * InsuranceMst Controller
 *
 * @property \App\Model\Table\InsuranceMstTable $InsuranceMst
 */
class InsuranceMstController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public $deputy_mst_cate;
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->loadModel('DeputytypeMst');

        $list = $this->DeputytypeMst->find('all')->toArray();
        $cate = $this->DeputytypeMst->buildTree($this->DeputytypeMst->generateCategories($list), 0, 'code');
        $this->set(compact('cate'));

        $this->viewBuilder()->layout('admin');
    }

    public function index()
    {
        $insuranceMst = $this->paginate($this->InsuranceMst);

        $this->set(compact('insuranceMst'));
        $this->set('_serialize', ['insuranceMst']);
    }

    /**
     * View method
     *
     * @param string|null $id Insurance Mst id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $insuranceMst = $this->InsuranceMst->get($id, [
            'contain' => []
        ]);

        $this->set('insuranceMst', $insuranceMst);
        $this->set('_serialize', ['insuranceMst']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $insuranceMst = $this->InsuranceMst->newEntity();

        if ($this->request->is('post')) {



            $insuranceMst = $this->Core->patchEntity($insuranceMst, $this->request->data);

            $insuranceMst->created_time = new Date();
            $insuranceMst->update_time = new Date();
            $insuranceMst->create_user = isset($this->CurUser->last_name)?$this->CurUser->last_name : GROUP_ADMIN;
            $insuranceMst->update_user = isset($this->CurUser->last_name)?$this->CurUser->last_name : GROUP_ADMIN;

//            debug($insuranceMst);die;
            if ($this->InsuranceMst->save($insuranceMst)) {
                $this->Flash->success(__('The insurance mst has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The insurance mst could not be saved. Please, try again.'));
            }
        }
        $this->buildHasMany($insuranceMst,'insurance_option',['container'=>'#add_more_form','add'=>'.btn_add','delete'=>'.btn_delete']);
        $this->set(compact('insuranceMst'));
        $this->set('_serialize', ['insuranceMst']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Insurance Mst id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $insuranceMst = $this->InsuranceMst->get($id, [
            'contain' => ['insurance_option']
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $insuranceMst = $this->Core->patchEntity($insuranceMst, $this->request->data);

            $insuranceMst->update_time = date('Y-m-d', (time()));
            if ($this->InsuranceMst->save($insuranceMst)) {
                $this->Flash->success(__('The insurance mst has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The insurance mst could not be saved. Please, try again.'));
            }
        }
        $this->buildHasMany($insuranceMst,'insurance_option',['container'=>'#add_more_form','add'=>'.btn_add','delete'=>'.btn_delete']);
        $this->set(compact('insuranceMst'));
        $this->set('_serialize', ['insuranceMst']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Insurance Mst id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $insuranceMst = $this->InsuranceMst->get($id);
        if ($this->InsuranceMst->delete($insuranceMst)) {
            $this->Flash->success(__('The insurance mst has been deleted.'));
        } else {
            $this->Flash->error(__('The insurance mst could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
