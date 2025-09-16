<?php
/**
 * Title: footer
 * Slug: artsolio2/footer
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"footer","metadata":{"name":"Site Footer"},"className":"art-site-footer","style":{"elements":{"link":{"color":{"text":"var:preset|color|canvas-50"},":hover":{"color":{"text":"var:preset|color|brand-300"}}}},"spacing":{"blockGap":"var:preset|spacing|4","padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16"}}},"backgroundColor":"ink-900","textColor":"canvas-50","fontSize":"sm","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<footer class="wp-block-group art-site-footer has-canvas-50-color has-ink-900-background-color has-text-color has-background has-link-color has-sm-font-size" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16)"><!-- wp:paragraph -->
<p><?php esc_html_e('© Robb Keele&nbsp;2025. All rights reserved', 'artsolio2');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"name":"Dot"},"className":"art-footer-bullet"} -->
<p class="art-footer-bullet"><?php esc_html_e('•', 'artsolio2');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sContact%2$s', 'artsolio2' ), '<a href="' . esc_url( 'https://artsolioslidedev01.local/contact/' ) . '" data-type="page" data-id="410">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"name":"Dot"},"className":"art-footer-bullet"} -->
<p class="art-footer-bullet"><?php esc_html_e('•', 'artsolio2');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sPrivacy Policy%2$s', 'artsolio2' ), '<a href="' . esc_url( 'https://riotters.com/policies/privacy-policy' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></footer>
<!-- /wp:group -->