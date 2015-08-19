<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AppController', 'Controller');
App::uses('Product', 'Model');
App::uses('User', 'Model');
App::uses('Employee', 'Model');
App::uses('Gadget', 'Model');
App::uses('Page', 'Model');
/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Product', 'User', 'Employee', 'Gadget', 'Page');

    public $helpers = array('Html', 'Form');

    public $components = array('Session', 'Paginator');

    


/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
public function index() {
    if($this->request->is('post')){
       // pr($this->request->data);
       
        $imageFilename =   $this->request->data ['Page']['image']['name'];
        $folderToSaveFiles = WWW_ROOT . 'img/users/'.$imageFilename  ;
          
       $upload= move_uploaded_file( $this->request->data['Page']['image']['tmp_name'], $folderToSaveFiles);
   


       if($upload)
    {
        echo "Successfully uploaded";
    }else
    {
        echo "Something Wrong!";
    }


        $uploadedPhoto= array (
            'Page' => array(
                'firstname'=> 'kate',
                'photo' => $imageFilename

                )
            );

        $this->Page->create($uploadedPhoto);
        $this->Page->save($uploadedPhoto);
    }
          // $newFilename = $this->request->data['Pages']['image']['name'];
           // $folderToSaveFiles = WWW_ROOT . 'img/users/'.$newFilename  ;
           // move_uploaded_file( $this->request->data['Page']['image']['tmp_name'], $folderToSaveFiles);

     $data = $this->Page->find('all');

    
     $this->Set('myphoto', $data);

	}
	
}
