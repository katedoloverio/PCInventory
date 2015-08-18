<?php
App::uses('AppController', 'Controller');

class EmployeesController extends AppController {

	public function beforeFilter() {
	parent::beforeFilter();
	$this->Auth->allow();
}

public function register() {
	if ($this->request->is('post')) {
		$this->Employee->create();
		if ($this->Employee->save($this->request->data)) {
			$this->Session->setFlash(__('New epmloyee registered'));
			return $this->redirect(array('action' => 'login'));
		}
		$this->Session->setFlash(__('Could not register employee'));
	}
}

public function login() {


	  if($this->Session->check('Auth.Employee')){
   $this->redirect(array('controller' => 'employees', 'action' => 'hello'));  
  }
    if ($this->request->is('post')) {
    if ($this->Auth->login()) {
     $this->Session->write('name', $this->Session->read('Auth.Employee.name'));
     $this->redirect(array('controller' => 'products', 'action' => 'index'));
    } else {
     $this->Session->setFlash(__('Username or Password is invalid!'));
     
                }
}
}



public function logout() {
	return $this->redirect($this->Auth->logout());
}
public function hello() {
	}

	public function product() {
	}

}