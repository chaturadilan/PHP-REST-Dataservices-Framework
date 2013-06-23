<?php
App::uses('DataServicesType', 'Model');

/**
 * DataServicesType Test Case
 *
 */
class DataServicesTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.data_services_type',
		'app.data_service',
		'app.data_app'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DataServicesType = ClassRegistry::init('DataServicesType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DataServicesType);

		parent::tearDown();
	}

}
