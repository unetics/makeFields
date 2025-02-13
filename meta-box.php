<?php
/**
 * Plugin Name: makeFields
 * Plugin URI: makeweb.com.au
 * Description: Create custom fields in WordPress.
 * Version: 4.16.3
 * Author: makeweb
 * Author URI: makeweb.com.au
 * License: GPL2+
 * Text Domain: meta-box
 * Domain Path: /languages/
 *
 * @package Meta Box
 */

if ( defined( 'ABSPATH' ) && ! defined( 'RWMB_VER' ) ) {
	require_once dirname( __FILE__ ) . '/inc/loader.php';
	$rwmb_loader = new RWMB_Loader();
	$rwmb_loader->init();
}

if(!function_exists('i_am_mw')) {
	function i_am_mw() {
		$current_user = wp_get_current_user();
		$email        = $current_user->user_email;
		$allowed      = [
			'makeweb.com.au'
		];
		$parts        = explode( '@', $email );
		$domain       = array_pop( $parts );
		if ( in_array( $domain, $allowed ) ) {
			return true;
		}
		return false;
	}
}