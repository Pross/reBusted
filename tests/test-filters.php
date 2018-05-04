<?php
/**
 * Class BustedFilters
 *
 * @package reBusted
 */

class BustedFilters extends WP_UnitTestCase {

	public function setUp() {
		parent::setUp();
		Re_Busted::init();
	}

	public function test_stylesheet_uri() {
		$this->assertEquals( PHP_INT_MAX - 1, has_filter( 'stylesheet_uri', array( 'Re_Busted', 'stylesheet_uri' ) ) );
	}

	public function test_locale_stylesheet_uri() {
		$this->assertEquals( PHP_INT_MAX - 1, has_filter( 'locale_stylesheet_uri', array( 'Re_Busted', 'stylesheet_uri' ) ) );
	}
}
