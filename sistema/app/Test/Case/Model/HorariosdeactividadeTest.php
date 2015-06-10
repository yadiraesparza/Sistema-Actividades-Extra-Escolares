<?php
App::uses('Horariosdeactividade', 'Model');

/**
 * Horariosdeactividade Test Case
 *
 */
class HorariosdeactividadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.horariosdeactividade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Horariosdeactividade = ClassRegistry::init('Horariosdeactividade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Horariosdeactividade);

		parent::tearDown();
	}

}
