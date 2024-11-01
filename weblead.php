<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://webleadapp.com/wp/
 * @since             1.0.0
 * @package           Weblead
 *
 * @wordpress-plugin
 * Plugin Name:       weblead
 * Plugin URI:        https://webleadapp.com/wp/
 * Description:       Welcome to Weblead – this is very simple WordPress plugin that helps turn your website visitors into web push notification subscribers. 
 * Version:           1.1.0
 * Author:            Weblead Team
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       weblead
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WEBLEAD_VERSION', '1.1.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-weblead-activator.php
 */
function activate_weblead() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-weblead-activator.php';
	Weblead_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-weblead-deactivator.php
 */
function deactivate_weblead() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-weblead-deactivator.php';
	Weblead_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_weblead' );
register_deactivation_hook( __FILE__, 'deactivate_weblead' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-weblead.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_weblead() {

	$plugin = new Weblead();
	$plugin->run();

}
run_weblead();
