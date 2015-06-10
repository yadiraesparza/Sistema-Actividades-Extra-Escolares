<?php
App::uses('Kickboxing', 'Model');

/**
 * Kickboxing Test Case
 *
 */
class KickboxingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kickboxing'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kickboxing = ClassRegistry::init('Kickboxing');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kickboxing);

		parent::tearDown();
	}

}
