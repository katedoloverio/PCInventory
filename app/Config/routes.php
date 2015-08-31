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

        //EMPLOYEE 
         Router::connect('/employee/index', array('controller' => 'employees', 'action' => 'index'));
         Router::connect('/employee/addemp', array('controller' => 'employees', 'action' => 'add'));
         Router::connect('/employee/editemp', array('controller' => 'employees', 'action' => 'edit'));
         Router::connect('/employee/deleteemp', array('controller' => 'employees', 'action' => 'delete'));
         //Router::connect('/employees/index/page:2', array('controller' => 'employees', 'action' => 'delete'));
        
         Router::connect('/employee/home', array('controller' => 'employees', 'action' => 'home'));
         Router::connect('/employee/searchEmployee', array('controller' => 'employees', 'action' => 'searchEmployee'));
         Router::connect('/employee/allEmployees', array('controller' => 'employees', 'action' => 'allEmployees'));
         
         //MONITOR  - Property 
         Router::connect('/monitor/index', array('controller' => 'monitors', 'action' => 'index'));
         Router::connect('/monitor/addmon', array('controller' => 'monitors', 'action' => 'add'));
         Router::connect('/monitor/editmon', array('controller' => 'monitors', 'action' => 'edit'));
         Router::connect('/monitor/deletemon', array('controller' => 'monitors', 'action' => 'delete'));
         Router::connect('/monitor/home', array('controller' => 'monitors', 'action' => 'home'));
         Router::connect('/monitor/searchMonitor', array('controller' => 'monitors', 'action' => 'searchMonitor'));
         Router::connect('/monitor/allMonitors', array('controller' => 'monitors', 'action' => 'allMonitors'));
         

          //MOUSE  - Property 
         Router::connect('/mouse/index', array('controller' => 'mouses', 'action' => 'index'));
         Router::connect('/mouse/addms', array('controller' => 'mouses', 'action' => 'add'));
         Router::connect('/mouse/editms', array('controller' => 'mouses', 'action' => 'edit'));
         Router::connect('/mouse/deletems', array('controller' => 'mouses', 'action' => 'delete'));
         Router::connect('/mouse/home', array('controller' => 'mouses', 'action' => 'home'));

           //Keyboard  - Property 
         Router::connect('/keyboard/index', array('controller' => 'keyboards', 'action' => 'index'));
         Router::connect('/keyboard/addkb', array('controller' => 'keyboards', 'action' => 'add'));
         Router::connect('/keyboard/editkb', array('controller' => 'keyboards', 'action' => 'edit'));
         Router::connect('/keyboard/deletekb', array('controller' => 'keyboards', 'action' => 'delete'));
         Router::connect('/keyboard/home', array('controller' => 'keyboards', 'action' => 'home'));
    

          //System Unit  - Property 
         Router::connect('/systemunit/index', array('controller' => 'systemunits', 'action' => 'index'));
         Router::connect('/systemunit/addsu', array('controller' => 'systemunits', 'action' => 'add'));
         Router::connect('/systemunit/editsu', array('controller' => 'systemunits', 'action' => 'edit'));
         Router::connect('/systemunit/deletesu', array('controller' => 'systemunits', 'action' => 'delete'));
         Router::connect('/systemunit/home', array('controller' => 'systemunits', 'action' => 'home'));
    

         //Video Card - Property 
         Router::connect('/videocard/index', array('controller' => 'videocards', 'action' => 'index'));
         Router::connect('/videocard/addvc', array('controller' => 'videocards', 'action' => 'add'));
         Router::connect('/videocard/editvc', array('controller' => 'videocards', 'action' => 'edit'));
         Router::connect('/videocard/deletevc', array('controller' => 'videocards', 'action' => 'delete'));
         Router::connect('/videocard/home', array('controller' => 'videocards', 'action' => 'home'));
    

         //Headset - Property 
         Router::connect('/headset/index', array('controller' => 'headsets', 'action' => 'index'));
         Router::connect('/headset/addhs', array('controller' => 'headsets', 'action' => 'add'));
         Router::connect('/headset/ediths', array('controller' => 'headsets', 'action' => 'edit'));
         Router::connect('/headset/deletehs', array('controller' => 'headsets', 'action' => 'delete'));
         Router::connect('/headset/home', array('controller' => 'headsets', 'action' => 'home'));
    
        //Speakers - Property 
         Router::connect('/speaker/index', array('controller' => 'speakers', 'action' => 'index'));
         Router::connect('/speaker/addsp', array('controller' => 'speakers', 'action' => 'add'));
         Router::connect('/speaker/editsp', array('controller' => 'speakers', 'action' => 'edit'));
         Router::connect('/speaker/deletesp', array('controller' => 'speakers', 'action' => 'delete'));
         Router::connect('/speaker/home', array('controller' => 'speakers', 'action' => 'home'));

             //UPS - Property 
         Router::connect('/up/index', array('controller' => 'ups', 'action' => 'index'));
         Router::connect('/up/addup', array('controller' => 'ups', 'action' => 'add'));
         Router::connect('/up/editup', array('controller' => 'ups', 'action' => 'edit'));
         Router::connect('/up/deleteup', array('controller' => 'ups', 'action' => 'delete'));
         Router::connect('/up/home', array('controller' => 'ups', 'action' => 'home'));
    
          //PC Inventory 
         Router::connect('/inventory/index', array('controller' => 'inventorys', 'action' => 'index'));
         Router::connect('/inventory/addpc', array('controller' => 'inventorys', 'action' => 'add'));
         Router::connect('/inventory/editpc', array('controller' => 'inventorys', 'action' => 'edit'));
         Router::connect('/inventory/deletepc', array('controller' => 'inventorys', 'action' => 'delete'));
         Router::connect('/inventory/home', array('controller' => 'inventorys', 'action' => 'home'));
         Router::connect('/inventory/searchInventory', array('controller' => 'inventory', 'action' => 'searchInventory'));
         



        Router::connect('/product/index', array('controller' => 'Products', 'action' => 'index'));
        Router::connect('/product/view', array('controller' => 'Products', 'action' => 'view'));
        Router::connect('/product/addprod', array('controller' => 'Products', 'action' => 'add'));
        Router::connect('/product/editprod', array('controller' => 'Products', 'action' => 'edit'));
        Router::connect('/product/deleteprod', array('controller' => 'Products', 'action' => 'delete'));
     

        //GADGET
        Router::connect('/gadget/index', array('controller' => 'gadgets', 'action' => 'index'));
        Router::connect('/gadget/addgdgt', array('controller' => 'gadgets', 'action' => 'add'));
        Router::connect('/gadget/editgdgt', array('controller' => 'gadgets', 'action' => 'edit'));
        Router::connect('/gadget/deletegdgt', array('controller' => 'gadgets', 'action' => 'delete'));
        Router::connect('/gadget/searchGadss', array('controller' => 'gadgets', 'action' => 'searchGadss'));
        Router::connect('/gadget/allGadgets', array('controller' => 'gadgets', 'action' => 'allGadgets'));
       Router::connect('/gadget/*', array('controller' => 'gadgets', 'action' => 'index'));
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
