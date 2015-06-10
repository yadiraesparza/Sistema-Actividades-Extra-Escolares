<?php
App::uses('Danza', 'Model');

/**
 * Danza Test Case
 *
 */
class DanzaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.danza'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Danza = ClassRegistry::init('Danza');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Danza);

		parent::tearDown();
	}

}
