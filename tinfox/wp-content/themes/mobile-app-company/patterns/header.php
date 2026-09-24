<?php
/**
 * Title: Header
 * Slug: mobile-app-company/header
 * Categories: header
 * Block Types: core/template-part/header
 */
?>


<!-- wp:group {"className":"topheader-area","style":{"spacing":{"padding":{"top":"15px","bottom":"15px"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group topheader-area has-primary-background-color has-background" style="padding-top:15px;padding-bottom:15px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":114,"width":"25px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/icon-image.png" alt="" class="wp-image-114" style="width:25px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontFamily":"bricolage-grotesque"} -->
<p class="has-text-align-left has-base-color has-text-color has-link-color has-bricolage-grotesque-font-family" style="font-size:15px;font-style:normal;font-weight:500"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, ','mobile-app-company'); ?> </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"header-area","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group header-area has-base-background-color has-background" style="margin-top:0;margin-bottom:0"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}}} -->
<div class="wp-block-columns" style="padding-top:20px;padding-bottom:20px"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:site-title {"className":"logo-heading","style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"30px"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontFamily":"bricolage-grotesque"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","className":"menu-boxsearchbox"} -->
<div class="wp-block-column is-vertically-aligned-center searchbox" style="flex-basis:50%"><!-- wp:navigation {"textColor":"contrast","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"14px","fontFamily":"bricolage-grotesque"} -->
<!-- wp:navigation-link {"label":"HOME","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"PAGES","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"SERVICES","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"BLOGS","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"12%","className":"search-btn"} -->
<div class="wp-block-column is-vertically-aligned-center search-btn" style="flex-basis:12%"><!-- wp:search {"label":"Search","showLabel":false,"width":50,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"align":"center"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"18%","className":"head-btn","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center head-btn" style="flex-basis:18%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"left":"30px","right":"30px","top":"8px","bottom":"8px"}},"border":{"width":"0px","style":"none","radius":"30px"},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"bricolage-grotesque"} -->
<div class="wp-block-button has-custom-font-size has-bricolage-grotesque-font-family" style="font-size:14px;font-style:normal;font-weight:600"><a class="wp-block-button__link has-base-color has-text-color has-link-color wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:30px;padding-top:8px;padding-right:30px;padding-bottom:8px;padding-left:30px"><?php echo esc_html('GET CONSULTATION  ','mobile-app-company'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->