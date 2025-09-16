<?php
/**
 * Title: 404
 * Slug: artsolio2/404
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Sticky Header"},"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"header","area":"uncategorized","align":"full"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Hero"},"className":"art-page-resource art-container-main art-hero","style":{"spacing":{"margin":{"top":"-77px"},"padding":{"top":"80px"}}},"gradient":"hero","layout":{"type":"constrained"}} -->
<div class="wp-block-group art-page-resource art-container-main art-hero has-hero-gradient-background has-background" style="margin-top:-77px;padding-top:80px"><!-- wp:group {"metadata":{"name":"Content Container"},"align":"wide","className":"art-hero-content-container","style":{"spacing":{"padding":{"top":"var:preset|spacing|24"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide art-hero-content-container" style="padding-top:var(--wp--preset--spacing--24)"><!-- wp:columns {"align":"wide","className":"art-columns","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|96"}}}} -->
<div class="wp-block-columns alignwide art-columns"><!-- wp:column {"verticalAlignment":"top","width":"58.33%","metadata":{"name":"Left Col"},"className":"art-col-left","style":{"spacing":{"blockGap":"var:preset|spacing|24"}}} -->
<div class="wp-block-column is-vertically-aligned-top art-col-left" style="flex-basis:58.33%"><!-- wp:group {"className":"art-align-center-sm","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group art-align-center-sm"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e('404.', 'artsolio2');?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"fontSize":"lg"} -->
<h2 class="wp-block-heading has-lg-font-size"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$sPage not found.%2$s', 'artsolio2' ), '<strong>', '</strong>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"layout":{"columnSpan":2}}} -->
<p><?php esc_html_e('Well that’s embarrassing. You’ve landed on a page that doesn’t exist anymore, never existed, or just refuses to work.', 'artsolio2');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"","metadata":{"name":"Right Col"},"className":"art-col-right"} -->
<div class="wp-block-column is-vertically-aligned-top art-col-right"><!-- wp:group {"className":"art-quote","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group art-quote"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"999px"},"layout":{"selfStretch":"fit","flexSize":null}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/avatar-muhammad-ali.png" alt="<?php esc_attr_e('Cartoon illustration of Muhammad Ali.', 'artsolio2');?>" class="" style="border-radius:999px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><?php esc_html_e('“You don’t lose if you get knocked down; you lose if you stay down.”', 'artsolio2');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><?php /* Translators: 1. is the start of a 'em' HTML element, 2. is the start of a 'em' HTML element, 3. is the start of a 'strong' HTML element, 4. is the start of a 'em' HTML element, 5. is the start of a 'em' HTML element, 6. is the start of a 'em' HTML element, 7. is the start of a 'em' HTML element, 8. is the start of a 'em' HTML element, 9. is the end of a 'em' HTML element, 10. is the end of a 'em' HTML element, 11. is the end of a 'em' HTML element, 12. is the end of a 'em' HTML element, 13. is the end of a 'em' HTML element, 14. is the end of a 'strong' HTML element, 15. is the end of a 'em' HTML element, 16. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( '%1$s%2$s%3$s~ %4$s%5$s%6$s%7$s%8$sMuhammad Ali%9$s%10$s%11$s%12$s%13$s%14$s%15$s%16$s', 'artsolio2' ), '<em>', '<em>', '<strong>', '<em>', '<em>', '<em>', '<em>', '<em>', '</em>', '</em>', '</em>', '</em>', '</em>', '</strong>', '</em>', '</em>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Container"},"className":"art-container-main","style":{"spacing":{"margin":{"top":"var:preset|spacing|96","bottom":"var:preset|spacing|96"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group art-container-main" style="margin-top:var(--wp--preset--spacing--96);margin-bottom:var(--wp--preset--spacing--96)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|32"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"lineHeight":"1.3"}}} -->
<h3 class="wp-block-heading" style="line-height:1.3"><?php esc_html_e('Here\'s a galago and a story about a lost sock.', 'artsolio2');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Once upon a time, a %1$stiny superhero%2$s Galago set out on a daring mission: to rescue the world’s lost socks. After countless leaps and heroic squeaks, it found… this one. Bright, stripy, and alone.', 'artsolio2' ), '<a href="' . esc_url( 'https://artsolioslidedev01.local/portfolio/product-design-case-study-tidy-hero/' ) . '" data-type="page" data-id="757">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'But while the sock’s quest has ended here, your journey doesn’t have to. The real adventure begins back on my %1$shomepage%2$s.', 'artsolio2' ), '<a href="' . esc_url( 'https://artsolioslidedev01.local/' ) . '" data-type="page" data-id="1228">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/404-galago-lost-sock.webp" alt="<?php esc_attr_e('Cartoon of a small Galago with a cape holding a brightly-colored sock.', 'artsolio2');?>" class=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"uncategorized"} /-->