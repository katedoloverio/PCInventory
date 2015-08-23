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


    $this->autoRender = false;
        if ($this->request->is('post')) {
     $accept = $this->request->data;
     if($accept['empfirstname']==""){
        $this->Session->setFlash('Required field');
     }else{

     $data = array(
   'Employee' => array(
            'empfirstname' => $accept['empfirstname'],
            'emplastname' => $accept['emplastname'],
            'empcompanyid' => $accept['empcompanyid'],
            'empphoto' => $accept['Employee']['empphoto']['name'],
            'empstatus' => $accept['empstatus']
            
             )
             );
    $this->Employee->create($data);
    $this->Employee->save($data);
    $path = WWW_ROOT . 'img/users/'.$accept['Employee']['empphoto']['name'];
    $upload = move_uploaded_file($accept['Employee']['empphoto']['tmp_name'], $path);

     
     }
          $this->redirect(array('action' => 'index'));



        }
        $this->Session->setFlash(__('Could not register user'));

    


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
                    'empphoto' => $data['Employee']['empphoto']['name'],
                    'empstatus' => $data['empstatus']
                             )
            );
            $this->Employee->id = $data['id'];
            $this->Employee->save($prepareData);

            $path = WWW_ROOT . 'img/users/'. $data['Employee']['empphoto']['name'];
            $upload = move_uploaded_file( $data['Employee']['empphoto']['tmp_name'], $path);

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