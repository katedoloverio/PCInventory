<?php
App::uses('AppModel', 'Model');
App::uses('Inventory', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class Keyboard extends AppModel {

public $hasOne = 'Inventory';

}