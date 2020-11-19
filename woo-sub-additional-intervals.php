<?php
/*
Plugin Name: Additional Intervals for WooCommerce Subscriptions
Plugin URI: https://github.com/anant1811/Additional-Intervals-for-WooCommerce-Subscriptions
Description: This plugin adds additional intervals (7, 8, 9, 10, 11, 12 and 13) for WooCommerce Subscriptions. 
Version: 1.0.0
Contributors: wpnomad
Author: wpnomad
Author URI: https://github.com/anant1811
License: GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: additional-intervals-for-woocommerce-subscriptions
Domain Path:  /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

// Define plugin paths and URLs
define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WPPLUGIN_DIR', plugin_dir_path( __FILE__ ) );


// Create Settings Fields
include( plugin_dir_path( __FILE__ ) . 'includes/additional-interval-setting.php');

// Run the filters based on settings values

// Run filter for adding adding additional subscription intervals
$additional_interval = get_option( 'additional_interval_options' );
if(( $additional_interval) == 'yes' ) {
    function eg_extend_subscription_period_intervals( $intervals ) {
		$intervals[7] = sprintf( __( 'every %s', 'my-text-domain' ), WC_Subscriptions::append_numeral_suffix( 7 ) );
		$intervals[8] = sprintf( __( 'every %s', 'my-text-domain' ), WC_Subscriptions::append_numeral_suffix( 8 ) );
		$intervals[9] = sprintf( __( 'every %s', 'my-text-domain' ), WC_Subscriptions::append_numeral_suffix( 9 ) );
		$intervals[10] = sprintf( __( 'every %s', 'my-text-domain' ), WC_Subscriptions::append_numeral_suffix( 10 ) );
		$intervals[11] = sprintf( __( 'every %s', 'my-text-domain' ), WC_Subscriptions::append_numeral_suffix( 11 ) );
		$intervals[12] = sprintf( __( 'every %s', 'my-text-domain' ), WC_Subscriptions::append_numeral_suffix( 12 ) );
		$intervals[13] = sprintf( __( 'every %s', 'my-text-domain' ), WC_Subscriptions::append_numeral_suffix( 13 ) );
		return $intervals;
	}
	add_filter( 'woocommerce_subscription_period_interval_strings', 'eg_extend_subscription_period_intervals' );
  } 

?>