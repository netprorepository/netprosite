<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Accomplishments Controller
 *
 * @property \App\Model\Table\AccomplishmentsTable $Accomplishments
 *
 * @method \App\Model\Entity\Accomplishment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AccomplishmentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $accomplishments = $this->paginate($this->Accomplishments);

        $this->set(compact('accomplishments'));
        $this->viewBuilder()->setLayout('backend');
    }

    /**
     * View method
     *
     * @param string|null $id Accomplishment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accomplishment = $this->Accomplishments->get($id, [
            'contain' => []
        ]);

        $this->set('accomplishment', $accomplishment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $accomplishment = $this->Accomplishments->newEntity();
        if ($this->request->is('post')) {
            $accomplishment = $this->Accomplishments->patchEntity($accomplishment, $this->request->getData());
            if ($this->Accomplishments->save($accomplishment)) {
                $this->Flash->success(__('The accomplishment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accomplishment could not be saved. Please, try again.'));
        }
        $this->set(compact('accomplishment'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Accomplishment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accomplishment = $this->Accomplishments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accomplishment = $this->Accomplishments->patchEntity($accomplishment, $this->request->getData());
            if ($this->Accomplishments->save($accomplishment)) {
                $this->Flash->success(__('The accomplishment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accomplishment could not be saved. Please, try again.'));
        }
        $this->set(compact('accomplishment'));
        $this->viewBuilder()->setLayout('backend');
    }

    /**
     * Delete method
     *
     * @param string|null $id Accomplishment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accomplishment = $this->Accomplishments->get($id);
        if ($this->Accomplishments->delete($accomplishment)) {
            $this->Flash->success(__('The accomplishment has been deleted.'));
        } else {
            $this->Flash->error(__('The accomplishment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
