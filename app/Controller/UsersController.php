<?php
App::uses('AppController', 'Controller');
App::uses('Alert', 'lib');


class UsersController extends AppController {

	public function beforeFilter() {

	parent::beforeFilter();
	$this->alert = new Alert();
	$this->Auth->allow();
}

public function register() {
	if ($this->request->is('post'))

	 {
		$this->User->create();


		if ($this->User->save($this->request->data)) {



			$this->Session->setFlash(__('New user registered'));
			return $this->redirect(array('action' => 'login'));



		}
		$this->Session->setFlash(__('Could not register user'));
	}





}

public function login() {


	  if($this->Session->check('Auth.User')){
   $this->redirect(array('controller' => 'users', 'action' => 'hello'));  
  }
    if ($this->request->is('post')) {
    if ($this->Auth->login()) {
     $this->Session->write('name', $this->Session->read('Auth.User.name'));
     $this->redirect(array('controller' => 'employees', 'action' => 'index'));
    } else {
     $this->Session->setFlash($this->alert->danger('Username or Password is invalid!'));
     
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