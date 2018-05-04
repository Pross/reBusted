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

	public function test_version_slug() {
		$this->assertEquals( 'b-modified', Re_Busted::get_version_slug() );
	}
}
