<?php
App::uses('AppModel', 'Model');
/**
 * DataServiceType Model
 *
 * @property DataService $DataService
 */
class DataServiceType extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'DataService' => array(
			'className' => 'DataService',
			'foreignKey' => 'data_service_type_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
