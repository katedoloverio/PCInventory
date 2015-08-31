<?php
App::uses('AppController', 'Controller');
App::uses('Product', 'Model');
App::uses('User', 'Model');
App::uses('Employee', 'Model');
App::uses('Gadget', 'Model');
App::uses('Alert', 'lib');


class GadgetsController extends AppController {


	public $uses = array('Product', 'User', 'Employee', 'Gadget');

	public $helpers = array('Html', 'Form');

	public $components = array('Session', 'Paginator');

	



    public function beforeFilter(){

    parent::beforeFilter();
	$this->alert = new Alert();
	$this->Auth->allow();

    }

	public function index() {


        $all = $this->Gadget->find('all');
        $number= count($all);
        $this->Set('allGadgets', $number);
        

         $this->Paginator->settings = array( 'limit' => 5);

    // similar to findAll(), but fetches paged results
    $data = $this->Paginator->paginate('Gadget');
    $this->set('gadgets', $data);
	}


	

	public function add() {
		$this->autoRender = false;

			if ($this->request->is('post')) {
			$this->Gadget->create();


			if ($this->Gadget->save($this->request->data)) {

				  $this->Session->setFlash($this->alert->success('Sucessfully added.'), 'default', array(), 'added');
				$this->redirect($this->referer());
			}
			$this->Session->setFlash(__('Could not add gadget'));
		}


	}




	public function edit() {
		$this->autoRender = false;
		
	        if ($this->request->is('post')) {
	            
	            $data = $this->request->data;

            if( empty($data['ggpropertyno']) || empty($data['ggdescription']) || empty($data['ggserial'])|| empty($data['ggstatus'])|| empty($data['ggavailability']) ) {

           	    $this->Session->setFlash($this->alert->danger('All fields must have values.'),'default', array(), 'error');   
            }
            
            else{

				$checkExist = $this->Gadget->find('first',
				array(
					'fields' => 'ggpropertyno',
					'conditions' => array(
						'ggpropertyno' => $data['ggpropertyno']
						)
					)
				);

				if($checkExist){
					$this->Session->setFlash($this->alert->danger('Gadget Property No. already exist.'),'default', array(), 'error');   
					
				} else{

	            	$prepareData = array(
	                'Gadget' => array(
	                    'ggpropertyno' => $data['ggpropertyno'],
	                    'ggdescription' => $data['ggdescription'],
	                    'ggserial' => $data['ggserial'],
	                    'ggstatus' => $data['ggstatus'],
	                    'ggavailability' => $data['ggavailability']

	                )
	            );
	            $this->Gadget->id = $data['id'];
	            $this->Gadget->save($prepareData);
	            $this->Session->setFlash($this->alert->success('Update Success.'), 'default', array(), 'good');
	            }
  

            } 
  			        



}
}
public function delete() {

        $this->autoRender = false;
         $id = $this->request->data['input'] ;
          $this->Gadget->delete($id);

      
}

	public function searchGadss(){

	//$this->autoRender = false;
     $searchInput = $this->request->data['input'];
    
 	 $match= $this->Gadget->find('all',
          array(
            'conditions' => array(
              'OR' =>array(
                'Gadget.ggpropertyno LIKE' => '%'. $searchInput. '%',
                'Gadget.ggdescription LIKE' => '%'. $searchInput. '%'
              
                )
              )
            )
          );

     $this->Set('showGadget', $match);
     

	}


	public function allGadgets(){
		$all = $this->Gadget->find('all');
		$number= count($all);
		$this->Set('allGadgets', $number);
		

		 $this->Paginator->settings = array( 'limit' => 5);

    $data = $this->Paginator->paginate('Gadget');
    $this->set('gadgets', $data);
	}

	
}