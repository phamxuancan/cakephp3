<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;

class ContractsController extends AppController
{
    public function index()
    {
//        $this->loadModel('Contracts');
        $this->paginate = [
            'limit' => 10
        ];
        $contracts = $this->Contracts->find('all');
        $this->set('contracts', $this->paginate($contracts));
        debug($contracts);
    }

    public function view($id)
    {
        $contracts = $this->Contracts->get($id);
        $this->set(compact('contracts'));
    }

    public function add()
    {
        $contracts = $this->Contracts->newEntity();
        if ($this->request->is('post')) {
            $contracts = $this->Contracts->patchEntity($contracts, $this->request->getData());
            if ($this->Contracts->save($contracts)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Unable to add the user.'));
        }
        $this->set('contracts', $contracts);
    }
}