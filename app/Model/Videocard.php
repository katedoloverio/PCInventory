<?php
App::uses('AppModel', 'Model');
App::uses('Inventory', 'Model');

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class Videocard extends AppModel {
public $hasOne = 'Inventory';
}