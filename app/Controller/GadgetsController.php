<?php
App::uses('AppController', 'Controller');
App::uses('Product', 'Model');
App::uses('User', 'Model');
App::uses('Employee', 'Model');
App::uses('Gadget', 'Model');


class GadgetsController extends AppController {



	public $uses = array('Product', 'User', 'Employee', 'Gadget');

	public $helpers = array('Html', 'Form');

	public $components = array('Session', 'Paginator');

	


	public function index() {
		 $this->Paginator->settings = array( 'limit' => 5);

    // similar to findAll(), but fetches paged results
    $data = $this->Paginator->paginate('Gadget');
    $this->set('gadgets', $data);
}

public function addgdgt() {
		if ($this->request->is('post')) {
		$this->Gadget->create();
		if ($this->Gadget->save($this->request->data)) {
			$this->Session->setFlash(__('New gadget added'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Could not add gadget'));
	}


}

public function add() {
	$this->autoRender = false;

		if ($this->request->is('post')) {
		$this->Gadget->create();

				if ($this->Gadget->save($this->request->data)) {
			$this->Session->setFlash(__('New gadget added'));
			$this->redirect($this->referer());
		}
		$this->Session->setFlash(__('Could not add gadget'));
	}


}




public function edit() {
	$this->autoRender = false;
	
        if ($this->request->is('post')) {
            
            $data = $this->request->data;

            $prepareData = array(
                'Gadget' => array(
                    'ggpropertyno' => $data['ggpropertyno'],
                    'ggdescription' => $data['ggdescription'],
                    'ggserial' => $data['ggserial'],
                    'ggstatus' => $data['ggstatus'],
                    'ggavailabiliy' => $data['ggavailabiliy']
                )
            );
            $this->Gadget->id = $data['id'];
            $this->Gadget->save($prepareData);

            $this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Update Success.</div>', 'default', array(), 'good');
            $this->redirect($this->referer());
            exit();


}
}
public function delete() {
	$this->autoRender = false;
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}

	$id = $this->request->data['id'];
	
	if ($this->Gadget->delete($id)) {
	$this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Successfully deleted.</div>', 'default', array(), 'good');
		return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('Could not remove gadget'));
	$this->redirect($this->referer());
}


}