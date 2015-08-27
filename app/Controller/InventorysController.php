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


class  InventorysController extends AppController {

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

    $all = $this->Inventory->find('all');
        $number= count($all);
        $this->Set('allInventorys', $number);    
        $this->Paginator->settings = array( 'limit' => 10);
        $data = $this->Paginator->paginate('Inventory');
        $this->set('inventorys', $data);

    }

    public function add() {
    
        $this->autoRender = false;

        if ($this->request->is('post')) {
        $accept = $this->request->data;
         $data = array(
                 'Inventory' => array(
                        'employee_id' => $accept['employee_id'],
                        'systemunit_id' => $accept['systemunit_id'],
                        'monitor_id' => $accept['monitor_id'],
                        'videocard_id' => $accept['videocard_id'],
                        'keyboard_id' => $accept['keyboard_id'],
                        'headset_id' => $accept['headset_id'],
                        'speaker_id' => $accept['speaker_id'],
                        'up_id' => $accept['up_id'],
                        'os_id' => $accept['os_id'],
                        'pcosserialno' => $accept['pcosserialno'],
                        'pcadditionalinfo' => $accept['pcadditionalinfo'],
                        'pcstatus' => $accept['pcstatus'],
                        'pctype' => $accept['pctype'],
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
            'employee_id' => $accept['employee_id'],
            'systemunit_id' => $accept['systemunit_id'],
            'monitor_id' => $accept['monitor_id'],
            'videocard_id' => $accept['videocard_id'],
            'keyboard_id' => $accept['keyboard_id'],
            'headset_id' => $accept['headset_id'],
            'speaker_id' => $accept['speaker_id'],
            'up_id' => $accept['ups_id'],
            'os_id' => $accept['os_id'],
            'pcosserialno' => $accept['pcosserialno'],
            'pcadditionalinfo' => $accept['pcadditionalinfo'],
            'pcstatus' => $accept['pcstatus'],
            'pctype' => $accept['pctype'],
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
             $id = $this->request->data['input'] ;
             $this->Inventory->delete($id);
 
             }

        public function searchInventory() {

         $searchInput = $this->request->data['input'];
          
         $match= $this->Inventory->find('all',
              array(
                'conditions' => array(
                  'OR' =>array(
                    'Employee.empfirstname LIKE' => '%'. $searchInput. '%',
                    'Monitor.mopropertyno LIKE' => '%'. $searchInput. '%'
                    )
                  )
                )
              );

           $this->Set('showInventory', $match);  
        }

    }

?>