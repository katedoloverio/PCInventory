<?php
App::uses('AppModel', 'Model');
App::uses('Employee', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class Property extends AppModel {
 public $belongsTo = 'Employee';
}