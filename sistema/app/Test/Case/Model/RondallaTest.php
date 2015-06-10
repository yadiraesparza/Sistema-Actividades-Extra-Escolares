<?php
App::uses('Rondalla', 'Model');

/**
 * Rondalla Test Case
 *
 */
class RondallaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rondalla'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Rondalla = ClassRegistry::init('Rondalla');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Rondalla);

		parent::tearDown();
	}

}
