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

class EmployeesController extends AppController {

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

    $all = $this->Employee->find('all');
        $number= count($all);
        $this->Set('allEmployees', $number);    
        $this->Paginator->settings = array( 'limit' => 10);
        $data = $this->Paginator->paginate('Employee');
        $this->set('employees', $data);

    }


    public function allEmployees(){

      $all = $this->Employee->find('all');
      $number= count($all);
      $this->Set('allEmployees', $number);
      $this->Paginator->settings = array( 'limit' => 5);
      $data = $this->Paginator->paginate('Employee');
      $this->set('employees', $data);
  }

    public function add() {

        $this->autoRender = false;    

        if ($this->request->is('post')) {
        $accept = $this->request->data;
         
          if( empty($accept['empfirstname']) ||  empty($accept['emplastname']) ||  empty($accept['empcompanyid']) ||  empty($accept['empstatus'])  ){
            $this->Session->setFlash($this->alert->danger('All fields must have values.'),'default', array(), 'error');   
            $this->redirect($this->referer());

          } else {

                $checkExist = $this->Employee->find('first',
                array(
                    'fields' => 'empcompanyid',
                      'conditions' => array(
                       'empcompanyid' => $accept['empcompanyid']
                       )
                    )
                );

                if ($checkExist) {

                    $this->Session->setFlash($this->alert->danger('Update failed. Employee company ID already exist.'),'default', array(), 'error');   
                    
                } else {

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
                    $this->Session->setFlash($this->alert->success('Sucessfully added.'), 'default', array(), 'added');

                 }
               $this->redirect($this->referer());
            }

           
        }
               $this->Session->setFlash(__('Could not register user'));

    }



  public function edit() {
  $this->autoRender = false;
  
        if ($this->request->is('post')) {
            
            $data = $this->request->data;

            if(empty($data['empfirstname']) || empty($data['emplastname']) || empty($data['empcompanyid']) ||
             empty($data['empstatus']) ) {

                $this->Session->setFlash($this->alert->danger('All fields must have values.'),'default', array(), 'error');   
            }else{
             $checkExist = $this->Employee->find('first',
                   array(
                    'fields' => 'empcompanyid',
                    'conditions' => array(
                      'empcompanyid' => $data['empcompanyid']
                      )
                    )
                  );

              if($checkExist){
                
                $this->Session->setFlash($this->alert->danger('Update failed. Company ID already exist.'),'default', array(), 'error');   
                
                 }else{

                      $prepareData = array(
                        'Employee' => array(
                            'empfirstname' => $data['empfirstname'],
                            'emplastname' => $data['emplastname'],
                            'empcompanyid' => $data['empcompanyid'],
                            'empstatus' => $data['empstatus']

                        )
                    );
                    $this->Employee->id = $data['id'];
                    $this->Employee->set($prepareData);
                    $this->Employee->save();
                    $this->Session->setFlash($this->alert->success('Update Success.'), 'default', array(), 'good');
                   }
  

               } 
                

            $this->redirect($this->referer());
            exit();


        }
}
  public function editphoto() {

       $this->autoRender = false;
  
        if ($this->request->is('post')) {
            
            $data = $this->request->data;

            if(empty($data['Employee']['empphoto']['name'])) {

                $this->Session->setFlash($this->alert->danger('No file choosen.'),'default', array(), 'error');   
          
            } else {

                      $prepareData = array(
                         'Employee' => array(
                         'empphoto' => $data['Employee']['empphoto']['name']
                          )
                      );


                      $this->Employee->id = $data['Employee']['id'];
                      $this->Employee->save($prepareData);
                      $path = WWW_ROOT . 'img/users/'. $data['Employee']['empphoto']['name'];
                      $upload = move_uploaded_file( $data['Employee']['empphoto']['tmp_name'], $path);

                      $this->Session->setFlash($this->alert->success('Update Success.'), 'default', array(), 'good');
                    
                   }
            } 
                
            $this->redirect($this->referer());
            exit();
  }


    public function delete() {

        $this->autoRender = false;
        if (isset($this->request->data)){
         $id = $this->request->data['input'];
       $this->Employee->delete($id);
        $this->redirect($this->referer());
    }
      
  }

  public function searchEmployee() {

    $searchInput = $this->request->data['input'];
    
    $match= $this->Employee->find('all',
        array(
          'conditions' => array(
            'OR' =>array(
              'Employee.empfirstname LIKE' => '%'. $searchInput. '%',
              'Employee.emplastname LIKE' => '%'. $searchInput. '%',
              'Employee.empcompanyid LIKE' => '%'. $searchInput. '%'
              )
            )
          )
    );
    $this->Set('showEmployee', $match);  
  }

  public function viewAjax(){
    $this->autoRender = false;
    $query = $this->request->query;
    $content = "";
    $error = false;
    if (isset($query['keyboardId'])) {
      $kId = $query['keyboardId'];
      $keyboard = $this->Keyboard->findById($kId);
      if ($keyboard) {
        $error = false;
        $content = $keyboard;
      } else {
        $error = true;
        $content = "no_kb";
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
