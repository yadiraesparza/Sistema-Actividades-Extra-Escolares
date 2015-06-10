<?php
App::uses('Bandadeguerra', 'Model');

/**
 * Bandadeguerra Test Case
 *
 */
class BandadeguerraTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bandadeguerra'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Bandadeguerra = ClassRegistry::init('Bandadeguerra');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Bandadeguerra);

		parent::tearDown();
	}

}
