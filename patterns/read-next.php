<?php
/**
 * Title: read-next
 * Slug: artsolio2/read-next
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Read Next"},"align":"full","className":"art-more-case-studies","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull art-more-case-studies"><!-- wp:group {"align":"wide","style":{"layout":{"columnSpan":3},"spacing":{"margin":{"top":"var:preset|spacing|96"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--96)"><!-- wp:heading {"level":3,"style":{"layout":{"columnSpan":3}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size"><?php esc_html_e('Read Next', 'artsolio2');?></h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":10,"query":{"perPage":3,"pages":0,"offset":0,"postType":"page","order":"desc","orderBy":"rand","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"multiple_posts":["page"],"include_posts":[],"exclude_current":"artsolio2//wp-custom-template-page-articles"},"namespace":"advanced-query-loop","metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"art-query-grid-min-height","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top","justifyContent":"left"}} -->
<div class="wp-block-group art-query-grid-min-height"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"className":"art-img-link"} /-->

<!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|ink-900"},":hover":{"color":{"text":"var:preset|color|brand-300"}}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"lg"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"View project","showMoreOnNewLine":false,"excerptLength":25} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->