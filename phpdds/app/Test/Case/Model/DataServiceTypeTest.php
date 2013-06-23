<?php
App::uses('DataServiceType', 'Model');

/**
 * DataServiceType Test Case
 *
 */
class DataServiceTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.data_service_type',
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
		$this->DataServiceType = ClassRegistry::init('DataServiceType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DataServiceType);

		parent::tearDown();
	}

}
