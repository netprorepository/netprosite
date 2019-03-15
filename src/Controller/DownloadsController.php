<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Downloads Controller
 *
 * @property \App\Model\Table\DownloadsTable $Downloads
 *
 * @method \App\Model\Entity\Download[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DownloadsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $downloads = $this->paginate($this->Downloads);

        $this->set(compact('downloads'));
    }

    /**
     * View method
     *
     * @param string|null $id Download id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $download = $this->Downloads->get($id, [
            'contain' => []
        ]);

        $this->set('download', $download);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $download = $this->Downloads->newEntity();
        if ($this->request->is('post')) {
            $download = $this->Downloads->patchEntity($download, $this->request->getData());
            if ($this->Downloads->save($download)) {
                $this->Flash->success(__('The download has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The download could not be saved. Please, try again.'));
        }
        $this->set(compact('download'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Download id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $download = $this->Downloads->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $download = $this->Downloads->patchEntity($download, $this->request->getData());
            if ($this->Downloads->save($download)) {
                $this->Flash->success(__('The download has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The download could not be saved. Please, try again.'));
        }
        $this->set(compact('download'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Download id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $download = $this->Downloads->get($id);
        if ($this->Downloads->delete($download)) {
            $this->Flash->success(__('The download has been deleted.'));
        } else {
            $this->Flash->error(__('The download could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
