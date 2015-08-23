<?php
App::uses('AppModel', 'Model');
App::uses('Inventory', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class Mouse extends AppModel {
public $hasOne = 'Inventory';
}