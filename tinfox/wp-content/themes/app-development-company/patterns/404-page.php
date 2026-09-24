<?php
/**
 * 404 Section
 * 
 * slug: app-development-company/404-page
 * title: 404 Page
 * categories: app-development-company
 */

return array(
    'title'      =>__( '404 Page', 'app-development-company' ),
    'categories' => array( 'app-development-company' ),
    'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-background-color has-background" style="padding-top:60px;padding-bottom:60px"><!-- wp:heading {"textAlign":"center","className":"not-found-heading","style":{"typography":{"fontSize":"200px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} -->
<h2 class="wp-block-heading has-text-align-center not-found-heading has-accent-color has-text-color has-link-color" style="font-size:200px">'. esc_html__('404','app-development-company') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"content-heading"} -->
<p class="has-text-align-center has-content-heading-font-size"><strong>'. esc_html__('Unfortunately we can’t find that page.','app-development-company') .'</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">'. esc_html__('The page you are looking for doesnt exist or has been moved. Try another url or go to the site homepage.','app-development-company') .'</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"width":75,"widthUnit":"%","buttonText":"Search","align":"center","backgroundColor":"accent"} /--></div>
<!-- /wp:group -->',
);