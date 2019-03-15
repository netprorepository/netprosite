<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Partners Controller
 *
 * @property \App\Model\Table\PartnersTable $Partners
 *
 * @method \App\Model\Entity\Partner[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PartnersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $partners = $this->paginate($this->Partners);

        $this->set(compact('partners'));
        $this->viewBuilder()->setLayout('backend');
    }

    /**
     * View method
     *
     * @param string|null $id Partner id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $partner = $this->Partners->get($id, [
            'contain' => []
        ]);

        $this->set('partner', $partner);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $partner = $this->Partners->newEntity();
        if ($this->request->is('post')) {
             $imagearray = $this->request->getData('logoimg');
             if (!empty($imagearray['tmp_name'])) {
                $image_name = $this->addimage($imagearray);
            }
            else{
                $image_name =  $partner->logoimg;
            }
            $partner = $this->Partners->patchEntity($partner, $this->request->getData());
             $partner->logoimg = $image_name;
            if ($this->Partners->save($partner)) {
                $this->Flash->success(__('The partner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The partner could not be saved. Please, try again.'));
        }
        $this->set(compact('partner'));
        $this->viewBuilder()->setLayout('backend');
    }

    /**
     * Edit method
     *
     * @param string|null $id Partner id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $partner = $this->Partners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
                $imagearray = $this->request->getData('logoimg');
             if (!empty($imagearray['tmp_name'])) {
                $image_name = $this->addimage($imagearray);
            }
            else{
                $image_name =  $partner->logoimg;
            }
            $partner = $this->Partners->patchEntity($partner, $this->request->getData());
          
            $partner->logoimg = $image_name;
            if ($this->Partners->save($partner)) {
                $this->Flash->success(__('The partner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The partner could not be saved. Please, try again.'));
        }
        $this->set(compact('partner'));
        $this->viewBuilder()->setLayout('backend');
    }

    
    
       //handles image upload
    
    
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

            if (!file_exists( $folder_upload . $file_name . '.' . $ext)) {
                $file_name = $file_name . '.' . $ext;
                move_uploaded_file($imagearray["tmp_name"],  $folder_upload . $file_name);
               
                chmod( $folder_upload . $file_name, 0644);
                return $message = $file_name;
            } else {
                $filename = basename($file_name, $ext);
                $newFileName = crypt($filename . time()) . "." . $ext;
                // echo $file_name; exit;
                move_uploaded_file($imagearray["tmp_name"],  $folder_upload . $newFileName);
                chmod( $folder_upload . $newFileName, 0644);
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
     * @param string|null $id Partner id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $partner = $this->Partners->get($id);
        if ($this->Partners->delete($partner)) {
            $this->deletefile($partner->logoimg);
            $this->Flash->success(__('The partner has been deleted.'));
        } else {
            $this->Flash->error(__('The partner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
