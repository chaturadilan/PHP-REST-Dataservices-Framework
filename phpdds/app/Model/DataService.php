<?php
App::uses('AppModel', 'Model');
/**
 * DataService Model
 *
 * @property DataServiceType $DataServiceType
 * @property DataApp $DataApp
 */
class DataService extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'data_service_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'DataServiceType' => array(
			'className' => 'DataServiceType',
			'foreignKey' => 'data_service_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DataApp' => array(
			'className' => 'DataApp',
			'foreignKey' => 'data_app_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
