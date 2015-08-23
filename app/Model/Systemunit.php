<?php
App::uses('AppModel', 'Model');
App::uses('Inventory', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class Systemunit extends AppModel {

public $hasOne = 'Inventory';
}