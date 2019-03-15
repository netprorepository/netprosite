<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Socialmedias Controller
 *
 * @property \App\Model\Table\SocialmediasTable $Socialmedias
 *
 * @method \App\Model\Entity\Socialmedia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SocialmediasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $socialmedias = $this->paginate($this->Socialmedias);

        $this->set(compact('socialmedias'));
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
        $socialmedia = $this->Socialmedias->get($id, [
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
        $socialmedia = $this->Socialmedias->newEntity();
        if ($this->request->is('post')) {
            $socialmedia = $this->Socialmedias->patchEntity($socialmedia, $this->request->getData());
            if ($this->Socialmedias->save($socialmedia)) {
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
        $socialmedia = $this->Socialmedias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $socialmedia = $this->Socialmedias->patchEntity($socialmedia, $this->request->getData());
            if ($this->Socialmedias->save($socialmedia)) {
                $this->Flash->success(__('The socialmedia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The socialmedia could not be saved. Please, try again.'));
        }
        $this->set(compact('socialmedia'));
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
        $socialmedia = $this->Socialmedias->get($id);
        if ($this->Socialmedias->delete($socialmedia)) {
            $this->Flash->success(__('The socialmedia has been deleted.'));
        } else {
            $this->Flash->error(__('The socialmedia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
