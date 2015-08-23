<?php
App::uses('AppModel', 'Model');
App::uses('Employee', 'Model');
App::uses('Keyboard', 'Model');
App::uses('Mouse', 'Model');
App::uses('Systemunit', 'Model');
App::uses('Monitor', 'Model');
App::uses('Videocard', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class Inventory extends AppModel {

public $belongsTo = array(
	'Employee','Keyboard','Mouse','Systemunit','Monitor','Videocard'
	);
}