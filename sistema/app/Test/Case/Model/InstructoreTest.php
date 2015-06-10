<?php
App::uses('Instructore', 'Model');

/**
 * Instructore Test Case
 *
 */
class InstructoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.instructore'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Instructore = ClassRegistry::init('Instructore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Instructore);

		parent::tearDown();
	}

}
