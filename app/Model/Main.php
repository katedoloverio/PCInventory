<?php
App::uses('AppModel', 'Model');
App::uses('Employee', 'Model');

App::uses('Property', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class Main extends AppModel {

public $belongsTo = array(
	'Employee','Property'
	);
}