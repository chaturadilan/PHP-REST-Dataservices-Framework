<?php

class AppController extends Controller {

	public $components = array(
			'Session',
			'Auth' => array(
					'loginRedirect' => array('controller' => 'posts', 'action' => 'index'),
					'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
					'authorize' => array('Controller') // Added this line
			)
	);

	public function isAuthorized($user) {
		// Admin can access every action
		if (isset($user['role']) && $user['role'] === 'admin') {
			return true;
		}

		// Default deny
		return false;
	}
	 
}