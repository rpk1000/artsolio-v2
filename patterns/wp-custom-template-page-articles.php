<?php
/**
 * Title: wp-custom-template-page-articles
 * Slug: artsolio2/wp-custom-template-page-articles
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

<!-- wp:template-part {"slug":"read-next","align":"full"} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"uncategorized"} /-->