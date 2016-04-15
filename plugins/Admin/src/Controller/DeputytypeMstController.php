<?php
namespace Admin\Controller;

use Admin\Controller\AppController;

/**
 * DeputytypeMst Controller
 *
 * @property \Admin\Model\Table\DeputytypeMstTable $DeputytypeMst
 */
class DeputytypeMstController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $deputytypeMst = $this->paginate($this->DeputytypeMst);

        $this->set(compact('deputytypeMst'));
        $this->set('_serialize', ['deputytypeMst']);
    }

    /**
     * View method
     *
     * @param string|null $id Deputytype Mst id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $deputytypeMst = $this->DeputytypeMst->get($id, [
            'contain' => []
        ]);

        $this->set('deputytypeMst', $deputytypeMst);
        $this->set('_serialize', ['deputytypeMst']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $deputytypeMst = $this->DeputytypeMst->newEntity();
        if ($this->request->is('post')) {
            $deputytypeMst = $this->DeputytypeMst->patchEntity($deputytypeMst, $this->request->data);
            if ($this->DeputytypeMst->save($deputytypeMst)) {
                $this->Flash->success(__('The deputytype mst has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The deputytype mst could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('deputytypeMst'));
        $this->set('_serialize', ['deputytypeMst']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Deputytype Mst id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $deputytypeMst = $this->DeputytypeMst->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deputytypeMst = $this->DeputytypeMst->patchEntity($deputytypeMst, $this->request->data);
            if ($this->DeputytypeMst->save($deputytypeMst)) {
                $this->Flash->success(__('The deputytype mst has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The deputytype mst could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('deputytypeMst'));
        $this->set('_serialize', ['deputytypeMst']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Deputytype Mst id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $deputytypeMst = $this->DeputytypeMst->get($id);
        if ($this->DeputytypeMst->delete($deputytypeMst)) {
            $this->Flash->success(__('The deputytype mst has been deleted.'));
        } else {
            $this->Flash->error(__('The deputytype mst could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
