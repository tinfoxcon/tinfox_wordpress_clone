<?php
/**
 * App Development Company functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package app-development-company
 * @since app-development-company 1.0
 */

if ( ! function_exists( 'app_development_company_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since app-development-company 1.0
	 *
	 * @return void
	 */
	function app_development_company_support() {

		load_theme_textdomain( 'app-development-company', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		add_theme_support( 'responsive-embeds' );
		
		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}

endif;

add_action( 'after_setup_theme', 'app_development_company_support' );

if ( ! function_exists( 'app_development_company_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since app-development-company 1.0
	 *
	 * @return void
	 */
	function app_development_company_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'app-development-company-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style( 
			'app-development-company-animate-css', 
			esc_url(get_template_directory_uri()).'/assets/css/animate.css' 
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'app-development-company-style' );

		wp_style_add_data( 'app-development-company-style', 'rtl', 'replace' );

		wp_enqueue_style( 'dashicons' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'app_development_company_styles' );

/* Enqueue Wow Js */
function app_development_company_scripts() {
	wp_enqueue_script( 
		'app-development-company-wow', esc_url(get_template_directory_uri()) . '/assets/js/wow.js', 
		array('jquery') 
	);
	wp_enqueue_script(
        'app-development-company-scroll-to-top', 
        esc_url(get_template_directory_uri()) . '/assets/js/scroll-to-top.js', 
        array(), 
        null, 
        true // Load in footer
    );
}
add_action( 'wp_enqueue_scripts', 'app_development_company_scripts' );

function app_development_company_theme_setting() {
	// Add block patterns
	require get_template_directory() . '/inc/block-pattern.php';

	// Add block Style
	require get_template_directory() . '/inc/block-style.php';

	// TGM
	require get_template_directory() . '/inc/tgm/plugin-activation.php';

	// Get Started
	require get_template_directory() . '/get-started/getstart.php';

	// Get Notice
	require get_template_directory() . '/get-started/notice.php';

	// Add Customizer
	require get_template_directory() . '/inc/customizer.php';
}	
add_action('after_setup_theme', 'app_development_company_theme_setting');	

