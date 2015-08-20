<?php
App::uses('AppController', 'Controller');
App::uses('Product', 'Model');
App::uses('User', 'Model');
App::uses('Employee', 'Model');
App::uses('Monitor', 'Model');
App::uses('Mouse', 'Model');
App::uses('Keyboard', 'Model');
App::uses('Systemunit', 'Model');

class SystemunitsController extends AppController {



	public $uses = array('Product', 'User', 'Employee', 'Monitor', 'Mouse','Keyboard','Systemunit');

	public $helpers = array('Html', 'Form');

	public $components = array('Session', 'Paginator');


	public function index() {

        

		if ($this->request->is('post')) {
		$this->Systemunit->create();
		if ($this->Systemunit->save($this->request->data)) {
			$this->Session->setFlash(__('New system unit added'));
			//return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Could not add system unit'));
	}

    $this->Paginator->settings = array( 'limit' => 10);

    // similar to findAll(), but fetches paged results
    $data = $this->Paginator->paginate('Systemunit');
    $this->set('systemunits', $data);
}

public function add() {
    $this->autoRender = false;
        if ($this->request->is('post')) {
     $accept = $this->request->data;
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
    
     
          $this->redirect(array('action' => 'index'));



        }
        $this->Session->setFlash(__('Could not add info'));

    


}



public function edit() {
	$this->autoRender = false;
	
        if ($this->request->is('post')) {
            
            $data = $this->request->data;

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

           
            $this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Update Success.</div> ', 'default', array(), 'good');
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