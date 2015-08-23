<?php
App::uses('AppModel', 'Model');
App::uses('Inventory', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class Monitor extends AppModel {
public $hasOne = 'Inventory';
}