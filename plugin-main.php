<?php 
/**
 * Plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 *@link              http://anthonyho-007.com
 *@since  			 1.0.0
 *@package 			 Tony/Main
 *
 *@banner-spinner
 *Plugin Name:       Plugin backbone structure 
 *Description:       A plugin backbone structure for a kick start of a project
 *Version:			 1.0.0
 *Author: 			 Anthony Ho
 *Author URL: 		 http://anthonyho-007.com/
 *Domain Path:       /languages
 */

// IF this file is called directly, abort
if (! defined('WPINC')){
	die;
}


/**
 *The code that runs during plugin activation.
 *this action is documented in includes/class-plugin-main-activator.php
**/
function activate_plugin_main()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-plugin-main-activator.php';
	Tony\Main\Activator::getInstance()->run();	
}
register_activation_hook(__FILE__, 'activate_plugin_main');


/**
 * The code that runs during plugin uninstallation (when it is deleted).
 * This action is documented in includes/class-plugin-main-uninstaller.php
 */
function deactivate_plugin_main()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-plugin-main-deactivator.php';
	Tony\Main\Deactivator::getInstance()->run();
}
register_deactivation_hook(__FILE__,  'deactivate_plugin-main');


/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site-hooks.
 */

require plugin_dir_path(__FILE__) . 'includes/class-plugin-main.php';

/**
 * Helper function to make the plugin globally accessible.
 *
 * @since    1.0.0
 */
function plugin_main() 
{
	return \Tony\Main\Main::getInstance();
}


/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plugin_main()
{
	plugin_main()->run();
}

run_plugin_main();







 ?>
