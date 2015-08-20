<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
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
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
//Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
       
        Router::connect('/users/register', array('controller' => 'users', 'action' => 'register'));

        Router::connect('/users/create', array('controller' => 'users', 'action' => 'create'));
        Router::connect('/users/login', array('controller' => 'users', 'action' => 'login'));
        Router::connect('/users/logout', array('controller' => 'users', 'action' => 'logout'));
        Router::connect('/hello', array('controller' => 'users', 'action' => 'hello'));
        Router::connect('/', array('controller' => 'users', 'action' => 'index'));

        Router::connect('/employee/register', array('controller' => 'Employees', 'action' => 'register'));
        Router::connect('/employee/login', array('controller' => 'Employees', 'action' => 'login'));
        Router::connect('/employee/logout', array('controller' => 'Employees', 'action' => 'logout'));
        Router::connect('/employee/hello', array('controller' => 'Employees', 'action' => 'hello'));



         Router::connect('/employee/index', array('controller' => 'Employees', 'action' => 'index'));
         Router::connect('/employee/add', array('controller' => 'Employees', 'action' => 'add'));
         Router::connect('/employee/edit', array('controller' => 'Employees', 'action' => 'edit'));
         Router::connect('/employee/delete', array('controller' => 'Employees', 'action' => 'delete'));
         Router::connect('/employee/addemp', array('controller' => 'Employees', 'action' => 'add'));
         Router::connect('/employee/editemp', array('controller' => 'Employees', 'action' => 'edit'));
         Router::connect('/employee/deleteemp', array('controller' => 'Employees', 'action' => 'delete'));
        Router::connect('/employee/home', array('controller' => 'Employees', 'action' => 'home'));

        Router::connect('/product/index', array('controller' => 'Products', 'action' => 'index'));
        Router::connect('/product/view', array('controller' => 'Products', 'action' => 'view'));


        Router::connect('/product/addprod', array('controller' => 'Products', 'action' => 'add'));
        Router::connect('/product/editprod', array('controller' => 'Products', 'action' => 'edit'));
         Router::connect('/product/deleteprod', array('controller' => 'Products', 'action' => 'delete'));
     


         Router::connect('/gadget/index', array('controller' => 'Gadgets', 'action' => 'index'));
        Router::connect('/gadget/addgdgt', array('controller' => 'Gadgets', 'action' => 'add'));
        Router::connect('/gadget/editgdgt', array('controller' => 'Gadgets', 'action' => 'edit'));
        Router::connect('/gadget/deletegdgt', array('controller' => 'Gadgets', 'action' => 'delete'));

        Router::connect('/page/index', array('controller' => 'Pages', 'action' => 'index'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	//Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
        
/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
