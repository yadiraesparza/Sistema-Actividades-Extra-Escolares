<?php
App::uses('Edecane', 'Model');

/**
 * Edecane Test Case
 *
 */
class EdecaneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.edecane'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Edecane = ClassRegistry::init('Edecane');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Edecane);

		parent::tearDown();
	}

}
