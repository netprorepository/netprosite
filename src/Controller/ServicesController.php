<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Services Controller
 *
 * @property \App\Model\Table\ServicesTable $Services
 *
 * @method \App\Model\Entity\Service[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ServicesController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $this->paginate = [
           // 'contain' => ['Admins']
        ];
        $services = $this->paginate($this->Services);
//        debug(json_encode($services, JSON_PRETTY_PRINT));
//        exit;
        $this->set(compact('services'));
        $this->viewBuilder()->setLayout('backend');
    }

    
    
    //service detail function
    public function servicedetails($id=null){
        
         $service = $this->Services->get($id, [
          //  'contain' => ['Admins']
        ]);

        $this->set('service', $service);
        
        $this->viewBuilder()->setLayout('detailspage');
    }

    

    //lists all our services
    public function serviceslist(){
        
         $this->paginate = [];
        $services = $this->paginate($this->Services);
//        debug(json_encode($services, JSON_PRETTY_PRINT));
//        exit;
        $this->set(compact('services'));
       $this->viewBuilder()->setLayout('detailspage');
    }

    

    /**
     * View method
     *
     * @param string|null $id Service id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $service = $this->Services->get($id, [
            'contain' => ['Admins']
        ]);

        $this->set('service', $service);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
          //ensure admin is loggedin
         $admins_table = TableRegistry::get('Admins');
        $admin = $admins_table->find('all')->where(['user_id' => $this->Auth->user('id')])->first();

        if (!$admin) {
            $this->Flash->error('Please login to continue.');
            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }
        $service = $this->Services->newEntity();
        if ($this->request->is('post')) {
            $service = $this->Services->patchEntity($service, $this->request->getData());
            $service->admin_id = $admin->id;
            if ($this->Services->save($service)) {
                $this->Flash->success(__('The service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The service could not be saved. Please, try again.'));
        }
        $admins = $this->Services->Admins->find('list', ['limit' => 200]);
        $this->set(compact('service', 'admins'));
        $this->viewBuilder()->setLayout('backend');
    }

    /**
     * Edit method
     *
     * @param string|null $id Service id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $service = $this->Services->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $service = $this->Services->patchEntity($service, $this->request->getData());
            if ($this->Services->save($service)) {
                $this->Flash->success(__('The service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The service could not be saved. Please, try again.'));
        }
        $admins = $this->Services->Admins->find('list', ['limit' => 200]);
        $this->set(compact('service', 'admins'));
        $this->viewBuilder()->setLayout('backend');
    }

    /**
     * Delete method
     *
     * @param string|null $id Service id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $service = $this->Services->get($id);
        if ($this->Services->delete($service)) {
            $this->Flash->success(__('The service has been deleted.'));
        } else {
            $this->Flash->error(__('The service could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
     // allow unrestricted pages
    public function beforeFilter(Event $event) {
        $this->Auth->allow(['servicedetails','serviceslist']);
        // $this->Security->config('unlockedActions', ['postnews', 'addimage', 'editnews']);
    }

}
