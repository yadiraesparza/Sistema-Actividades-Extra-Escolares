<?php
App::uses('Bajastemporalesdealumno', 'Model');

/**
 * Bajastemporalesdealumno Test Case
 *
 */
class BajastemporalesdealumnoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bajastemporalesdealumno'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Bajastemporalesdealumno = ClassRegistry::init('Bajastemporalesdealumno');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Bajastemporalesdealumno);

		parent::tearDown();
	}

}
