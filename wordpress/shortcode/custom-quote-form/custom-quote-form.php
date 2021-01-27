<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://phpdocs.com
 * @since             1.0.2
 * @package           Custom_Quote_Form
 *
 * @wordpress-plugin
 * Plugin Name:       Custom Quote Form
 * Plugin URI:        https://phpdocs.com
 * Description:       Custom Quote Form Develped for XYZ Org and you can access this Form by using CustomQuote
 * Version:           1.0.2
 * Author:            Muhammad Afzal
 * Author URI:        https://phpdocs.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       custom-quote-form
 * Domain Path:       /languages
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
define( 'CUSTOM_QUOTE_FORM_VERSION', '1.0.2' );

function CustomQuoteForm($attr){
	ob_start();
	include("template/quote.form.php");
	$content=ob_get_flush();
	return $content;
	 
}

add_shortcode('CustomQuote','CustomQuoteForm');

?>
