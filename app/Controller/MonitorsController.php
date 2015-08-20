<?php
App::uses('AppController', 'Controller');
App::uses('Product', 'Model');
App::uses('User', 'Model');
App::uses('Employee', 'Model');
App::uses('Monitor', 'Model');


class MonitorsController extends AppController {



	public $uses = array('Product', 'User', 'Employee', 'Monitor');

	public $helpers = array('Html', 'Form');

	public $components = array('Session', 'Paginator');


	public function index() {

        

		if ($this->request->is('post')) {
		$this->Monitor->create();
		if ($this->Monitor->save($this->request->data)) {
			$this->Session->setFlash(__('New monitor added'));
			//return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Could not add monitor'));
	}

    $this->Paginator->settings = array( 'limit' => 10);

    // similar to findAll(), but fetches paged results
    $data = $this->Paginator->paginate('Monitor');
    $this->set('monitors', $data);
}

public function add() {
    $this->autoRender = false;
        if ($this->request->is('post')) {
     $accept = $this->request->data;
     $data = array(
   'Monitor' => array(
            'mopropertyno' => $accept['mopropertyno'],
            'modescription' => $accept['modescription'],
            'mostatus' => $accept['mostatus'],
              'motype' => $accept['motype'],
            'moavailability' => $accept['moavailability']
            
             )
             );
    $this->Monitor->create($data);
    $this->Monitor->save($data);
    
     
          $this->redirect(array('action' => 'index'));



        }
        $this->Session->setFlash(__('Could not register user'));

    


}



public function edit() {
	$this->autoRender = false;
	
        if ($this->request->is('post')) {
            
            $data = $this->request->data;

            $prepareData = array(
                'Monitor' => array(
                    'mopropertyno' => $data['mopropertyno'],
                    'modescription' => $data['modescription'],
                    'mostatus' => $data['mostatus'],
                    'motype' => $data['motype'],
                    'moavailability' => $data['moavailability']
                             )
            );
            $this->Monitor->id = $data['id'];
            $this->Monitor->save($prepareData);

           
            $this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Update Success.</div> ', 'default', array(), 'good');
            $this->redirect($this->referer());
            exit();


}
}
public function delete() {
	$this->autoRender = false;
	$id = $this->request->data['id'];
	
	if ($this->Monitor->delete($id)) {
	$this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Successfully deleted.</div>', 'default', array(), 'good');
		return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('Could not remove monitor'));
	$this->redirect($this->referer());
}





}