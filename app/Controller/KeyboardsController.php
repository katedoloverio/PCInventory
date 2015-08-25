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


class KeyboardsController extends AppController {


  public $uses = array('Product', 'User', 'Employee', 'Monitor', 'Mouse','Keyboard','Systemunit', 'Videocard', 'Inventory');
	
  public $helpers = array('Html', 'Form');

	public $components = array('Session', 'Paginator');


public function beforeFilter(){

     parent::beforeFilter();
     $this->alert = new Alert();
     }


	public function index() {



        $all = $this->Keyboard->find('all');
        $number= count($all);
        $this->Set('allKeyboards', $number);
        

         $this->Paginator->settings = array( 'limit' => 10);

    // similar to findAll(), but fetches paged results
    $data = $this->Paginator->paginate('Keyboard');
    $this->set('keyboards', $data);


}



public function add() {


    $this->autoRender = false;

        if ($this->request->is('post')) {

     $accept = $this->request->data;

     if (empty($accept['kbpropertyno']) || empty($accept['kbdescription']) || empty($accept['kbstatus']) ||
             empty($accept['kbtype']) || empty($accept['kbavailability']) ) {
   $this->Session->setFlash($this->alert->danger('All fields must have values.'),'default', array(), 'keyboard_error');   
          $this->redirect($this->referer());
     }

     else{

                $checkExist = $this->Keyboard->find('first',
                array(
                    'fields' => 'kbpropertyno',
                    'conditions' => array(
                        'kbpropertyno' => $accept['kbpropertyno']
                        )
                    )
                );

                if($checkExist){

                    $this->Session->setFlash($this->alert->danger('Update failed. Keyboard Property no. already exist.'),'default', array(), 'keyboard_error');   
                    
                } else{

                    $data = array(
                    'Keyboard' => array(
                        'kbpropertyno' => $accept['kbpropertyno'],
                        'kbdescription' => $accept['kbdescription'],
                        'kbstatus' => $accept['kbstatus'],
                        'kbtype' => $accept['kbtype'],
                        'kbavailability' => $accept['kbavailability']
                    
                     )
             );
    $this->Keyboard->create($data);
    $this->Keyboard->save($data);
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

            if(empty($data['kbpropertyno']) || empty($data['kbdescription']) || empty($data['kbstatus']) ||
             empty($data['kbtype']) || empty($data['kbavailability']) ) {

                $this->Session->setFlash($this->alert->danger('All fields must have values.'),'default', array(), 'keyboard_error');   
            }else{
             $checkExist = $this->Keyboard->find('first',
                   array(
                    'fields' => 'kbpropertyno',
                    'conditions' => array(
                      'kbpropertyno' => $data['kbpropertyno']
                      )
                    )
                  );

              if($checkExist){
                
                $this->Session->setFlash($this->alert->danger('Update failed. Headset Property No. already exist.'),'default', array(), 'keyboard_error');   
                
                 }else{

                      $prepareData = array(
                        'Keyboard' => array(
                            'kbpropertyno' => $data['kbpropertyno'],
                            'kbdescription' => $data['kbdescription'],
                            'kbstatus' => $data['kbstatus'],
                            'kbtype' => $data['kbtype'],
                            'kbavailability' => $data['kbavailability']

                        )
                    );
                    $this->Keyboard->id = $data['id'];
                    $this->Keyboard->save($prepareData);
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
	
	if ($this->Keyboard->delete($id)) {
	$this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Successfully deleted.</div>', 'default', array(), 'good');
		return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('Could not remove info'));
	$this->redirect($this->referer());
}





}