<?php
App::uses('DataSupplierType', 'Model');

/**
 * DataSupplierType Test Case
 *
 */
class DataSupplierTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.data_supplier_type',
		'app.data_supplier'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DataSupplierType = ClassRegistry::init('DataSupplierType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DataSupplierType);

		parent::tearDown();
	}

}
