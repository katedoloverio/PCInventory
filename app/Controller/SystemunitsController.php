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

class SystemunitsController extends AppController {



	  public $uses = array('Product', 'User', 'Employee', 'Monitor', 'Mouse','Keyboard','Systemunit', 'Videocard', 'Inventory');

	public $helpers = array('Html', 'Form');

	public $components = array('Session', 'Paginator');


    public function beforeFilter(){

     parent::beforeFilter();
     $this->alert = new Alert();
     }

    public function index() {

        
        $all = $this->Systemunit->find('all');
        $number= count($all);
        $this->Set('allSystemunits', $number);
        

         $this->Paginator->settings = array( 'limit' => 10);

    // similar to findAll(), but fetches paged results
    $data = $this->Paginator->paginate('Systemunit');
    $this->set('systemunits', $data);





}
public function add() {


    $this->autoRender = false;

        if ($this->request->is('post')) {

     $accept = $this->request->data;

     if (empty($accept['supropertyno']) || empty($accept['sudescription']) || empty($accept['sustatus']) ||
             empty($accept['sutype']) || empty($accept['suavailability']) ) {
   $this->Session->setFlash($this->alert->danger('All fields must have values.'),'default', array(), 'systemunit_error');   
          $this->redirect($this->referer());
     }

     else{

                $checkExist = $this->Systemunit->find('first',
                array(
                    'fields' => 'supropertyno',
                    'conditions' => array(
                        'supropertyno' => $accept['supropertyno']
                        )
                    )
                );

                if($checkExist){

                    $this->Session->setFlash($this->alert->danger('Update failed. System unit Property no. already exist.'),'default', array(), 'systemunit');   
                    
                } else{

                    $data = array(
                    'Systemunit' => array(
                        'supropertyno' => $accept['supropertyno'],
                        'sudescription' => $accept['sudescription'],
                        'sustatus' => $accept['sustatus'],
                        'sutype' => $accept['sutype'],
                        'suavailability' => $accept['suavailability']
                    
                     )
             );
    $this->Systemunit->create($data);
    $this->Systemunit->save($data);
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

        
            if(empty($data['supropertyno']) || empty($data['sudescription']) || empty($data['sustatus']) ||
             empty($data['sutype']) || empty($data['suavailability']) ) {

                $this->Session->setFlash($this->alert->danger('All fields must have values.'),'default', array(), 'systemunit_error');   
            }else{
             $checkExist = $this->Systemunit->find('first',
                   array(
                    'fields' => 'supropertyno',
                    'conditions' => array(
                      'supropertyno' => $data['supropertyno']
                      )
                    )
                  );

              if($checkExist){
                
                $this->Session->setFlash($this->alert->danger('Update failed. Systemunit Property No. already exist.'),'default', array(), 'systemunit_error');   
                
                 }else{

                      $prepareData = array(
                        'Systemunit' => array(
                            'supropertyno' => $data['supropertyno'],
                            'sudescription' => $data['sudescription'],
                            'sustatus' => $data['sustatus'],
                            'sutype' => $data['sutype'],
                            'suavailability' => $data['suavailability']

                        )
                    );
                    $this->Systemunit->id = $data['id'];
                    $this->Systemunit->save($prepareData);
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
	
	if ($this->Systemunit->delete($id)) {
	$this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Successfully deleted.</div>', 'default', array(), 'good');
		return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('Could not remove info'));
	$this->redirect($this->referer());
}





}