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
App::uses('Inventory', 'Model');

class  InventorysController extends AppController {



    public $uses = array('Product', 'User', 'Employee', 'Monitor', 'Mouse','Keyboard','Systemunit', 'Videocard', 'Inventory');

    public $helpers = array('Html', 'Form');

    public $components = array('Session', 'Paginator');


    public function index() {

        $data = $this->Inventory->find('all');  
  //  pr($data);
 // die();


        if ($this->request->is('post')) {
        $this->Inventory->create();
        if ($this->Inventory->save($this->request->data)) {
            $this->Session->setFlash(__('New system unit added'));
            //return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Could not add video card'));
    }

    $this->Paginator->settings = array( 'limit' => 10);

    // similar to findAll(), but fetches paged results
   $data = $this->Paginator->paginate('Inventory');
    $this->set('inventorys', $data);
}

public function add() {
    $this->autoRender = false;


//$try = $this->Inventory->find('all');

 //  pr($try);
  //  die();

 
        if ($this->request->is('post')) {
     $accept = $this->request->data;
     $data = array(
   'Inventory' => array(
            'employee_id' => $accept['employee_id'],
            'systemunit_id' => $accept['systemunit_id'],
            'monitor_id' => $accept['monitor_id'],
            'videocard_id' => $accept['videocard_id'],
            'keyboard_id' => $accept['keyboard_id'],
            'headeset_id' => $accept['headeset_id'],
            'speaker_id' => $accept['speaker_id'],
            'ups_id' => $accept['ups_id'],
            'os_id' => $accept['os_id'],
            'pcosserialno' => $accept['pcosserialno'],
            'pcadditionalinfo' => $accept['pcadditionalinfo'],
            'pcstatus' => $accept['pcstatus'],
            'pctype' => $accept['pctype'],
            'pcavailability' => $accept['pcavailability'],
            'pcreceivedate' => $accept['pcreceivedate']
            
             )
             );
    $this->Inventory->create($data);
    $this->Inventory->save($data);
    
     
          $this->redirect(array('action' => 'index'));



        }
        $this->Session->setFlash(__('Could not add info'));

    


}



public function edit() {


	$this->autoRender = false;
	
        if ($this->request->is('post')) {
            
             $accept = $this->request->data;

            $prepareData = array(
                'Inventory' => array(
             'employee_id' => $accept['employee_id'],
            'systemunit_id' => $accept['systemunit_id'],
            'monitor_id' => $accept['monitor_id'],
            'videocard_id' => $accept['videocard_id'],
            'keyboard_id' => $accept['keyboard_id'],
            'headeset_id' => $accept['headeset_id'],
            'speaker_id' => $accept['speaker_id'],
            'ups_id' => $accept['ups_id'],
            'os_id' => $accept['os_id'],
            'pcosserialno' => $accept['pcosserialno'],
            'pcadditionalinfo' => $accept['pcadditionalinfo'],
            'pcstatus' => $accept['pcstatus'],
            'pctype' => $accept['pctype'],
            'pcavailability' => $accept['pcavailability'],
            'pcreceivedate' => $accept['pcreceivedate']
                             )
            );
            $this->Inventory->id = $accept['id'];
            $this->Inventory->save($prepareData);

           
            $this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Update Success.</div> ', 'default', array(), 'good');
            $this->redirect($this->referer());
            exit();


}
}
public function delete() {
	$this->autoRender = false;
	$id = $this->request->data['id'];
	
	if ($this->Inventory->delete($id)) {
	$this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Successfully deleted.</div>', 'default', array(), 'good');
		return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('Could not remove info'));
	$this->redirect($this->referer());
}





}