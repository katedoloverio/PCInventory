<?php
App::uses('AppController', 'Controller');
App::uses('Product', 'Model');
App::uses('User', 'Model');
App::uses('Employee', 'Model');
App::uses('Property', 'Model');
App::uses('Main', 'Model');
App::uses('Alert', 'lib');


class  MainsController extends AppController {

 public $uses = array(
          'Product', 
          'User', 
          'Employee', 
          'Inventory',
          'Property',
          'Main');
          
    public $helpers = array(
      'Html',   
      'Form');

    public $components = array('Session', 'Paginator');


    public function beforeFilter(){
      parent::beforeFilter();
        $this->alert = new Alert();
    }

    public function index() {

        $all = $this->Main->find('all');
   pr($all );
          die();
        $number= count($all);
        $this->Set('allMains', $number);    
        $this->Paginator->settings = array( 'limit' => 10);
        $data = $this->Paginator->paginate('Main');
        $this->set('mains', $data);

    }

    public function add() {
    
        $this->autoRender = false;

        if ($this->request->is('post')) {
        $accept = $this->request->data;



         $data = array(
                 'Main' => array(
                    
                    'mouse_propertyid' => $accept['mouse_propertyid'],
                    'monitor_propertyid' => $accept['monitor_propertyid'],
                    'keyboard_propertyid' => $accept['keyboard_propertyid'],
                    'systemunit_propertyid' => $accept['systemunit_propertyid'],
                    'videocard_propertyid' => $accept['videocard_propertyid'],
                    'speaker_propertyid' => $accept['speaker_propertyid'],
                    'headset_propertyid' => $accept['headset_propertyid'],
                    'up_propertyid' => $accept['up_propertyid'],
                    'os' => $accept['os'],
                    'os_serial' => $accept['os_serial'],
                    'additionalinfo' => $accept['additionalinfo']
                                
                         )
                         );
        $this->Main->create($data);
        $this->Main->save($data);
    
        $this->redirect(array('action' => 'index'));

      }
        $this->Session->setFlash(__('Could not add info'));
    }


    public function edit() {

	$this->autoRender = false;
	
        if ($this->request->is('post')) {
            
            $accept = $this->request->data;

            $prepareData = array(
                'Main' => array(
                  'employee_id' => $accept['employee_id'],
                    'property_id' => $accept['property_id'],
                    'user' => $accept['user'],
                    'mouse_propertyid' => $accept['mouse_propertyid'],
                    'monitor_propertyid' => $accept['monitor_propertyid'],
                    'keyboard_propertyid' => $accept['keyboard_propertyid'],
                    'systemunit_propertyid' => $accept['systemunit_propertyid'],
                    'videocard_propertyid' => $accept['videocard_propertyid'],
                    'speaker_propertyid' => $accept['speaker_propertyid'],
                    'headset_propertyid' => $accept['headset_propertyid'],
                    'up_propertyid' => $accept['up_propertyid'],
                    'os' => $accept['os'],
                    'os_serial' => $accept['os_serial'],
                    'additionalinfo' => $accept['additionalinfo']
                                
           
                             )
            );
            $this->Main->id = $accept['id'];
            $this->Main->save($prepareData);

           
            $this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Update Success.</div> ', 'default', array(), 'good');
            $this->redirect($this->referer());
            exit();


        }
    }
            public function delete() {

             $this->autoRender = false;
             $id = $this->request->data['input'] ;
             $this->Main->delete($id);
 
             }

        public function searchMain() {

         $searchInput = $this->request->data['input'];
          
         $match= $this->Main->find('all',
              array(
                'conditions' => array(
                  'OR' =>array(
                    'Main.mouse_propertyno LIKE' => '%'. $searchInput. '%',
                    'Main.user LIKE' => '%'. $searchInput. '%'
                    )
                  )
                )
              );

           $this->Set('showMain', $match);  
        }

    }

?>