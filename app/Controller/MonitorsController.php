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
App::uses('Headset', 'Model');
App::uses('Speaker', 'Model');
App::uses('Up', 'Model');
App::uses('Inventory', 'Model');
App::uses('Alert', 'lib');

class MonitorsController extends AppController {


     public $uses = array(
          'Product', 
          'User', 
          'Employee', 
          'Monitor', 
          'Mouse',
          'Keyboard',
          'Systemunit', 
          'Videocard', 
          'Headset', 
          'Speaker', 
          'Up',
          'Inventory');
          
    public $helpers = array(
      'Html',   
      'Form');

    public $components = array('Session', 'Paginator');


    public function beforeFilter(){
      parent::beforeFilter();
        $this->alert = new Alert();
    }
    public function index() {

        
        $all = $this->Monitor->find('all');
        $number= count($all);
        $this->Set('allMonitors', $number);
        $this->Paginator->settings = array( 'limit' => 10);
        $data = $this->Paginator->paginate('Monitor');
        $this->set('monitors', $data);
    }


    public function add() {


    $this->autoRender = false;

        if ($this->request->is('post')) {

     $accept = $this->request->data;

     if (empty($accept['mopropertyno']) || empty($accept['modescription']) || empty($accept['mostatus']) ||
             empty($accept['motype']) || empty($accept['moavailability']) ) {

   $this->Session->setFlash($this->alert->danger('All fields must have values.'),'default', array(), 'monitor_error');   
          $this->redirect($this->referer());
     }

     else{

                $checkExist = $this->Monitor->find('first',
                array(
                    'fields' => 'mopropertyno',
                    'conditions' => array(
                        'mopropertyno' => $accept['mopropertyno']
                        )
                    )
                );

                if($checkExist){

                    $this->Session->setFlash($this->alert->danger('Update failed. Monitor Property no. already exist.'),'default', array(), 'monitor_error');   
                    
                } else{

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
                $this->Session->setFlash($this->alert->success('Sucessfully added.'), 'default', array(), 'added');

        

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

            if(empty($data['mopropertyno']) || empty($data['modescription']) || empty($data['mostatus']) ||
             empty($data['motype']) || empty($data['moavailability']) ) {

                $this->Session->setFlash($this->alert->danger('All fields must have values.'),'default', array(), 'monitor_error');   
            }else{
             $checkExist = $this->Monitor->find('first',
                   array(
                    'fields' => 'mopropertyno',
                    'conditions' => array(
                      'mopropertyno' => $data['mopropertyno']
                      )
                    )
                  );

              if($checkExist){
                
                $this->Session->setFlash($this->alert->danger('Update failed. Monitor Property No. already exist.'),'default', array(), 'monitor');   
                
                 }else{

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
                    $this->Session->setFlash($this->alert->success('Update Success.'), 'default', array(), 'good');
                   }
  

               } 
                

            $this->redirect($this->referer());
            exit();


        }
}
  public function delete() {


        $this->autoRender = false;
         $id = $this->request->data['input'] ;
          $this->Monitor->delete($id);
        
    	//$this->autoRender = false;
    	//$id = $this->request->data['id'];
    	
    	//if ($this->Monitor->delete($id)) {
    	//$this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Successfully deleted.</div>', 'default', array(), 'good');
    		//return $this->redirect(array('action' => 'index'));
    //	}
    //$this->Session->setFlash(__('Could not remove monitor'));
    	//$this->redirect($this->referer());
}


  public function searchMonitor(){

  //$this->autoRender = false;
     $searchInput = $this->request->data['input'];
    
   $match= $this->Monitor->find('all',
          array(
            'conditions' => array(
              'OR' =>array(
                'Monitor.mopropertyno LIKE' => '%'. $searchInput. '%',
                'Monitor.modescription LIKE' => '%'. $searchInput. '%'
              
                )
              )
            )
          );

     $this->Set('showMonitor', $match);
     

  }




}