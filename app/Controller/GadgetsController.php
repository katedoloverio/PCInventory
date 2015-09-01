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

	   
	    $data = $this->Paginator->paginate('Gadget');
	    $this->set('gadgets', $data);
		}


	

	public function add() {


	    $this->autoRender = false;

	        if ($this->request->is('post')) {
	        $data = $this->request->data;
	     // pr($data);
	     // die();

	            if (empty($data['ggpropertyno']) || empty($data['ggdescription']) || empty($data['ggserial'])|| empty($data['ggstatus'])|| empty($data['ggavailability'])) {
	             

	              $this->Session->setFlash($this->alert->danger('All fields must have values.'),'default', array(), 'error');   
	                $this->redirect($this->referer());   
	                    
	        } else {

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
							 $this->redirect($this->referer());  
					} else {
	                    $prepareData = array(
	                    'Gadget' => array(
		                    'ggpropertyno' => $data['ggpropertyno'],
		                    'ggdescription' => $data['ggdescription'],
		                    'ggserial' => $data['ggserial'],
		                    'ggstatus' => $data['ggstatus'],
		                    'ggavailability' => $data['ggavailability']
	                     )
	             );
	                $this->Gadget->create($prepareData);
	            	$this->Gadget->save($prepareData);
	           		$this->Session->setFlash($this->alert->success('Successfully Added.'), 'default', array(), 'good');
	                }

	                 $this->redirect($this->referer());
	                  exit();
	              }
	     }

	}





	public function edit() {
		$this->autoRender = false;
		
	        if ($this->request->is('post')) {
	            
	            $data = $this->request->data;

            if( empty($data['ggpropertyno']) || empty($data['ggdescription']) || empty($data['ggserial'])|| empty($data['ggstatus'])|| empty($data['ggavailability']) ) {

           	    $this->Session->setFlash($this->alert->danger('All fields must have values.'),'default', array(), 'error');   
           	     $this->redirect($this->referer());
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
					 $this->redirect($this->referer());
					
				} else{

					($data['ggstatus']=='Working') ? $ggstat = 1 : $ggstat =2;
                    ($data['ggavailability']=='Available') ? $ggavail = 1 : $ggavail =2;



	            	$prepareData = array(
	                'Gadget' => array(
	                    'ggpropertyno' => $data['ggpropertyno'],
	                    'ggdescription' => $data['ggdescription'],
	                    'ggserial' => $data['ggserial'],
	                    'ggstatus' => $ggstat,
	                    'ggavailability' => $ggavail

	                )
	            );
	            $this->Gadget->id = $data['id'];
	            $this->Gadget->save($prepareData);
	            $this->Session->setFlash($this->alert->success('Update Success.'), 'default', array(), 'good');
	            }
  

            } 

            $this->redirect($this->referer());
            exit();
  			        
		}
}
	public function delete() {
		$this->autoRender = false;
		$id = $this->request->data['id'];
		
		if ($this->Gadget->delete($id)) {
		$this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Successfully deleted.</div>', 'default', array(), 'good');
			return $this->redirect(array('action' => 'index'));
		}
		$this->redirect($this->referer());
	}

	public function searchGadss(){

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


	

	public function viewAjax(){
    $this->autoRender = false;
    $query = $this->request->query;
    $content = "";
    $error = false;
    if (isset($query['gadgetId'])) {
      $gId = $query['gadgetId'];
      $gadget = $this->Gadget->findById($gId);
      if ($gadget) {
        $error = false;
        $content = $gadget;
      } else {
        $error = true;
        $content = "no_gb";
      }
    } else {
      $error = true;
      $content = "no_id";
    }
    echo json_encode(array('error' => $error, 'content' => $content));
    exit();
  }


	
}