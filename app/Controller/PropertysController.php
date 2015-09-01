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
App::uses('Property', 'Model');
App::uses('Alert', 'lib');

class PropertysController extends AppController {

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
          'Property',
          'Up');
          
    public $helpers = array(
      'Html',   
      'Form');

    public $components = array('Session', 'Paginator');


    public function beforeFilter(){
    parent::beforeFilter();
        $this->alert = new Alert();
  }

    public function index() {

        $all = $this->Property->find('all');
        $number= count($all);
        $this->Set('allPropertys', $number);    
        $this->Paginator->settings = array('limit' => 10);
        $data = $this->Paginator->paginate('Property');
        $this->set('propertys', $data);

    }


    public function allPropertys(){

      $all = $this->Property->find('all');
      $number= count($all);
      $this->Set('allPropertys', $number);
      $this->Paginator->settings = array( 'limit' => 5);
      $data = $this->Paginator->paginate('Property');
      $this->set('propertys', $data);
  }

    public function add() {

        $this->autoRender = false;    

        if ($this->request->is('post')) {
        $accept = $this->request->data;
         
       //  pr($accept);
        // die();
          if( empty($accept['pclassification']) ||  empty($accept['pdescription']) ||  empty($accept['pstatus']) ||  empty($accept['ptype']) ||  empty($accept['pavailability'])  ||  empty($accept['ppropertyno']) ){
            $this->Session->setFlash($this->alert->danger('All fields must have values.'),'default', array(), 'error');   
            $this->redirect($this->referer());

          } else {

                $checkExist = $this->Property->find('first',
                array(
                    'fields' => 'ppropertyno',
                      'conditions' => array(
                       'ppropertyno' => $accept['ppropertyno']
                       )
                    )
                );

                if ($checkExist) {

                    $this->Session->setFlash($this->alert->danger('Update failed. Property No. already exist.'),'default', array(), 'error');   
                    
                } else {

                 $data = array(
                        'Property' => array(
                          'pclassification' => $accept['pclassification'],
                          'pdescription' => $accept['pdescription'],
                          'ppropertyno' => $accept['ppropertyno'],
                          'pstatus' => $accept['pstatus'],
                          'ptype' => $accept['ptype'],
                          'pavailability' => $accept['pavailability']
                              )
                        );

                    $this->Property->create($data);
                    $this->Property->save($data);
                    $this->Session->setFlash($this->alert->success('Sucessfully added.'), 'default', array(), 'added');

                 }
               $this->redirect($this->referer());
            }

           
        }
              
    }



  public function edit() {
  $this->autoRender = false;
  
        if ($this->request->is('post')) {
            
            $data = $this->request->data;

             if( empty($data['pclassification']) ||  empty($data['pdescription']) ||  empty($data['pstatus']) ||  empty($data['ptype']) ||  empty($data['pavailability'])  ||  empty($data['ppropertyno'])  ){

                $this->Session->setFlash($this->alert->danger('All fields must have values.'),'default', array(), 'error');   
            }else{
             $checkExist = $this->Property->find('first',
                   array(
                    'fields' => 'ppropertyno',
                    'conditions' => array(
                      'ppropertyno' => $data['ppropertyno']
                      )
                    )
                  );

              if($checkExist){
                
                $this->Session->setFlash($this->alert->danger('Update failed. Property no. already exist.'),'default', array(), 'error');   
                
                 }else{

                  ($data['pstatus']=='Working') ? $pstat = 1 : $pstat =2;
                    ($data['ptype']=='New') ? $ptyp = 1 : $ptyp =2;
                     ($data['pavailability']=='Available') ? $pavail = 1 : $pavail =2;

                      if ($data['pclassification']=='Monitor'){
                          $pclass = 1;
                      }
                      if ($data['pclassification']=='Mouse'){
                          $pclass = 2;
                      }
                      if ($data['pclassification']=='Keyboard'){
                          $pclass = 3;
                      }
                      if ($data['pclassification']=='System Unit'){
                          $pclass = 4;
                      }
                      if ($data['pclassification']=='Videocard'){
                          $pclass = 5;
                      }
                      if ($data['pclassification']=='Headset'){
                          $pclass = 6;
                      }
                      if ($data['pclassification']=='Speakers'){
                          $pclass = 7;
                      }
                      if ($data['pclassification']=='UPS'){
                          $pclass = 8;
                      }

                    
                       $prepareData = array(
                        'Property' => array(
                          'pclassification' => $pclass,
                          'pdescription' => $data['pdescription'],
                          'ppropertyno' => $data['ppropertyno'],
                          'pstatus' => $pstat,
                          'ptype' => $ptyp,
                          'pavailability' => $pavail
                              )
                        );
                    $this->Property->id = $data['id'];
                    $this->Property->set($prepareData);
                    $this->Property->save();
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
        
        if ($this->Property->delete($id)) {
        $this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Successfully deleted.</div>', 'default', array(), 'good');
          return $this->redirect(array('action' => 'index'));
        }
        $this->redirect($this->referer());
  }

  public function searchProperty() {

    $searchInput = $this->request->data['input'];
    
    $match= $this->Property->find('all',
        array(
          'conditions' => array(
            'OR' =>array(
              'Property.pclassification LIKE' => '%'. $searchInput. '%',
              'Property.pdescription LIKE' => '%'. $searchInput. '%',
              'Property.ppropertyno LIKE' => '%'. $searchInput. '%'
              )
            )
          )
    );
    $this->Set('showProperty', $match); 

  }

  public function viewAjax(){
    $this->autoRender = false;
    $query = $this->request->query;
    $content = "";
    $error = false;
    if (isset($query['propertyId'])) {
      $pId = $query['propertyId'];
      $property = $this->Property->findById($pId);
      if ($property) {
        $error = false;
        $content = $property;
      } else {
        $error = true;
        $content = "no_pb";
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
