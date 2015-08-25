<?php
App::uses('AppController', 'Controller');
App::uses('Product', 'Model');
App::uses('User', 'Model');
App::uses('Employee', 'Model');
App::uses('Monitor', 'Model');
App::uses('Mouse', 'Model');
App::uses('Keyboard', 'Model');
App::uses('Systemunit', 'Model');
App::uses('Videocard', 'Model');
App::uses('Headset', 'Model');
App::uses('Speaker', 'Model');
App::uses('Up', 'Model');
App::uses('Inventory', 'Model');
App::uses('Alert', 'lib');


class MousesController extends AppController {


  public $uses = array('Product', 'User', 'Employee', 'Monitor', 'Mouse','Keyboard','Systemunit', 'Videocard', 'Headset', 'Speaker', 'Up', 'Inventory');
	public $helpers = array('Html', 'Form');

	public $components = array('Session', 'Paginator');

 public function beforeFilter(){

     parent::beforeFilter();
     $this->alert = new Alert();
     }

  public function index() {

        
        $all = $this->Mouse->find('all');
        $number= count($all);
        $this->Set('allMouses', $number);
        

         $this->Paginator->settings = array( 'limit' => 10);

    // similar to findAll(), but fetches paged results
    $data = $this->Paginator->paginate('Mouse');
    $this->set('mouses', $data);





}


public function add() {


    $this->autoRender = false;

        if ($this->request->is('post')) {

     $accept = $this->request->data;

     if (empty($accept['mspropertyno']) || empty($accept['msdescription']) || empty($accept['msstatus']) ||
             empty($accept['mstype']) || empty($accept['msavailability']) ) {
   $this->Session->setFlash($this->alert->danger('All fields must have values.'),'default', array(), 'mouse_error');   
          $this->redirect($this->referer());
     }

     else{

                $checkExist = $this->Mouse->find('first',
                array(
                    'fields' => 'mspropertyno',
                    'conditions' => array(
                        'mspropertyno' => $accept['mspropertyno']
                        )
                    )
                );

                if($checkExist){

                    $this->Session->setFlash($this->alert->danger('Update failed. Mouse Property no. already exist.'),'default', array(), 'mouse');   
                    
                } else{

                    $data = array(
                    'Mouse' => array(
                        'mspropertyno' => $accept['mspropertyno'],
                        'msdescription' => $accept['msdescription'],
                        'msstatus' => $accept['msstatus'],
                        'mstype' => $accept['mstype'],
                        'msavailability' => $accept['msavailability']
                    
                     )
             );
    $this->Mouse->create($data);
    $this->Mouse->save($data);
    $this->Session->setFlash($this->alert->success('Sucessfully added.'), 'default', array(), 'added');

        

         }

     $this->redirect($this->referer());
            exit();
      
      


        }
       

    


}

}

public function edit() {
  $this->autoRender = false;
  
        if ($this->request->is('post')) {
            
            $data = $this->request->data;

            if(empty($data['mspropertyno']) || empty($data['msdescription']) || empty($data['msstatus']) ||
             empty($data['mstype']) || empty($data['msavailability']) ) {

                $this->Session->setFlash($this->alert->danger('All fields must have values.'),'default', array(), 'mouse');   
            }else{
             $checkExist = $this->Mouse->find('first',
                   array(
                    'fields' => 'mspropertyno',
                    'conditions' => array(
                      'mspropertyno' => $data['mspropertyno']
                      )
                    )
                  );

              if($checkExist){
                
                $this->Session->setFlash($this->alert->danger('Update failed. Mouse Property No. already exist.'),'default', array(), 'mouse_error');   
                
                 }else{

                      $prepareData = array(
                        'Mouse' => array(
                            'mspropertyno' => $data['mspropertyno'],
                            'msdescription' => $data['msdescription'],
                            'msstatus' => $data['msstatus'],
                            'mstype' => $data['mstype'],
                            'msavailability' => $data['msavailability']

                        )
                    );
                    $this->Mouse->id = $data['id'];
                    $this->Mouse->save($prepareData);
                    $this->Session->setFlash($this->alert->success('Update Success.'), 'default', array(), 'good');
                   }
  

               } 
                

            $this->redirect($this->referer());
            exit();


        }
}
public function delete() {
	$this->autoRender = false;
	$id = $this->request->data['id'];
	
	if ($this->Mouse->delete($id)) {
	$this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Successfully deleted.</div>', 'default', array(), 'good');
		return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('Could not remove info'));
	$this->redirect($this->referer());
}





}