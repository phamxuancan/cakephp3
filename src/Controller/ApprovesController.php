<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Approves Controller
 *
 * @property \App\Model\Table\ApprovesTable $Approves
 *
 * @method \App\Model\Entity\Approve[] paginate($object = null, array $settings = [])
 */
class ApprovesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $approves = $this->paginate($this->Approves);

        $this->set(compact('approves'));
        $this->set('_serialize', ['approves']);
    }

    /**
     * View method
     *
     * @param string|null $id Approve id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $approve = $this->Approves->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('approve', $approve);
        $this->set('_serialize', ['approve']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $approve = $this->Approves->newEntity();
        if ($this->request->is('post')) {
            $approve = $this->Approves->patchEntity($approve, $this->request->getData());
            if ($this->Approves->save($approve)) {
                $this->Flash->success(__('The approve has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The approve could not be saved. Please, try again.'));
        }
        $users = $this->Approves->Users->find('list', ['limit' => 200]);
        $this->set(compact('approve', 'users'));
        $this->set('_serialize', ['approve']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Approve id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $approve = $this->Approves->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $approve = $this->Approves->patchEntity($approve, $this->request->getData());
            if ($this->Approves->save($approve)) {
                $this->Flash->success(__('The approve has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The approve could not be saved. Please, try again.'));
        }
        $users = $this->Approves->Users->find('list', ['limit' => 200]);
        $this->set(compact('approve', 'users'));
        $this->set('_serialize', ['approve']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Approve id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $approve = $this->Approves->get($id);
        if ($this->Approves->delete($approve)) {
            $this->Flash->success(__('The approve has been deleted.'));
        } else {
            $this->Flash->error(__('The approve could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
