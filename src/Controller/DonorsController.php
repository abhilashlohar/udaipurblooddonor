<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Donors Controller
 *
 * @property \App\Model\Table\DonorsTable $Donors
 */
class DonorsController extends AppController
{

	public function home()
    {
        $this->viewBuilder()->layout('ubd_layout');
    }
	
	public function AboutUs()
    {
        $this->viewBuilder()->layout('ubd_layout');
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->viewBuilder()->layout('ubd_layout');
        $donors = $this->paginate($this->Donors);

        $this->set(compact('donors'));
        $this->set('_serialize', ['donors']);
    }

    /**
     * View method
     *
     * @param string|null $id Donor id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $donor = $this->Donors->get($id, [
            'contain' => []
        ]);

        $this->set('donor', $donor);
        $this->set('_serialize', ['donor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->viewBuilder()->layout('ubd_layout');
        $donor = $this->Donors->newEntity();
        if ($this->request->is('post')) {
            $donor = $this->Donors->patchEntity($donor, $this->request->data);
            if ($this->Donors->save($donor)) {
                $this->Flash->success(__('The donor has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The donor could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('donor'));
        $this->set('_serialize', ['donor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Donor id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $donor = $this->Donors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $donor = $this->Donors->patchEntity($donor, $this->request->data);
            if ($this->Donors->save($donor)) {
                $this->Flash->success(__('The donor has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The donor could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('donor'));
        $this->set('_serialize', ['donor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Donor id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $donor = $this->Donors->get($id);
        if ($this->Donors->delete($donor)) {
            $this->Flash->success(__('The donor has been deleted.'));
        } else {
            $this->Flash->error(__('The donor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
