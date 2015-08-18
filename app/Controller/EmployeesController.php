<?php
App::uses('AppController', 'Controller');
App::uses('Product', 'Model');
App::uses('User', 'Model');
App::uses('Employee', 'Model');


class EmployeesController extends AppController {



	public $uses = array('Product', 'User', 'Employee');

	public $helpers = array('Html', 'Form');

	public $components = array('Session', 'Paginator');


	public function index() {
		if ($this->request->is('post')) {
		$this->Employee->create();
		if ($this->Employee->save($this->request->data)) {
			$this->Session->setFlash(__('New employee added'));
			//return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Could not add employee'));
	}

    $this->Paginator->settings = array( 'limit' => 10);

    // similar to findAll(), but fetches paged results
    $data = $this->Paginator->paginate('Employee');
    $this->set('employees', $data);
}

public function add() {
		if ($this->request->is('post')) {
		$this->Employee->create();
		if ($this->Employee->save($this->request->data)) {
			$this->Session->setFlash(__('New employee added'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Could not add employee'));
	}


}

public function addemp() {
	$this->autoRender = false;

		if ($this->request->is('post')) {
		$this->Employee->create();

				if ($this->Employee->save($this->request->data)) {
			$this->Session->setFlash(__('New employee added'));
			$this->redirect($this->referer());
		}
		$this->Session->setFlash(__('Could not add employee'));
	}


}




public function edit() {
	$this->autoRender = false;
	
        if ($this->request->is('post')) {
            
            $data = $this->request->data;

            $prepareData = array(
                'Employee' => array(
                    'empfirstname' => $data['empfirstname'],
                    'emplastname' => $data['emplastname'],
                    'empcompanyid' => $data['empcompanyid'],
                    'empphoto' => $data['empphoto'],
                    'empstatus' => $data['empstatus']
                             )
            );
            $this->Employee->id = $data['id'];
            $this->Employee->save($prepareData);

            $this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Update Success.</div> ', 'default', array(), 'good');
            $this->redirect($this->referer());
            exit();


}
}
public function delete() {
	$this->autoRender = false;
	$id = $this->request->data['id'];
	
	if ($this->Employee->delete($id)) {
	$this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Successfully deleted.</div>', 'default', array(), 'good');
		return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('Could not remove employee'));
	$this->redirect($this->referer());
}


}