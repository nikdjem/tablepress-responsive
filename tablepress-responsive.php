<?php
/**
 * Plugin Name: TablePress Responsive Stacked
 * Description: Makes TablePress tables responsive by converting them into stacked layout on mobile.
 * Version: 1.1
 * Author: Custom Plugin by Nikolay Djemerenov
 * Author URI: https://nikweb.eu    
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: tablepress-responsive
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Enqueue custom JavaScript and CSS
function tablepress_responsive_scripts() {
    wp_enqueue_script(
        'tablepress-responsive-js',
        plugin_dir_url( __FILE__ ) . 'tablepress-responsive.js',
        array(),
        '1.1',
        true
    );

    wp_enqueue_style(
        'tablepress-responsive-css',
        plugin_dir_url( __FILE__ ) . 'tablepress-responsive.css',
        array(),
        '1.1'
    );
}
add_action( 'wp_enqueue_scripts', 'tablepress_responsive_scripts' );
