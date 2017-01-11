<?php
App::uses('Outlet', 'Model');

/**
 * Outlet Test Case
 *
 */
class OutletTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.outlet'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Outlet = ClassRegistry::init('Outlet');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Outlet);

		parent::tearDown();
	}

}
