<?php
App::uses('Spinning', 'Model');

/**
 * Spinning Test Case
 *
 */
class SpinningTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.spinning'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Spinning = ClassRegistry::init('Spinning');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Spinning);

		parent::tearDown();
	}

}
