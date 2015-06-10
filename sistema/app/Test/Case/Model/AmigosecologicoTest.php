<?php
App::uses('Amigosecologico', 'Model');

/**
 * Amigosecologico Test Case
 *
 */
class AmigosecologicoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.amigosecologico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Amigosecologico = ClassRegistry::init('Amigosecologico');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Amigosecologico);

		parent::tearDown();
	}

}
