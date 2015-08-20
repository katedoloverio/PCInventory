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
        $this->Inventorys->create();
        if ($this->Inventorys->save($this->request->data)) {
            $this->Session->setFlash(__('New system unit added'));
            //return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Could not add video card'));
    }

    $this->Paginator->settings = array( 'limit' => 10);

    // similar to findAll(), but fetches paged results
    $data = $this->Paginator->paginate('Inventorys');
    $this->set('inventorys', $data);
}

public function add() {
    $this->autoRender = false;
        if ($this->request->is('post')) {
     $accept = $this->request->data;
     $data = array(
   'Inventory' => array(
            'empid' => $accept['empid'],
            'pcsystemunit' => $accept['pcsystemunit'],
            'pcmonitor' => $accept['pcmonitor'],
            'pcvideocard' => $accept['pcvideocard'],
            'pckeyboard' => $accept['pckeyboard'],
            'pcheadset' => $accept['pcheadset'],
            'pcvideocard' => $accept['pcvideocard'],
            'pcspeakers' => $accept['pcspeakers'],
            'pcvideocard' => $accept['pcvideocard'],
            'pcups' => $accept['pcups'],
            'pcos' => $accept['pcos'],
            'pcosserialno' => $accept['pcosserialno'],
            'pcadditionalinfo' => $accept['pcadditionalinfo'],
            'pcstatus' => $accept['pcstatus'],
            'pcavailability' => $accept['pcavailability'],
            'pcreceivedate' => $accept['pcreceivedate']
            
             )
             );
    $this->Inventory->create($data);
    $this->Inventory->save($data);
    
     
          $this->redirect(array('action' => 'index'));



        }
        $this->Session->setFlash(__('Could not add info'));

    


}



public function edit() {
	$this->autoRender = false;
	
        if ($this->request->is('post')) {
            
             $accept = $this->request->data;

            $prepareData = array(
                'Inventory' => array(
                    'empid' => $accept['empid'],
            'pcsystemunit' => $accept['pcsystemunit'],
            'pcmonitor' => $accept['pcmonitor'],
            'pcvideocard' => $accept['pcvideocard'],
            'pckeyboard' => $accept['pckeyboard'],
            'pcheadset' => $accept['pcheadset'],
            'pcvideocard' => $accept['pcvideocard'],
            'pcspeakers' => $accept['pcspeakers'],
            'pcvideocard' => $accept['pcvideocard'],
            'pcups' => $accept['pcups'],
            'pcos' => $accept['pcos'],
            'pcosserialno' => $accept['pcosserialno'],
            'pcadditionalinfo' => $accept['pcadditionalinfo'],
            'pcstatus' => $accept['pcstatus'],
            'pcavailability' => $accept['pcavailability'],
            'pcreceivedate' => $accept['pcreceivedate']
                             )
            );
            $this->Inventory->id = $accept['id'];
            $this->Inventory->save($prepareData);

           
            $this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Update Success.</div> ', 'default', array(), 'good');
            $this->redirect($this->referer());
            exit();


}
}
public function delete() {
	$this->autoRender = false;
	$id = $this->request->data['id'];
	
	if ($this->Inventory->delete($id)) {
	$this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Successfully deleted.</div>', 'default', array(), 'good');
		return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('Could not remove info'));
	$this->redirect($this->referer());
}





}