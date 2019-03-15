<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Socialmedia Controller
 *
 * @property \App\Model\Table\SocialmediaTable $Socialmedia
 *
 * @method \App\Model\Entity\Socialmedia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SocialmediaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $socialmedia = $this->paginate($this->Socialmedia);

        $this->set(compact('socialmedia'));
    }

    /**
     * View method
     *
     * @param string|null $id Socialmedia id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $socialmedia = $this->Socialmedia->get($id, [
            'contain' => []
        ]);

        $this->set('socialmedia', $socialmedia);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $socialmedia = $this->Socialmedia->newEntity();
        if ($this->request->is('post')) {
            $socialmedia = $this->Socialmedia->patchEntity($socialmedia, $this->request->getData());
            if ($this->Socialmedia->save($socialmedia)) {
                $this->Flash->success(__('The socialmedia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The socialmedia could not be saved. Please, try again.'));
        }
        $this->set(compact('socialmedia'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Socialmedia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $socialmedia = $this->Socialmedia->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $socialmedia = $this->Socialmedia->patchEntity($socialmedia, $this->request->getData());
            if ($this->Socialmedia->save($socialmedia)) {
                $this->Flash->success(__('The socialmedia has been saved.'));

                return $this->redirect(['action' => 'edit/1']);
            }
            $this->Flash->error(__('The socialmedia could not be saved. Please, try again.'));
        }
        $this->set(compact('socialmedia'));
        $this->viewBuilder()->setLayout('backend');
    }

    /**
     * Delete method
     *
     * @param string|null $id Socialmedia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $socialmedia = $this->Socialmedia->get($id);
        if ($this->Socialmedia->delete($socialmedia)) {
            $this->Flash->success(__('The socialmedia has been deleted.'));
        } else {
            $this->Flash->error(__('The socialmedia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
