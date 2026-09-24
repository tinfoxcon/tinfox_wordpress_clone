<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage app-development-company
 * @since app-development-company 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since app-development-company 1.0
	 *
	 * @return void
	 */
	function app_development_company_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'app-development-company-border',
				'label' => esc_html__( 'Borders', 'app-development-company' ),
			)
		);

		
	}
	add_action( 'init', 'app_development_company_register_block_styles' );
}