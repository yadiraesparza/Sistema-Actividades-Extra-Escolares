<?php
App::uses('Escolta', 'Model');

/**
 * Escolta Test Case
 *
 */
class EscoltaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.escolta'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Escolta = ClassRegistry::init('Escolta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Escolta);

		parent::tearDown();
	}

}
