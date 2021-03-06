<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.milsuite.mil
 * @since             1.0.0
 * @package           Custom_role
 *
 * @wordpress-plugin
 * Plugin Name:       milTech_Custom_role
 * Plugin URI:        https://www.milsuite.mil
 * Description:       Custom Role creator plugin for milUniversity
 * Version:           1.0.0
 * Author:            milTech 
 * Author URI:        https://www.milsuite.mil
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       custom_role
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-custom_role-activator.php
 */
function activate_custom_role() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-custom_role-activator.php';
	Custom_role_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-custom_role-deactivator.php
 */
function deactivate_custom_role() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-custom_role-deactivator.php';
	Custom_role_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_custom_role' );
register_deactivation_hook( __FILE__, 'deactivate_custom_role' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-custom_role.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_custom_role() {

	$plugin = new Custom_role();
	$plugin->run();

}
run_custom_role();
