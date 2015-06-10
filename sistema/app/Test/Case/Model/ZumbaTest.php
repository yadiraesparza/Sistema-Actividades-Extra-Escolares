<?php
App::uses('Zumba', 'Model');

/**
 * Zumba Test Case
 *
 */
class ZumbaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.zumba'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Zumba = ClassRegistry::init('Zumba');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Zumba);

		parent::tearDown();
	}

}
