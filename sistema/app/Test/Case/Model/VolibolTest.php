<?php
App::uses('Volibol', 'Model');

/**
 * Volibol Test Case
 *
 */
class VolibolTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.volibol'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Volibol = ClassRegistry::init('Volibol');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Volibol);

		parent::tearDown();
	}

}
