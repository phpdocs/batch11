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
 * @since             1.0.3
 * @package           Customs_Ads_For_Post
 *
 * @wordpress-plugin
 * Plugin Name:       Custom Ads For Post
 * Plugin URI:        https://phpdocs.com
 * Description:       This is Custom Developed Plugin for our Client who want's to display some specific content to their Post Top & Bottom.
 * Version:           1.0.3
 * Author:            Muhammad Afzal
 * Author URI:        https://phpdocs.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       customs-ads-for-post
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
define( 'CUSTOMS_ADS_FOR_POST_VERSION', '1.0.3' );


//Method to add Something to Post Top & Bottom
function AddCustomContentToPost($content){
	$HeadingContent="<img src='https://www.erozgaar.pitb.gov.pk/system/files/20-Aug-Banner1.png' width='100%' height='50px' />";
	$FooterContent="<img src='https://www.erozgaar.pitb.gov.pk/system/files/20-Aug-Banner1.png' width='100%' height='50px' />";

	return $HeadingContent.$content.$FooterContent;
}

add_filter('the_content','AddCustomContentToPost');



function EnQueuScript(){
	wp_enqueue_script( 'my-custom-jquery-v3', 'https://code.jquery.com/jquery-3.5.1.min.js', false );
	wp_enqueue_script( 'my-custom-js', plugin_dir_url( __FILE__ ).'cjs.js', false );

}

add_action('wp_enqueue_scripts','EnQueuScript');
