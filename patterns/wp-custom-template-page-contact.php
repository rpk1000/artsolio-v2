<?php
/**
 * Title: wp-custom-template-page-contact
 * Slug: artsolio2/wp-custom-template-page-contact
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Sticky Header"},"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"header","area":"uncategorized","align":"full"} /--></div>
<!-- /wp:group -->

<!-- wp:post-content /-->

<!-- wp:cover {"isUserOverlayColor":true,"customGradient":"linear-gradient(0deg,rgba(80,98,120,0.85) 0%,rgba(55,64,74,0.9) 100%)","sizeSlug":"large","metadata":{"name":"CTA"},"className":"art-cta","style":{"spacing":{"padding":{"top":"var:preset|spacing|48","bottom":"var:preset|spacing|48"}},"color":{"duotone":"var:preset|duotone|dark-grayscale"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover art-cta" style="padding-top:var(--wp--preset--spacing--48);padding-bottom:var(--wp--preset--spacing--48)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="background:linear-gradient(0deg,rgba(80,98,120,0.85) 0%,rgba(55,64,74,0.9) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"art-cta-content","layout":{"type":"constrained"}} -->
<div class="wp-block-group art-cta-content"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Ready to Get Started?', 'artsolio2');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Book a FREE consultation if you’re ready to discuss your project and next steps. Not quite ready? No problem. Send me a message with your questions and I’ll get back to you ASAP.', 'artsolio2');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('BOOK A CONSULTATION', 'artsolio2');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:template-part {"slug":"footer","area":"uncategorized"} /-->