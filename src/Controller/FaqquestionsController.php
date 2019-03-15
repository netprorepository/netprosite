<?php

namespace App\Controller;

use Cake\Event\Event;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;

/**
 * Faqquestions Controller
 *
 * @property \App\Model\Table\FaqquestionsTable $Faqquestions
 *
 * @method \App\Model\Entity\Faqquestion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FaqquestionsController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $faqquestions = $this->paginate($this->Faqquestions);
        $services_table = TableRegistry::get('Services');
        $accomplishments_table = TableRegistry::get('Accomplishments');
        $products_table = TableRegistry::get('Products');
        $partners_table = TableRegistry::get('Partners');
        $abouts_table = TableRegistry::get('Abouts');
        $accomplishments = $accomplishments_table->find();
        $products = $products_table->find();
        $services = $services_table->find()->limit(6);
        $aboutus = $abouts_table->find();
        $partners = $partners_table->find();

        $this->set(compact('faqquestions', 'services', 'aboutus', 'products','partners','accomplishments'));
        $this->viewBuilder()->setLayout('frontend');
    }

    /**
     * View method
     *
     * @param string|null $id Faqquestion id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $faqquestion = $this->Faqquestions->get($id, [
            'contain' => []
        ]);

        $this->set('faqquestion', $faqquestion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $faqquestion = $this->Faqquestions->newEntity();
        if ($this->request->is('post')) {
            $faqquestion = $this->Faqquestions->patchEntity($faqquestion, $this->request->getData());
            if ($this->Faqquestions->save($faqquestion)) {
                $this->Flash->success(__('The faqquestion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The faqquestion could not be saved. Please, try again.'));
        }
        $this->set(compact('faqquestion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Faqquestion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $faqquestion = $this->Faqquestions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $faqquestion = $this->Faqquestions->patchEntity($faqquestion, $this->request->getData());
            if ($this->Faqquestions->save($faqquestion)) {
                $this->Flash->success(__('The faqquestion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The faqquestion could not be saved. Please, try again.'));
        }
        $this->set(compact('faqquestion'));
    }

    //function that gets all the contact messages from users and sends it as a mail to the admin
    public function getintouch() {
        if ($this->request->is('post')) {
            
            $emailaddress = $this->request->getData('email');
            $user = $this->request->getData('name');
            $subject = $this->request->getData('subject');
            $message = '';
            $message .= 'Hello admin, ' . $user . '(' . $emailaddress . ')' . ' has just sent us a mail below<br /><br />';
            $message .= $this->request->getData('message');
           // debug(json_encode($message, JSON_PRETTY_PRINT)); exit;
            $email = new Email('default');
            $email->setFrom(['no-reply@netpro.com.ng' => 'NetPro Int\'l Ltd']);
            $email->setTo('support@netpro.com.ng');
            $email->setBcc(['chukwudi@netpro.com.ng']);
            $email->setEmailFormat('html');
            $email->setSubject($subject);
          
            if ($email->send($message)) {
                $this->Flash->success('An email has been sent to the admin, we\'ll get back to you shortly');
            } else {
                $this->Flash->error('Oh!, sorry, We are unable to send that mail. Please try again');
            }
        }
        return $this->redirect(['action' => 'index']);
        // $this->viewBuilder()->setLayout('frontend');
    }

    /**
     * Delete method
     *
     * @param string|null $id Faqquestion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $faqquestion = $this->Faqquestions->get($id);
        if ($this->Faqquestions->delete($faqquestion)) {
            $this->Flash->success(__('The faqquestion has been deleted.'));
        } else {
            $this->Flash->error(__('The faqquestion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    // allow unrestricted pages
    public function beforeFilter(Event $event) {
        $this->Auth->allow(['index','getintouch']);
        // $this->Security->config('unlockedActions', ['postnews', 'addimage', 'editnews']);
    }

}
