<?php
App::uses('Basquetbol', 'Model');

/**
 * Basquetbol Test Case
 *
 */
class BasquetbolTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.basquetbol'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Basquetbol = ClassRegistry::init('Basquetbol');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Basquetbol);

		parent::tearDown();
	}

}
