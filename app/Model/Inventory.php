<?php
App::uses('AppModel', 'Model');
App::uses('Employee', 'Model');
App::uses('Keyboard', 'Model');
App::uses('Mouse', 'Model');
App::uses('Systemunit', 'Model');
App::uses('Videocard', 'Model');
App::uses('Headset', 'Model');
App::uses('Speaker', 'Model');
App::uses('Up', 'Model');
App::uses('Inventory', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class Inventory extends AppModel {

public $belongsTo = array(
	'Employee','Keyboard','Mouse','Systemunit','Monitor','Videocard','Headset','Speaker','Up'
	);
}