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



class KeyboardsController extends AppController {



     public $uses = array('Product', 'User', 'Employee', 'Monitor', 'Mouse','Keyboard','Systemunit', 'Videocard', 'Inventory');
	public $helpers = array('Html', 'Form');

	public $components = array('Session', 'Paginator');


	public function index() {



		if ($this->request->is('post')) {
		$this->Keyboard->create();
		if ($this->Keyboard->save($this->request->data)) {
			$this->Session->setFlash(__('New keyboard added'));
			//return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Could not add keyboard'));
	}

    $this->Paginator->settings = array( 'limit' => 10);

    // similar to findAll(), but fetches paged results
    $data = $this->Paginator->paginate('Keyboard');
    $this->set('keyboards', $data);
}

public function add() {
    $this->autoRender = false;
        if ($this->request->is('post')) {
     $accept = $this->request->data;
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
    
     
          $this->redirect(array('action' => 'index'));



        }
        $this->Session->setFlash(__('Could not add info'));

    


}



public function edit() {
	$this->autoRender = false;
	
        if ($this->request->is('post')) {
            
            $data = $this->request->data;

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

           
            $this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Update Success.</div> ', 'default', array(), 'good');
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