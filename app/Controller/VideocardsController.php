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


class VideocardsController extends AppController {



       public $uses = array('Product', 'User', 'Employee', 'Monitor', 'Mouse','Keyboard','Systemunit', 'Videocard', 'Inventory');

    public $helpers = array('Html', 'Form');

    public $components = array('Session', 'Paginator');


    public function index() {

        

        if ($this->request->is('post')) {
        $this->Videocard->create();
        if ($this->Videocard->save($this->request->data)) {
            $this->Session->setFlash(__('New system unit added'));
            //return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Could not add video card'));
    }

    $this->Paginator->settings = array( 'limit' => 10);

    // similar to findAll(), but fetches paged results
    $data = $this->Paginator->paginate('Videocard');
    $this->set('videocards', $data);
}

public function add() {
    $this->autoRender = false;
        if ($this->request->is('post')) {
     $accept = $this->request->data;
     $data = array(
   'Videocard' => array(
            'vcpropertyno' => $accept['vcpropertyno'],
            'vcdescription' => $accept['vcdescription'],
            'vcstatus' => $accept['vcstatus'],
            'vctype' => $accept['vctype'],
            'vcavailability' => $accept['vcavailability']
            
             )
             );
    $this->Videocard->create($data);
    $this->Videocard->save($data);
    
     
          $this->redirect(array('action' => 'index'));



        }
        $this->Session->setFlash(__('Could not add info'));

    


}



public function edit() {
	$this->autoRender = false;
	
        if ($this->request->is('post')) {
            
            $data = $this->request->data;

            $prepareData = array(
                'Videocard' => array(
                    'vcpropertyno' => $data['vcpropertyno'],
                    'vcdescription' => $data['vcdescription'],
                    'vcstatus' => $data['vcstatus'],
                    'vctype' => $data['vctype'],
                    'vcavailability' => $data['vcavailability']
                             )
            );
            $this->Videocard->id = $data['id'];
            $this->Videocard->save($prepareData);

           
            $this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Update Success.</div> ', 'default', array(), 'good');
            $this->redirect($this->referer());
            exit();


}
}
public function delete() {
	$this->autoRender = false;
	$id = $this->request->data['id'];
	
	if ($this->Videocard->delete($id)) {
	$this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Successfully deleted.</div>', 'default', array(), 'good');
		return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('Could not remove info'));
	$this->redirect($this->referer());
}





}