<?php
App::uses('Beisbol', 'Model');

/**
 * Beisbol Test Case
 *
 */
class BeisbolTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.beisbol'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Beisbol = ClassRegistry::init('Beisbol');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Beisbol);

		parent::tearDown();
	}

}
