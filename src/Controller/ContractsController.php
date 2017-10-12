<?php
namespace App\Controller;

use App\Controller\AppController;

class ContractsController extends AppController
{

    public function index()
    {
        $contracts = $this->paginate($this->Contracts);

        $this->set(compact('contracts'));
        $this->set('_serialize', ['contracts']);
    }

    public function view($id = null)
    {
        $contract = $this->Contracts->get($id, [
            'contain' => []
        ]);

        $this->set('contract', $contract);
        $this->set('_serialize', ['contract']);
    }

    public function add()
    {
        $contract = $this->Contracts->newEntity();
        if ($this->request->is('post')) {
            $contract = $this->Contracts->patchEntity($contract, $this->request->getData());
            if ($this->Contracts->save($contract)) {
                $this->Flash->success(__('The contract has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contract could not be saved. Please, try again.'));
        }
        $this->set(compact('contract'));
        $this->set('_serialize', ['contract']);
    }

    public function edit($id = null)
    {
        $contract = $this->Contracts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contract = $this->Contracts->patchEntity($contract, $this->request->getData());
            if ($this->Contracts->save($contract)) {
                $this->Flash->success(__('The contract has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contract could not be saved. Please, try again.'));
        }
        $this->set(compact('contract'));
        $this->set('_serialize', ['contract']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contract = $this->Contracts->get($id);
        if ($this->Contracts->delete($contract)) {
            $this->Flash->success(__('The contract has been deleted.'));
        } else {
            $this->Flash->error(__('The contract could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
