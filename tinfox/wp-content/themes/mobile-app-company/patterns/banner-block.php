<?php
/**
 * Title: Banner Block
 * Slug: mobile-app-company/banner-block
 * Categories: banner
 * Block Types: core/template-part/banner-block
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/banner-main-image.png","id":30,"dimRatio":0,"overlayColor":"black","isUserOverlayColor":true,"minHeight":620,"minHeightUnit":"px","isDark":false,"tagName":"main","className":"wp-block-group alignfull","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
<main class="wp-block-cover is-light wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:620px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-30" alt="" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/banner-main-image.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"slider-banner","textColor":"base"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center slider-banner has-base-color has-text-color"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"slider-content"} -->
<div class="wp-block-column is-vertically-aligned-center slider-content" style="flex-basis:50%"><!-- wp:heading {"level":4,"className":"short-heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"12px","textTransform":"uppercase","letterSpacing":"1px"},"color":{"background":"#fdd3bd"}},"textColor":"contrast"} -->
<h4 class="wp-block-heading short-heading has-contrast-color has-text-color has-background has-link-color" style="background-color:#fdd3bd;font-size:12px;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html('BOOST YOUR BUSINESS ','mobile-app-company'); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"className":"heading-banner","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"45px","textTransform":"capitalize"}},"textColor":"contrast","fontFamily":"bricolage-grotesque"} -->
<h2 class="wp-block-heading heading-banner has-contrast-color has-text-color has-bricolage-grotesque-font-family" style="font-size:45px;font-style:normal;font-weight:700;text-transform:capitalize"><?php echo esc_html('It is the app that will save','mobile-app-company'); ?><br><?php echo esc_html('you money in the long run','mobile-app-company'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"}},"textColor":"contrast","fontFamily":"inter"} -->
<p class="has-text-align-left has-contrast-color has-text-color has-inter-font-family" style="font-size:14px;font-style:normal;font-weight:400"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ','mobile-app-company'); ?><br><?php echo esc_html('incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ','mobile-app-company'); ?> <br><?php echo esc_html('exercitation ullamco. ','mobile-app-company'); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"12px","bottom":"12px"}},"border":{"radius":"30px"},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","letterSpacing":"1px"}},"fontFamily":"bricolage-grotesque"} -->
<div class="wp-block-button has-custom-font-size has-bricolage-grotesque-font-family" style="font-size:12px;font-style:normal;font-weight:600;letter-spacing:1px;text-transform:uppercase"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:30px;padding-top:12px;padding-right:var(--wp--preset--spacing--30);padding-bottom:12px;padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html('READ MORE ','mobile-app-company'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"contact-box","style":{"color":{"background":"#feddcd"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group contact-box has-background" style="background-color:#feddcd"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}},"textColor":"contrast","fontFamily":"bricolage-grotesque"} -->
<h6 class="wp-block-heading has-text-align-left has-contrast-color has-text-color has-link-color has-bricolage-grotesque-font-family" style="font-size:14px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html('Call Us Here! ','mobile-app-company'); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"contrast","fontFamily":"bricolage-grotesque"} -->
<p class="has-contrast-color has-text-color has-link-color has-bricolage-grotesque-font-family" style="margin-top:0;margin-bottom:0;font-size:22px;font-style:normal;font-weight:600"><?php echo esc_html('+1 123 456 7890 ','mobile-app-company'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","className":"banner-img"} -->
<div class="wp-block-column is-vertically-aligned-center banner-img" style="flex-basis:50%"><!-- wp:image {"id":35,"width":"700px","aspectRatio":"1.5555555555555556","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"right"} -->
<figure class="wp-block-image alignright size-full is-resized"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/banner-right-image.png" alt="" class="wp-image-35" style="aspect-ratio:1.5555555555555556;object-fit:cover;width:700px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"banner-box-1","style":{"border":{"radius":"30px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group banner-box-1 has-base-background-color has-background" style="border-radius:30px;margin-top:0;margin-bottom:0;padding-top:10px;padding-right:0;padding-bottom:10px;padding-left:0"><!-- wp:columns {"verticalAlignment":"center","className":"box-1row"} -->
<div class="wp-block-columns are-vertically-aligned-center box-1row"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":120,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/banner-contact-image.png" alt="" class="wp-image-120"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%","className":"contact-content"} -->
<div class="wp-block-column is-vertically-aligned-center contact-content" style="flex-basis:70%"><!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"}},"textColor":"contrast","fontFamily":"bricolage-grotesque"} -->
<h6 class="wp-block-heading has-contrast-color has-text-color has-link-color has-bricolage-grotesque-font-family" style="font-size:14px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html('Teresa Potter ','mobile-app-company'); ?> </h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"#736c6c"}}},"color":{"text":"#736c6c"}},"fontFamily":"bricolage-grotesque"} -->
<p class="has-text-color has-link-color has-bricolage-grotesque-font-family" style="color:#736c6c;margin-top:0;margin-bottom:0;font-size:12px;font-style:normal;font-weight:400"><?php echo esc_html('Software Developer ','mobile-app-company'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"banner-box-2","style":{"background":{"backgroundImage":{"url":"<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/banner-box-image.png","id":159,"source":"file","title":"bg (1) (1)"},"backgroundSize":"cover","backgroundPosition":"50% 50%"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group banner-box-2"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"}},"textColor":"contrast","fontFamily":"bricolage-grotesque"} -->
<h5 class="wp-block-heading has-contrast-color has-text-color has-link-color has-bricolage-grotesque-font-family" style="font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html('Management ','mobile-app-company'); ?><br><?php echo esc_html('Software ','mobile-app-company'); ?></h5>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"90%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:90%"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":6,"style":{"typography":{"fontSize":"10px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}},"fontFamily":"bricolage-grotesque"} -->
<h6 class="wp-block-heading has-bricolage-grotesque-font-family" style="font-size:10px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html('Transactions ','mobile-app-company'); ?> </h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"fontFamily":"bricolage-grotesque"} -->
<p class="has-bricolage-grotesque-font-family" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-size:20px;font-style:normal;font-weight:600"><?php echo esc_html('98 ','mobile-app-company'); ?> </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":6,"style":{"typography":{"fontSize":"10px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}},"fontFamily":"bricolage-grotesque"} -->
<h6 class="wp-block-heading has-bricolage-grotesque-font-family" style="font-size:10px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html('Total Balance ','mobile-app-company'); ?> </h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontFamily":"bricolage-grotesque"} -->
<p class="has-bricolage-grotesque-font-family" style="margin-top:0;margin-bottom:0;font-size:20px;font-style:normal;font-weight:600"><?php echo esc_html('$1,28,093 ','mobile-app-company'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></main>
<!-- /wp:cover -->