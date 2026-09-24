<?php
/**
 * Title: Hidden No Results Content
 * Slug: mobile-app-company/hidden-no-results-content
 * Inserter: no
 */
?>
<!-- wp:paragraph -->
<p>
<?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'mobile-app-company' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'mobile-app-company' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'mobile-app-company' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'mobile-app-company' ); ?>","buttonUseIcon":true} /-->
