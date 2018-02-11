<?php
/**
 * Class BustedVars
 *
 * @package reBusted
 */

class BustedVars extends WP_UnitTestCase {

	public function setUp() {
		parent::setUp();
		Re_Busted::init();
	}

	public function test_priority() {
		$this->assertEquals( PHP_INT_MAX - 1, Re_Busted::get_priority() );
	}

	public function test_version_slug() {
		$this->assertEquals( 'b-modified', Re_Busted::get_version_slug() );
	}
}
