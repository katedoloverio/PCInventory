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

class HeadsetsController extends AppController {


    public $uses = array('Product', 'User', 'Employee', 'Monitor', 'Mouse','Keyboard','Systemunit', 'Videocard', 'Headset', 'Speaker', 'Up','Inventory');

	public $helpers = array('Html', 'Form');

	public $components = array('Session', 'Paginator');




    public function beforeFilter(){

     parent::beforeFilter();
     $this->alert = new Alert();
     }

	public function index() {

        
        $all = $this->Headset->find('all');
        $number= count($all);
        $this->Set('allHeadsets', $number);
        

         $this->Paginator->settings = array( 'limit' => 10);

    // similar to findAll(), but fetches paged results
    $data = $this->Paginator->paginate('Headset');
    $this->set('headsets', $data);





}

public function add() {


    $this->autoRender = false;

        if ($this->request->is('post')) {

     $accept = $this->request->data;

     if (empty($accept['hspropertyno']) || empty($accept['hsdescription']) || empty($accept['hsstatus']) ||
             empty($accept['hstype']) || empty($accept['hsavailability']) ) {
   $this->Session->setFlash($this->alert->danger('All fields must have values.'),'default', array(), 'headset_error');   
          $this->redirect($this->referer());
     }

     else{

                $checkExist = $this->Headset->find('first',
                array(
                    'fields' => 'hspropertyno',
                    'conditions' => array(
                        'hspropertyno' => $accept['hspropertyno']
                        )
                    )
                );

                if($checkExist){

                    $this->Session->setFlash($this->alert->danger('Update failed. Headset Property no. already exist.'),'default', array(), 'headset');   
                    
                } else{

                    $data = array(
                    'Headset' => array(
                        'hspropertyno' => $accept['hspropertyno'],
                        'hsdescription' => $accept['hsdescription'],
                        'hsstatus' => $accept['hsstatus'],
                        'hstype' => $accept['hstype'],
                        'hsavailability' => $accept['hsavailability']
                    
                     )
             );
    $this->Headset->create($data);
    $this->Headset->save($data);
    $this->Session->setFlash($this->alert->success('Sucessfully added.'), 'default', array(), 'addeds');

        

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

            if(empty($data['hspropertyno']) || empty($data['hsdescription']) || empty($data['hsstatus']) ||
             empty($data['hstype']) || empty($data['hsavailability']) ) {

                $this->Session->setFlash($this->alert->danger('All fields must have values.'),'default', array(), 'headset_error');   
            }else{
             $checkExist = $this->Headset->find('first',
                   array(
                    'fields' => 'hspropertyno',
                    'conditions' => array(
                      'hspropertyno' => $data['hspropertyno']
                      )
                    )
                  );

              if($checkExist){
                
                $this->Session->setFlash($this->alert->danger('Update failed. Headset Property No. already exist.'),'default', array(), 'headset_error');   
                
                 }else{

                      $prepareData = array(
                        'Headset' => array(
                            'hspropertyno' => $data['hspropertyno'],
                            'hsdescription' => $data['hsdescription'],
                            'hsstatus' => $data['hsstatus'],
                            'hstype' => $data['hstype'],
                            'hsavailability' => $data['hsavailability']

                        )
                    );
                    $this->Headset->id = $data['id'];
                    $this->Headset->save($prepareData);
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
	
	if ($this->Headset->delete($id)) {
	$this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Successfully deleted.</div>', 'default', array(), 'good');
		return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('Could not remove info'));
	$this->redirect($this->referer());
}





}