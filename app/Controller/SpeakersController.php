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



class SpeakersController extends AppController {


  public $uses = array('Product', 'User', 'Employee', 'Monitor', 'Mouse','Keyboard','Systemunit', 'Videocard', 'Headset', 'Speaker', 'Ups', 'Inventory');

	public $helpers = array('Html', 'Form');

	public $components = array('Session', 'Paginator');



    public function beforeFilter(){

     parent::beforeFilter();
     $this->alert = new Alert();
     }

  public function index() {

        
        $all = $this->Speaker->find('all');
        $number= count($all);
        $this->Set('allSpeakers', $number);
        

         $this->Paginator->settings = array( 'limit' => 10);

    // similar to findAll(), but fetches paged results
    $data = $this->Paginator->paginate('Speaker');
    $this->set('speakers', $data);





}


public function add() {


    $this->autoRender = false;

        if ($this->request->is('post')) {

     $accept = $this->request->data;

     if (empty($accept['sppropertyno']) || empty($accept['spdescription']) || empty($accept['spstatus']) ||
             empty($accept['sptype']) || empty($accept['spavailability']) ) {


          $this->Session->setFlash($this->alert->danger('All fields must have values.'),'default', array(), 'speaker_error');   
          $this->redirect($this->referer());


     }

     else{

                $checkExist = $this->Speaker->find('first',
                array(
                    'fields' => 'sppropertyno',
                    'conditions' => array(
                        'sppropertyno' => $accept['sppropertyno']
                        )
                    )
                );

                if($checkExist){

                    $this->Session->setFlash($this->alert->danger('Update failed. Speaker Property no. already exist.'),'default', array(), 'speaker');   
                    
                } else{

                    $data = array(
                    'Speaker' => array(
                        'sppropertyno' => $accept['sppropertyno'],
                        'spdescription' => $accept['spdescription'],
                        'spstatus' => $accept['spstatus'],
                        'sptype' => $accept['sptype'],
                        'spavailability' => $accept['spavailability']
                    
                     )
             );
    $this->Speaker->create($data);
    $this->Speaker->save($data);
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

            if(empty($data['sppropertyno']) || empty($data['spdescription']) || empty($data['spstatus']) ||
             empty($data['sptype']) || empty($data['spavailability']) ) {

                $this->Session->setFlash($this->alert->danger('All fields must have values.'),'default', array(), 'speaker_error');   
            }else{
             $checkExist = $this->Speaker->find('first',
                   array(
                    'fields' => 'sppropertyno',
                    'conditions' => array(
                      'sppropertyno' => $data['sppropertyno']
                      )
                    )
                  );

              if($checkExist){
                
                $this->Session->setFlash($this->alert->danger('Update failed. Speaker Property No. already exist.'),'default', array(), 'speaker_error');   
                
                 }else{

                      $prepareData = array(
                        'Speaker' => array(
                            'sppropertyno' => $data['sppropertyno'],
                            'spdescription' => $data['spdescription'],
                            'spstatus' => $data['spstatus'],
                            'sptype' => $data['sptype'],
                            'spavailability' => $data['spavailability']

                        )
                    );
                    $this->Speaker->id = $data['id'];
                    $this->Speaker->save($prepareData);
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
	
	if ($this->Speaker->delete($id)) {
	$this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Successfully deleted.</div>', 'default', array(), 'good');
		return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('Could not remove info'));
	$this->redirect($this->referer());
}

        public function viewAjax(){
            $this->autoRender = false;
            $query = $this->request->query;
            $content = "";
            $error = false;
            if (isset($query['speakersId'])) {
              $sId = $query['speakersId'];
              $speaker = $this->Speaker->findById($sId);
              if ($speaker) {
                $error = false;
                $content = $speaker;
              } else {
                $error = true;
                $content = "no_sp";
              }
            } else {
              $error = true;
              $content = "no_id";
            }
            echo json_encode(array('error' => $error, 'content' => $content));
            exit();
          }

        }



?>