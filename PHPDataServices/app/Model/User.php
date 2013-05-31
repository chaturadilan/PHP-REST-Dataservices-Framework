<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * User Model
 *
 */
class User extends AppModel {
	
	public $validate = array(
			'username' => array(
					'alphaNumeric' => array(
							'rule'     => 'alphaNumeric',
							'required' => true,
							'message'  => 'Alphabets and numbers only'
					),
					'between' => array(
							'rule'    => array('between', 5, 15),
							'message' => 'Password must be between 5 to 15 characters'
					)
			),
			'password' => array(
					'rule'    => array('minLength', '8'),
					'message' => 'Minimum 8 characters long'
			)
	);
	
	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		return true;
	}

}
