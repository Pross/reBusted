<?php
/**
 * Class BustedScripts
 *
 * @package reBusted
 */

class BustedScripts extends WP_UnitTestCase {

	public function setUp() {
		parent::setUp();
		wp_enqueue_script( 'busted-test', plugins_url( 'busted/tests/test.js' ) );
	}

	public function test_enqueued() {
		$this->assertFalse( wp_style_is( 'busted-test', 'enqueued' ) );
	}

	public function test_enqueued_url() {
		Re_Busted::wp_print_scripts();
		$busted = $GLOBALS['wp_scripts']->registered['busted-test'];
		$this->assertFalse( wp_style_is( 'busted-test', 'done' ) );
		$this->assertEquals( '-b-modified-' . BUSTEDTESTING, $busted->ver );
	}

}
