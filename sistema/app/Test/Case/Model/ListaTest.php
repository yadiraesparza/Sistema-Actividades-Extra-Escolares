<?php
App::uses('Lista', 'Model');

/**
 * Lista Test Case
 *
 */
class ListaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lista'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Lista = ClassRegistry::init('Lista');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lista);

		parent::tearDown();
	}

}
