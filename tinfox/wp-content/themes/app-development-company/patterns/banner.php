<?php
/**
 * Banner Section
 * 
 * slug: app-development-company/banner
 * title: Banner
 * categories: app-development-company
 */

return array(
    'title'      =>__( 'Banner', 'app-development-company' ),
    'categories' => array( 'app-development-company' ),
    'content'    => '<!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/banner.png","id":21,"dimRatio":0,"overlayColor":"black","minHeight":600,"isDark":false,"tagName":"main","className":"wp-block-group alignfull"} -->
<main class="wp-block-cover is-light wp-block-group alignfull" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-21" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"wow fadeInUp","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group wow fadeInUp"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"slider-banner"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center slider-banner"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"style":{"color":{"background":"var(--wp--preset--color--secaccent)"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"typography":{"letterSpacing":"1px"}},"textColor":"primary","className":"banner-top-title","fontSize":"medium","fontFamily":"bricolage-grotesque"} -->
<p class="banner-top-title has-primary-color has-text-color has-background has-bricolage-grotesque-font-family has-medium-font-size" style="background-color:var(--wp--preset--color--secaccent);padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);letter-spacing:1px">'. esc_html__('BOOST YOUR BUSINESS','app-development-company') .'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontSize":"50px","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading has-primary-color has-text-color has-bricolage-grotesque-font-family" style="font-size:50px;font-style:normal;font-weight:700">'. esc_html__('We Can Help Turn Your','app-development-company') .'<br>'. esc_html__('Ideas Into Reality!','app-development-company') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.8"}},"textColor":"primary","fontSize":"medium","fontFamily":"inter"} -->
<p class="has-text-align-left has-primary-color has-text-color has-inter-font-family has-medium-font-size" style="line-height:1.8">'. esc_html__('Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','app-development-company') .'</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","textColor":"background","style":{"border":{"radius":"30px"}},"className":"theme-btn","fontFamily":"bricolage-grotesque"} -->
<div class="wp-block-button theme-btn has-bricolage-grotesque-font-family"><a class="wp-block-button__link has-background-color has-accent-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:30px"><strong>'. esc_html__('READ MORE','app-development-company') .'</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wow fadeInUp","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group wow fadeInUp"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"30%","style":{"color":{"background":"var(--wp--preset--color--secaccent)"},"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"className":"phone-number-box"} -->
<div class="wp-block-column phone-number-box has-background" style="background-color:var(--wp--preset--color--secaccent);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--80);flex-basis:30%"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"fontSize":"small","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading has-bricolage-grotesque-font-family has-small-font-size" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--80);padding-bottom:0;padding-left:var(--wp--preset--spacing--80);font-style:normal;font-weight:400">'. esc_html__('Call Us Here','app-development-company') .'</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"},"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|20"}}},"fontSize":"content-heading","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading has-text-align-left has-bricolage-grotesque-font-family has-content-heading-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80);font-style:normal;font-weight:600">+1 123 456 7890</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></main>
<!-- /wp:cover -->',
);