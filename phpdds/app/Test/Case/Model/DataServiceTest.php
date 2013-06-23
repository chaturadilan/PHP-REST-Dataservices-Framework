<?php
App::uses('DataService', 'Model');

/**
 * DataService Test Case
 *
 */
class DataServiceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.data_service',
		'app.data_services_type',
		'app.data_app'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DataService = ClassRegistry::init('DataService');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DataService);

		parent::tearDown();
	}

}
