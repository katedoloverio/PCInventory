<?php
App::uses('AppController', 'Controller');
App::uses('Product', 'Model');
App::uses('User', 'Model');
App::uses('Employee', 'Model');
App::uses('Monitor', 'Model');
App::uses('Mouse', 'Model');

class MousesController extends AppController {



	public $uses = array('Product', 'User', 'Employee', 'Monitor', 'Mouse');

	public $helpers = array('Html', 'Form');

	public $components = array('Session', 'Paginator');


	public function index() {

        

		if ($this->request->is('post')) {
		$this->Mouse->create();
		if ($this->Mouse->save($this->request->data)) {
			$this->Session->setFlash(__('New mouse added'));
			//return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Could not add mouse'));
	}

    $this->Paginator->settings = array( 'limit' => 10);

    // similar to findAll(), but fetches paged results
    $data = $this->Paginator->paginate('Mouse');
    $this->set('mouses', $data);
}

public function add() {
    $this->autoRender = false;
        if ($this->request->is('post')) {
     $accept = $this->request->data;
     $data = array(
   'Mouse' => array(
            'mspropertyno' => $accept['mspropertyno'],
            'msdescription' => $accept['msdescription'],
            'msstatus' => $accept['msstatus'],
            'mstype' => $accept['mstype'],
            'msavailability' => $accept['msavailability']
            
             )
             );
    $this->Mouse->create($data);
    $this->Mouse->save($data);
    
     
          $this->redirect(array('action' => 'index'));



        }
        $this->Session->setFlash(__('Could not add info'));

    


}



public function edit() {
	$this->autoRender = false;
	
        if ($this->request->is('post')) {
            
            $data = $this->request->data;

            $prepareData = array(
                'Mouse' => array(
                    'mspropertyno' => $data['mspropertyno'],
                    'msdescription' => $data['msdescription'],
                    'msstatus' => $data['msstatus'],
                    'mstype' => $data['mstype'],
                    'msavailability' => $data['msavailability']
                             )
            );
            $this->Mouse->id = $data['id'];
            $this->Mouse->save($prepareData);

           
            $this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Update Success.</div> ', 'default', array(), 'good');
            $this->redirect($this->referer());
            exit();


}
}
public function delete() {
	$this->autoRender = false;
	$id = $this->request->data['id'];
	
	if ($this->Mouse->delete($id)) {
	$this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Successfully deleted.</div>', 'default', array(), 'good');
		return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('Could not remove info'));
	$this->redirect($this->referer());
}





}