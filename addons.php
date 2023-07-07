<?php
/**
 * Plugin Name: Elementor Addon
 * Description: Simple my custom widgets for Elementor.
 * Version:     1.0.0
 * Author:      Monirul Islam
 * Author URI:  https://github.com/dev-monirul
 * Text Domain: elementor-addon
 */

function register_my_custom_widget( $widgets_manager ) {

    require_once( __DIR__ . '/widgets/my-custom-widget-1.php' );

    $widgets_manager->register( new \Elementor_My_Custom_Widget_1() );
}
add_action( 'elementor/widgets/register', 'register_my_custom_widget');
