<?php
App::uses('Tallerdelectura', 'Model');

/**
 * Tallerdelectura Test Case
 *
 */
class TallerdelecturaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tallerdelectura'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tallerdelectura = ClassRegistry::init('Tallerdelectura');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tallerdelectura);

		parent::tearDown();
	}

}
