<?php
namespace App\Controller;

use Cake\ORM\TableRegistry; 
use Cake\Event\Event;
use Cake\Network\Email\Email;
use App\Controller\AppController;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    
    
      public function login(){
                
        if ($this->request->is('post')) {
            //logs you in as a user
            $user_admin = $this->Auth->identify();
            if(!$user_admin){ 
                $this->Flash->error('Invalid  login codes, Please try again.');
                return $this->redirect(['controller'=>'Users','action' => 'login']); 
            }else{
                //sets you in session
                $this->Auth->setUser($user_admin);
                $admin_table = TableRegistry::get('Admins');
                //ensures you really exists in our admin data base
                $admin = $admin_table->find('all')->where(['user_id' =>$this->Auth->user('id')])->first();

                if(!$admin){
                $this->Flash->error('Invalid Admin details. Please check your login details and try again.'); 
                    return $this->redirect(['controller'=>'Products','action' => 'productlist']); 
                } 
                
                $this->set('admin', $admin);
                return $this->redirect(['controller'=>'Admins','action' => 'dashboard']);    
            }
        }
        //sets the page title
        $this->set('title', "Admin login");
        $this->viewBuilder()->setLayout('login'); 
    }

    
  
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Admins']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    
      // allow unrestricted pages
    public function beforeFilter(Event $event) {
        $this->Auth->allow(['add']);
        // $this->Security->config('unlockedActions', ['postnews', 'addimage', 'editnews']);
    }
    
      //the log out method
   public function logout(){
        
        $this->request->getSession()->destroy();
        return $this->redirect($this->Auth->logout());   
    }


}

