<?php
App::uses('AppController', 'Controller');
App::uses('Product', 'Model');
App::uses('User', 'Model');
App::uses('Employee', 'Model');

class ProductsController extends AppController {



	public $uses = array('Product', 'User', 'Employee', 'Gadget');

	public $helpers = array('Html', 'Form');

	public $components = array('Session', 'Paginator');

	


	public function index() {
		 $this->Paginator->settings = array( 'limit' => 5);

    // similar to findAll(), but fetches paged results
    $data = $this->Paginator->paginate('Product');
    $this->set('products', $data);
}

public function add() {
		if ($this->request->is('post')) {
		$this->Product->create();
		if ($this->Product->save($this->request->data)) {
			$this->Session->setFlash(__('New product added'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Could not add product'));
	}


}

public function addemp() {
	$this->autoRender = false;

		if ($this->request->is('post')) {
		$this->User->create();

				if ($this->User->save($this->request->data)) {
			$this->Session->setFlash(__('New product added'));
			$this->redirect($this->referer());
		}
		$this->Session->setFlash(__('Could not add product'));
	}


}




public function edit() {
	$this->autoRender = false;
	
        if ($this->request->is('post')) {
            
            $data = $this->request->data;

            $prepareData = array(
                'Product' => array(
                    'name' => $data['name'],
                    'details' => $data['details'],
                    'available' => $data['available']
                )
            );
            $this->Product->id = $data['id'];
            $this->Product->save($prepareData);

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
	
	if ($this->Product->delete($id)) {
	$this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Successfully deleted.</div>', 'default', array(), 'good');
		return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('Could not remove product'));
	$this->redirect($this->referer());
}


}