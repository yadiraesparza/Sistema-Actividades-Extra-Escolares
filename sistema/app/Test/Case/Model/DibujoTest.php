<?php
App::uses('Dibujo', 'Model');

/**
 * Dibujo Test Case
 *
 */
class DibujoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dibujo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dibujo = ClassRegistry::init('Dibujo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dibujo);

		parent::tearDown();
	}

}
