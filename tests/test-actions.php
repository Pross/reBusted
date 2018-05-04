<?php
/**
 * Class BustedActions
 *
 * @package reBusted
 */

class BustedActions extends WP_UnitTestCase {

	public function setUp() {
		parent::setUp();
		Re_Busted::init();
	}

	public function test_init() {
		$this->assertEquals( 10, has_action( 'init', array( 'Re_Busted', 'hooks' ) ) );
	}

	public function test_admin_init() {
		$this->assertEquals( 10, has_action( 'admin_init', array( 'Re_Busted', 'hooks' ) ) );
	}

	public function test_wp_enqueue_scripts() {
		$this->assertEquals( PHP_INT_MAX - 1, has_action( 'wp_enqueue_scripts', array( 'Re_Busted', 'wp_print_scripts' ) ) );
	}
}
