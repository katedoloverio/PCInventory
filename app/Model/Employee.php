<?php
App::uses('AppModel', 'Model');
App::uses('Inventory', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class Employee extends AppModel {
public $hasOne = 'Inventory';

	public $validate = array(
	'empfirstname' => array(
		'required' => array(
			'rule' => 'notEmpty',
			'message' => 'Please enter a username'
		)
	),
	'emplastname' => array(
		'required' => array(
			'rule' => 'notEmpty',
			'message' => 'Please enter a password'
		)
	)
);

}