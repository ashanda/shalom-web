<?php
/**
 * Plugin Name: Woocommerce Product Builder Premium
 * Plugin URI: https://villatheme.com/extensions/woocommerce-product-builder/
 * Description: Increases sales with Building product configuration for your online store. Help build a complete product from small components
 * Version: 2.2.1
 * Author: VillaTheme
 * Author URI: https://villatheme.com
 * Requires PHP: 7.0
 * Requires at least: 5.0
 * Tested up to: 6.0
 * Elementor tested up to: 3.6.4
 * WC requires at least: 5.0
 * WC tested up to: 6.5
 * Copyright 2017-2022 VillaTheme.com. All rights reserved.
 *
 * Text Domain: woocommerce-product-builder
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


define( 'VI_WPRODUCTBUILDER_VERSION', '2.2.1' );
/**
 * Detect plugin. For use on Front End only.
 */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

if ( ! class_exists( 'VI_WPRODUCTBUILDER' ) ) {

	if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
		$init_file = WP_PLUGIN_DIR . DIRECTORY_SEPARATOR . "woocommerce-product-builder" . DIRECTORY_SEPARATOR . "includes" . DIRECTORY_SEPARATOR . "define.php";
		require_once $init_file;
	}

	class VI_WPRODUCTBUILDER {
		public function __construct() {
			register_activation_hook( __FILE__, array( $this, 'install' ) );
			register_deactivation_hook( __FILE__, array( $this, 'uninstall' ) );
			add_action( 'admin_notices', array( $this, 'global_note' ) );
		}

		/**
		 * Warring: WooCommerce is not active
		 */
		function global_note() {
			if ( ! is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
				deactivate_plugins( 'woocommerce-product-builder/woocommerce-product-builder.php' );
				unset( $_GET['activate'] );
				?>
                <div id="message" class="error">
                    <p><?php _e( 'Please install WooCommerce and active. WooCommerce Product Builder is going to working.', 'woocommerce-product-builder' ); ?></p>
                </div>
				<?php
			}
		}

		public function install() {
			global $wp_version;
			if ( version_compare( $wp_version, "5.0", "<" ) ) {
				deactivate_plugins( basename( __FILE__ ) ); // Deactivate our plugin
				wp_die( "This plugin requires WordPress version 2.9 or higher." );
			}
			flush_rewrite_rules();
		}

		public function uninstall() {
			flush_rewrite_rules();
		}
	}

	new VI_WPRODUCTBUILDER();
}