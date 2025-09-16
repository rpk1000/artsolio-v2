<?php
/**
 * Title: header
 * Slug: artsolio2/header
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"header","metadata":{"name":"Site header"},"className":"art-site-header","style":{"position":{"type":""},"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12"}}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group art-site-header" style="padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12)"><!-- wp:group {"align":"full","className":"art-container-main","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull art-container-main"><!-- wp:image {"lightbox":{"enabled":false},"width":"161px","height":"auto","sizeSlug":"large","linkDestination":"custom","className":"art-header-logo"} -->
<figure class="wp-block-image size-large is-resized art-header-logo"><a href="https://artsolioslidedev01.local/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/artsolio-logo.svg" alt="" style="width:161px;height:auto"/></a></figure>
<!-- /wp:image -->

<!-- wp:navigation {"ref":5,"icon":"menu","className":"art-header-nav"} /-->

<!-- wp:buttons {"className":"art-header-button art-hide-sm"} -->
<div class="wp-block-buttons art-header-button art-hide-sm"><!-- wp:button {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-top:4px;padding-bottom:4px"><?php esc_html_e('Book a Consultation', 'artsolio2');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->