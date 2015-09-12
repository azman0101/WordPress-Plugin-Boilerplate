<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/azman0101/WordPress-Plugin-Boilerplate
 * @since             1.0.0
 * @package           Update_compare
 *
 * @wordpress-plugin
 * Plugin Name:       Update Comparison Plugin 
 * Plugin URI:        https://github.com/azman0101/WordPress-Plugin-Boilerplate/update-compare-uri/
 * Description:       This plugins will help you to decide if modifications (changelog) made to another plugin are good or not...
 * Version:           1.0.0
 * Author:            Azman0101
 * Author URI:        https://github.com/azman0101/WordPress-Plugin-Boilerplate/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       update-compare
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-update-compare-activator.php
 */
function activate_update_compare() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-update-compare-activator.php';
	Update_Compare_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-update-compare-deactivator.php
 */
function deactivate_update_compare() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-update-compare-deactivator.php';
	Update_Compare_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_update_compare' );
register_deactivation_hook( __FILE__, 'deactivate_update_compare' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-update-compare.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_update_compare() {

	$plugin = new Update_Compare();
	$plugin->run();

}
run_update_compare();
