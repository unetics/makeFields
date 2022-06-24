<?php
/**
 * Plugin Name: makeFields
 * Plugin URI: makeweb.com.au
 * Description: Create custom fields in WordPress.
 * Version: 4.16.1
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
