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
App::uses('Ups', 'Model');
App::uses('Inventory', 'Model');


class SpeakersController extends AppController {


  public $uses = array('Product', 'User', 'Employee', 'Monitor', 'Mouse','Keyboard','Systemunit', 'Videocard', 'Headset', 'Speaker', 'Ups', 'Inventory');

	public $helpers = array('Html', 'Form');

	public $components = array('Session', 'Paginator');


	public function index() {

        

		if ($this->request->is('post')) {
		$this->Speaker->create();
		if ($this->Speaker->save($this->request->data)) {
			$this->Session->setFlash(__('New Speaker added'));
			//return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Could not add Speaker'));
	}

    $this->Paginator->settings = array( 'limit' => 10);

    // similar to findAll(), but fetches paged results
    $data = $this->Paginator->paginate('Speaker');
    $this->set('speakers', $data);
}

public function add() {
    $this->autoRender = false;
        if ($this->request->is('post')) {
     $accept = $this->request->data;
     $data = array(
   'Speaker' => array(
            'sppropertyno' => $accept['sppropertyno'],
            'spdescription' => $accept['spdescription'],
            'spstatus' => $accept['spstatus'],
            'sptype' => $accept['sptype'],
            'spavailability' => $accept['spavailability']
            
             )
             );
    $this->Speaker->create($data);
    $this->Speaker->save($data);
    
     
          $this->redirect(array('action' => 'index'));



        }
        $this->Session->setFlash(__('Could not add info'));

    


}



public function edit() {
	$this->autoRender = false;
	
        if ($this->request->is('post')) {
            
            $data = $this->request->data;

            $prepareData = array(
                'Speaker' => array(
                    'sppropertyno' => $data['sppropertyno'],
            'spdescription' => $data['spdescription'],
            'spstatus' => $data['spstatus'],
            'sptype' => $data['sptype'],
            'spavailability' => $data['spavailability']
                             )
            );
            $this->Speaker->id = $data['id'];
            $this->Speaker->save($prepareData);

           
            $this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Update Success.</div> ', 'default', array(), 'good');
            $this->redirect($this->referer());
            exit();


}
}
public function delete() {
	$this->autoRender = false;
	$id = $this->request->data['id'];
	
	if ($this->Speaker->delete($id)) {
	$this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Successfully deleted.</div>', 'default', array(), 'good');
		return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('Could not remove info'));
	$this->redirect($this->referer());
}





}