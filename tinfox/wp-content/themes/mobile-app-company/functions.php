<?php
/**
 * Mobile App Company functions
 */

if ( ! function_exists( 'mobile_app_company_styles' ) ) :
	function mobile_app_company_styles() {
		// Register theme stylesheet.
		wp_register_style('mobile-app-company-style',
			get_template_directory_uri() . '/style.css',array(),
			wp_get_theme()->get( 'Version' )
		);
		// Register theme custom code js.
		wp_enqueue_script( 'customcode', 
			get_template_directory_uri() . '/assets/js/customcode.js', array( 'jquery' ) );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'mobile-app-company-style' );

		wp_style_add_data( 'mobile-app-company-style', 'rtl', 'replace' );

		wp_enqueue_script( 'mobile-app-company-custom-script', get_theme_file_uri( '/assets/js/custom-script.js' ), array( 'jquery' ), true );
	}
endif;
add_action( 'wp_enqueue_scripts', 'mobile_app_company_styles' );

if ( ! function_exists( 'mobile_app_company_setup' ) ) :
function mobile_app_company_setup() {

    load_theme_textdomain( 'mobile-app-company', get_template_directory() . '/languages' );
	
	// Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'mobile_app_company_custom_background_args', array(
	    'default-color' => 'ffffff',
	    'default-image' => '',
    ) ) );

	/**
	 * About Theme Function
	 */
	require get_theme_file_path( '/about-theme/about-theme.php' );

	/**
	 * Customizer
	 */
	require get_template_directory() . '/inc/customizer.php';

}
endif; 
add_action( 'after_setup_theme', 'mobile_app_company_setup' );