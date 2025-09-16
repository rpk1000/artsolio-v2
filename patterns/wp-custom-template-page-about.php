<?php
/**
 * Title: wp-custom-template-page-about
 * Slug: artsolio2/wp-custom-template-page-about
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Sticky Header"},"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"header","area":"uncategorized","align":"full"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Hero"},"className":"art-page-about art-hero","style":{"spacing":{"margin":{"top":"-77px"},"padding":{"top":"80px"}}},"gradient":"hero","layout":{"type":"constrained"}} -->
<div class="wp-block-group art-page-about art-hero has-hero-gradient-background has-background" style="margin-top:-77px;padding-top:80px"><!-- wp:group {"metadata":{"name":"Content Container"},"align":"wide","className":"art-hero-content-container art-bg-img","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide art-hero-content-container art-bg-img"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"art-container-main art-columns art-col-reverse-sm"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center art-container-main art-columns art-col-reverse-sm"><!-- wp:column {"verticalAlignment":"center","width":"58.33%","metadata":{"name":"Left Col"},"className":"art-col-left","style":{"spacing":{"blockGap":"var:preset|spacing|24"}}} -->
<div class="wp-block-column is-vertically-aligned-center art-col-left" style="flex-basis:58.33%"><!-- wp:group {"className":"art-align-center-sm","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group art-align-center-sm"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php /* Translators: 1. is the start of a 'span' HTML element, 2. is the end of a 'span' HTML element */ 
echo sprintf( esc_html__( 'About %1$sMe%2$s.', 'artsolio2' ), '<span class="art-font-normal">', '</span>' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"art-pad-rt-2col","style":{"layout":{"columnSpan":2}}} -->
<p class="art-pad-rt-2col"><?php esc_html_e('With over 10 years of creative problem-solving under my belt, I bring agency-level design expertise to small businesses in San Diego that need a standout presence without the overhead of a full creative team.', 'artsolio2');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Book a Consultation', 'artsolio2');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","metadata":{"name":"Right Col"},"className":"art-col-right"} -->
<div class="wp-block-column is-vertically-aligned-center art-col-right"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/freelance-desier-robb-keele.png" alt="<?php esc_attr_e('Headshot of freelance designer, Robb Keele.', 'artsolio2');?>" class=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-content /-->

<!-- wp:cover {"isUserOverlayColor":true,"customGradient":"linear-gradient(0deg,rgba(80,98,120,0.85) 0%,rgba(55,64,74,0.9) 100%)","sizeSlug":"large","metadata":{"name":"CTA"},"className":"art-cta","style":{"spacing":{"padding":{"top":"var:preset|spacing|32","bottom":"var:preset|spacing|32"}},"color":{"duotone":"var:preset|duotone|dark-grayscale"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover art-cta" style="padding-top:var(--wp--preset--spacing--32);padding-bottom:var(--wp--preset--spacing--32)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="background:linear-gradient(0deg,rgba(80,98,120,0.85) 0%,rgba(55,64,74,0.9) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"align":"wide","className":"art-cta-content","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|96"}}}} -->
<div class="wp-block-columns alignwide art-cta-content"><!-- wp:column {"width":"50%","metadata":{"name":"Left Col"}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Ready to Get Started?', 'artsolio2');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Book a FREE consultation if you’re ready to discuss your project and next steps. Not quite ready? No problem. Send me a message with your questions and I’ll get back to you ASAP.', 'artsolio2');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('BOOK A CONSULTATION', 'artsolio2');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","metadata":{"name":"Right Col"},"className":"art-col-right"} -->
<div class="wp-block-column is-vertically-aligned-center art-col-right"><!-- wp:group {"className":"art-form-container","style":{"spacing":{"padding":{"left":"var:preset|spacing|16","right":"var:preset|spacing|16","top":"var:preset|spacing|16","bottom":"var:preset|spacing|16"}},"border":{"radius":"1rem"}},"backgroundColor":"ink-900","layout":{"type":"constrained"}} -->
<div class="wp-block-group art-form-container has-ink-900-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--16);padding-right:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--16)"><!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size"><?php esc_html_e('Send me a message.', 'artsolio2');?></h3>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|16"}}},"backgroundColor":"brand-500"} -->
<hr class="wp-block-separator has-text-color has-brand-500-color has-alpha-channel-opacity has-brand-500-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--4);margin-bottom:var(--wp--preset--spacing--16)"/>
<!-- /wp:separator -->

<!-- wp:wpforms/form-selector {"clientId":"807afb5f-c541-44d3-ba1b-e573bf509899","formId":"1383","theme":"default-copy-1-copy-2","themeName":"Default (Copy 2)","labelSize":"small","labelColor":"#F8F8F8","labelSublabelColor":"#87BDFF","labelErrorColor":"#87BDFF","copyPasteJsonValue":"{\u0022displayTitle\u0022:false,\u0022displayDesc\u0022:false,\u0022theme\u0022:\u0022default-copy-1-copy-2\u0022,\u0022themeName\u0022:\u0022Default (Copy 2)\u0022,\u0022fieldSize\u0022:\u0022large\u0022,\u0022backgroundImage\u0022:\u0022none\u0022,\u0022backgroundPosition\u0022:\u0022center center\u0022,\u0022backgroundRepeat\u0022:\u0022no-repeat\u0022,\u0022backgroundSizeMode\u0022:\u0022cover\u0022,\u0022backgroundSize\u0022:\u0022cover\u0022,\u0022backgroundWidth\u0022:\u0022100px\u0022,\u0022backgroundHeight\u0022:\u0022100px\u0022,\u0022backgroundUrl\u0022:\u0022url()\u0022,\u0022backgroundColor\u0022:\u0022rgba( 0, 0, 0, 0 )\u0022,\u0022fieldBorderRadius\u0022:\u00220.25rem\u0022,\u0022fieldBorderStyle\u0022:\u0022solid\u0022,\u0022fieldBorderSize\u0022:\u00221px\u0022,\u0022fieldBackgroundColor\u0022:\u0022#798BA1\u0022,\u0022fieldBorderColor\u0022:\u0022#BDCADE\u0022,\u0022fieldTextColor\u0022:\u0022#37404A\u0022,\u0022fieldMenuColor\u0022:\u0022#ffffff\u0022,\u0022labelSize\u0022:\u0022small\u0022,\u0022labelColor\u0022:\u0022#F8F8F8\u0022,\u0022labelSublabelColor\u0022:\u0022#87BDFF\u0022,\u0022labelErrorColor\u0022:\u0022#87BDFF\u0022,\u0022buttonSize\u0022:\u0022large\u0022,\u0022buttonBorderStyle\u0022:\u0022none\u0022,\u0022buttonBorderSize\u0022:\u00221px\u0022,\u0022buttonBorderRadius\u0022:\u00229999px\u0022,\u0022buttonBackgroundColor\u0022:\u0022#798BA1\u0022,\u0022buttonTextColor\u0022:\u0022#F8F8F8\u0022,\u0022buttonBorderColor\u0022:\u0022#066aab\u0022,\u0022pageBreakColor\u0022:\u0022#066aab\u0022,\u0022containerPadding\u0022:\u00220px\u0022,\u0022containerBorderStyle\u0022:\u0022none\u0022,\u0022containerBorderWidth\u0022:\u00221px\u0022,\u0022containerBorderColor\u0022:\u0022#000000\u0022,\u0022containerBorderRadius\u0022:\u00223px\u0022,\u0022containerShadowSize\u0022:\u0022none\u0022,\u0022customCss\u0022:\u0022\u0022}","fieldSize":"large","fieldBorderRadius":"0.25rem","fieldBackgroundColor":"#798BA1","fieldBorderColor":"#BDCADE","fieldTextColor":"#37404A","buttonSize":"large","buttonBorderRadius":"9999px","buttonBackgroundColor":"#798BA1","buttonTextColor":"#F8F8F8"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:template-part {"slug":"footer","area":"uncategorized"} /-->