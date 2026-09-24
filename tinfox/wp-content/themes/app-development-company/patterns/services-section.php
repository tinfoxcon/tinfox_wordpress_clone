<?php
/**
 * Services Section
 * 
 * slug: app-development-company/services-section
 * title: Services Section
 * categories: app-development-company
 */

return array(
    'title'      =>__( 'Services Section', 'app-development-company' ),
    'categories' => array( 'app-development-company' ),
    'content'    => '<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"services-box","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group services-box"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","letterSpacing":"2px"}},"className":"wow fadeInUp","fontSize":"upper-heading","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading has-text-align-center wow fadeInUp has-bricolage-grotesque-font-family has-upper-heading-font-size" style="font-style:normal;font-weight:400;letter-spacing:2px;text-transform:uppercase">'. esc_html__('OUR SERVICES','app-development-company') .'</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"className":"wow fadeInUp","fontFamily":"bricolage-grotesque"} -->
<h3 class="wp-block-heading has-text-align-center wow fadeInUp has-bricolage-grotesque-font-family" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50);font-size:40px;font-style:normal;font-weight:600">'. esc_html__('Awesome Services To Grow Your','app-development-company') .'<br>'. esc_html__('Business Value','app-development-company') .'</h3>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"50px","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","className":"wow fadeInUp"} -->
<div class="wp-block-columns alignwide wow fadeInUp"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"className":"service-inner-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group service-inner-box"><!-- wp:image {"id":10,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/services1.png" alt="" class="wp-image-10"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","right":"var:preset|spacing|80"}}},"backgroundColor":"background","textColor":"accent","className":"services-inner-short","fontSize":"extra-small","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading services-inner-short has-accent-color has-background-background-color has-text-color has-background has-link-color has-bricolage-grotesque-font-family has-extra-small-font-size" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--30);font-style:normal;font-weight:500;letter-spacing:1px">'. esc_html__('BUSINESS SOLUTIONS','app-development-company') .'</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"className":"service-inner-heading","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading service-inner-heading has-bricolage-grotesque-font-family" style="font-size:22px">'. esc_html__('IT Management and Solution','app-development-company') .'</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"className":"service-inner-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group service-inner-box"><!-- wp:image {"id":28,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/services2.png" alt="" class="wp-image-28"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","right":"var:preset|spacing|80"}}},"backgroundColor":"background","textColor":"accent","className":"services-inner-short","fontSize":"extra-small","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading services-inner-short has-accent-color has-background-background-color has-text-color has-background has-link-color has-bricolage-grotesque-font-family has-extra-small-font-size" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--30);font-style:normal;font-weight:500;letter-spacing:1px">'. esc_html__('BUSINESS SOLUTIONS','app-development-company') .'</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"className":"service-inner-heading","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading service-inner-heading has-bricolage-grotesque-font-family" style="font-size:22px">'. esc_html__('Productivity Software','app-development-company') .'</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"className":"service-inner-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group service-inner-box"><!-- wp:image {"id":29,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/services3.png" alt="" class="wp-image-29"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","right":"var:preset|spacing|80"}}},"backgroundColor":"background","textColor":"accent","className":"services-inner-short","fontSize":"extra-small","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading services-inner-short has-accent-color has-background-background-color has-text-color has-background has-link-color has-bricolage-grotesque-font-family has-extra-small-font-size" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--30);font-style:normal;font-weight:500;letter-spacing:1px">'. esc_html__('BUSINESS SOLUTIONS','app-development-company') .'</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"className":"service-inner-heading","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading service-inner-heading has-bricolage-grotesque-font-family" style="font-size:22px">'. esc_html__('Advanced Cyber Security','app-development-company') .'</h2>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","className":"wow fadeInUp"} -->
<div class="wp-block-columns alignwide wow fadeInUp"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"className":"service-inner-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group service-inner-box"><!-- wp:image {"id":28,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/services1.png" alt="" class="wp-image-28"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","right":"var:preset|spacing|80"}}},"backgroundColor":"background","textColor":"accent","className":"services-inner-short","fontSize":"extra-small","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading services-inner-short has-accent-color has-background-background-color has-text-color has-background has-link-color has-bricolage-grotesque-font-family has-extra-small-font-size" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--30);font-style:normal;font-weight:500;letter-spacing:1px">'. esc_html__('BUSINESS SOLUTIONS','app-development-company') .'</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"className":"service-inner-heading","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading service-inner-heading has-bricolage-grotesque-font-family" style="font-size:22px">'. esc_html__('Productivity Software','app-development-company') .'</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"className":"service-inner-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group service-inner-box"><!-- wp:image {"id":29,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/services2.png" alt="" class="wp-image-29"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","right":"var:preset|spacing|80"}}},"backgroundColor":"background","textColor":"accent","className":"services-inner-short","fontSize":"extra-small","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading services-inner-short has-accent-color has-background-background-color has-text-color has-background has-link-color has-bricolage-grotesque-font-family has-extra-small-font-size" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--30);font-style:normal;font-weight:500;letter-spacing:1px">'. esc_html__('BUSINESS SOLUTIONS','app-development-company') .'</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"className":"service-inner-heading","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading service-inner-heading has-bricolage-grotesque-font-family" style="font-size:22px">'. esc_html__('Advanced Cyber Security','app-development-company') .'</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"className":"service-inner-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group service-inner-box"><!-- wp:image {"id":10,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/services3.png" alt="" class="wp-image-10"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","right":"var:preset|spacing|80"}}},"backgroundColor":"background","textColor":"accent","className":"services-inner-short","fontSize":"extra-small","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading services-inner-short has-accent-color has-background-background-color has-text-color has-background has-link-color has-bricolage-grotesque-font-family has-extra-small-font-size" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--30);font-style:normal;font-weight:500;letter-spacing:1px">'. esc_html__('BUSINESS SOLUTIONS','app-development-company') .'</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"className":"service-inner-heading","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading service-inner-heading has-bricolage-grotesque-font-family" style="font-size:22px">'. esc_html__('IT Management and Solution','app-development-company') .'</h2>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
