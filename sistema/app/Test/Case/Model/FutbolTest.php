<?php
App::uses('Futbol', 'Model');

/**
 * Futbol Test Case
 *
 */
class FutbolTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.futbol'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Futbol = ClassRegistry::init('Futbol');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Futbol);

		parent::tearDown();
	}

}
