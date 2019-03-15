<?php

namespace App\Controller;

use Cake\Network\Email\Email;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 *
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
        $this->viewBuilder()->setLayout('backend');
    }

    
    //the proposal page
    public function proposal(){
        
        
        
         $this->viewBuilder()->setLayout('detailspage');
        
    }

    



    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $product = $this->Products->get($id, [
            'contain' => []
        ]);

        $this->set('product', $product);
    }

    
    //product details page
    public function productdetails($id){
        
         $product = $this->Products->get($id, [
            'contain' => []
        ]);

        $this->set('product', $product);
         $this->viewBuilder()->setLayout('detailspage');
    }

    
    
    
    //presents a list of our products
    public function productlist(){
         $products = $this->paginate($this->Products);

        $this->set(compact('products'));
        
        $this->viewBuilder()->setLayout('detailspage');
    }

    




    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $product = $this->Products->newEntity();
        if ($this->request->is('post')) {
            // $image_name = "";
            //debug(json_encode( $this->request->getData(), JSON_PRETTY_PRINT)); exit;
            $imagearray = $this->request->getData('productimage');
            if (!empty($imagearray['tmp_name'])) {
                $image_name = $this->addimage($imagearray);
            }
            else{
                $image_name = "";
            }
            $product = $this->Products->patchEntity($product, $this->request->getData());
            $product->productimage = $image_name;
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $this->set(compact('product'));
        $this->viewBuilder()->setLayout('backend');
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $product = $this->Products->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagearray = $this->request->getData('productimage');
            if (!empty($imagearray['tmp_name'])) {
                $image_name = $this->addimage($imagearray);
            }
            else{
                $image_name = $product->productimage;
            }
            $product = $this->Products->patchEntity($product, $this->request->getData());
           
            $product->productimage = $image_name;
          
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $this->set(compact('product'));
        $this->viewBuilder()->setLayout('backend');
    }

    //function for adding image to a property
    public function addimage($imagearray) {
        $folder_upload = "projectimg/";
        $extension = array("jpeg", "jpg", "png", "gif");
        if (empty($imagearray['tmp_name'])) {
            return;
        }
        //$message = " ";
        $size = \getimagesize($imagearray['tmp_name']);
        // $mimetype = stripslashes($size['mime']); 
        if ((empty($size) || ($size[0] === 0) || ($size[1] === 0))) {
            throw new \Exception('This is unacceptable!. image must be of type : gif, jpeg, png or jpg and less than 2mb.');
        }
        $finfo = new \finfo(FILEINFO_MIME_TYPE);
//     //$filename = "company_staff_ids/".$staff_id;
        $file_type = $finfo->file(h($imagearray['tmp_name']), FILEINFO_MIME_TYPE);
//    
//    echo $file_type; exit;
        if (!(($file_type == "image/gif") || ($file_type == "image/png") || ($file_type == "image/jpeg") ||
                ($file_type == "image/pjpeg") || ($file_type == "image/x-png"))) {
            throw new \Exception('This is unacceptable!. image must be of type : gif, jpeg, png or jpg and less than 2mb .');
        }

        $file_name = $imagearray['name'];
        $ext = pathinfo($file_name, PATHINFO_EXTENSION);

        if (in_array($ext, $extension)) {
            $file_name = md5(uniqid($imagearray['name'], true)) . time();

            if (!file_exists($folder_upload . $file_name . '.' . $ext)) {
                $file_name = $file_name . '.' . $ext;
                move_uploaded_file($imagearray["tmp_name"], $folder_upload . $file_name);

                chmod($folder_upload . $file_name, 0644);
                return $message = $file_name;
            } else {
                $filename = basename($file_name, $ext);
                $newFileName = crypt($filename . time()) . "." . $ext;
                // echo $file_name; exit;
                move_uploaded_file($imagearray["tmp_name"], $folder_upload . $newFileName);
                chmod($folder_upload . $newFileName, 0644);
                return $message = $file_name;
            }
        } else {
            return $message = 'Unable to upload image, please ensure you are uploading a jpg,png,gif or Jpeg file. ';
            // debug(json_encode( $error, JSON_PRETTY_PRINT)); exit;
        }


        return $message = "images upload successful";
    }

    
    
    //functionn for deleting a file
    public function deletefile($filename){
         $folder_upload = "projectimg/";
         if (file_exists($folder_upload . $filename)) {
             unlink($folder_upload. $filename);
             return;
             }
             return;
    }

        /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->deletefile($product->productimage);
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    // allow unrestricted pages
    public function beforeFilter(Event $event) {
        $this->Auth->allow(['index','productdetails','productlist','proposal']);
        // $this->Security->config('unlockedActions', ['postnews', 'addimage', 'editnews']);
    }

}
