<?php
App::uses('AppModel', 'Model');
App::uses('Property', 'Model');
App::uses('Main', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class Employee extends AppModel {
public $hasMany = 'Property';
public $belongsTo = 'Main';



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