<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage app-development-company
 * @since app-development-company 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function app_development_company_customize_register( $wp_customize ) {
	$wp_customize->add_section( new App_Development_Company_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'App Development Pro', 'app-development-company' ),
		'button_text'      => __( 'Upgrade Pro', 'app-development-company' ),
		'url'              => 'https://www.wpradiant.net/products/app-development-wordpress-theme',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'app_development_company_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function app_development_company_custom_control_scripts() {
	wp_enqueue_script( 'app-development-company-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
	wp_enqueue_style( 'app-development-company-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'app_development_company_custom_control_scripts' );