<?php
/**
 * Title: wp-custom-template-post-articles
 * Slug: artsolio2/wp-custom-template-post-articles
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Sticky Header"},"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"header","area":"uncategorized","align":"full"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Hero"},"className":"art-container-main art-hero","style":{"spacing":{"margin":{"top":"-77px","bottom":"var:preset|spacing|96"},"padding":{"top":"80px"}}},"gradient":"hero","layout":{"type":"constrained"}} -->
<div class="wp-block-group art-container-main art-hero has-hero-gradient-background has-background" style="margin-top:-77px;margin-bottom:var(--wp--preset--spacing--96);padding-top:80px"><!-- wp:group {"metadata":{"name":"Content Container"},"align":"wide","className":"art-hero-content-container","style":{"spacing":{"padding":{"top":"var:preset|spacing|24"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide art-hero-content-container" style="padding-top:var(--wp--preset--spacing--24)"><!-- wp:post-title {"textAlign":"center","level":1,"align":"full"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Container"},"align":"wide","className":"art-container-main","style":{"spacing":{"margin":{"top":"var:preset|spacing|96","bottom":"var:preset|spacing|96"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide art-container-main" style="margin-top:var(--wp--preset--spacing--96);margin-bottom:var(--wp--preset--spacing--96)"><!-- wp:group {"metadata":{"name":"Column Container","categories":["cards","columns","resources"],"patternName":"core/block/3741"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","className":"art-sidebar-layout","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide art-sidebar-layout"><!-- wp:column {"width":"16.67%"} -->
<div class="wp-block-column" style="flex-basis:16.67%"><!-- wp:group {"metadata":{"name":"Sidebar Nav"},"className":"art-section-sidebar-nav","layout":{"type":"constrained"}} -->
<div class="wp-block-group art-section-sidebar-nav"><!-- wp:heading {"fontSize":"lg"} -->
<h2 class="wp-block-heading has-lg-font-size"><?php esc_html_e('Categories', 'artsolio2');?></h2>
<!-- /wp:heading -->

<!-- wp:navigation {"ref":966,"overlayMenu":"never","className":"art-sidebar-nav","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:simpletoc/toc {"add_smooth":true,"max_level":3,"min_level":2,"accordion":true,"wrapper":true,"className":"art-simple-toc"} /-->

<!-- wp:post-content /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Read Next"},"align":"full","className":"art-more-case-studies art-container-main","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull art-more-case-studies art-container-main"><!-- wp:group {"align":"wide","style":{"layout":{"columnSpan":3},"spacing":{"margin":{"top":"var:preset|spacing|96"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--96)"><!-- wp:heading {"level":3,"style":{"layout":{"columnSpan":3}},"fontSize":"2-xl"} -->
<h3 class="wp-block-heading has-2-xl-font-size"><?php esc_html_e('Read Next', 'artsolio2');?></h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":10,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"multiple_posts":["page"],"include_posts":[],"exclude_current":"artsolio2//wp-custom-template-page-articles"},"namespace":"advanced-query-loop","metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
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
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"uncategorized"} /-->