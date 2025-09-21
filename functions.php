<?php
/**
 * Theme setup & assets
 */

add_action('after_setup_theme', function () {
  // Block theme supports
  add_theme_support('wp-block-styles');
  add_theme_support('editor-styles');

  // Load the main stylesheet INSIDE the editor iframe (post editor + Site Editor).
  // Relative path from the theme root.
  add_editor_style( [ 'style.css' ] );
});

add_action('wp_enqueue_scripts', function () {
  // FRONTEND: enqueue the main stylesheet with cache-busting
  $css_path = get_stylesheet_directory() . '/style.css';
  if ( file_exists( $css_path ) ) {
    wp_enqueue_style(
      'artsolio-style',
      get_stylesheet_uri(),
      [],
      filemtime( $css_path )
    );
  }

  // FRONTEND: header JS (defer)
  $js_rel_path = '/assets/js/header.js';
  $js_path     = get_stylesheet_directory() . $js_rel_path;

  if ( file_exists( $js_path ) ) {
    $handle = 'artsolio-header';
    wp_enqueue_script(
      $handle,
      get_stylesheet_directory_uri() . $js_rel_path,
      [],
      filemtime( $js_path ),
      true // in footer
    );
    if ( function_exists('wp_script_add_data') ) {
      wp_script_add_data( $handle, 'strategy', 'defer' ); // WP 6.3+
    }
  }
});

/**
 * Preload primary webfont for performance.
 * Adds a preload link for Open Sans regular font to the <head>.
 */
function artsolio_preload_primary_webfont() {
    echo '<link rel="preload" as="font" type="font/woff2" crossorigin href="' . get_template_directory_uri() . '/assets/fonts/open-sans-v43-latin-regular.woff2" />\n';
}
// Add after favicons for logical grouping (priority 21)
add_action('wp_head', 'artsolio_preload_primary_webfont', 21);

/**
 * Add Categories and Tags support to Pages.
 */
function artsolio_enable_page_taxonomies() {
    // Categories
    register_taxonomy_for_object_type( 'category', 'page' );
    // Tags
    register_taxonomy_for_object_type( 'post_tag', 'page' );
}
add_action( 'init', 'artsolio_enable_page_taxonomies' );

/**
 * Add excerpt support to pages.
 * This allows pages to have excerpts in the block editor.
 */
add_action( 'init', function() {
	add_post_type_support( 'page', 'excerpt' );
} );

/**
 * Remove Read More Link from Post Excerpt Block Globally
 */
add_filter( 'render_block', function( $block_content, $block ) {
    if ( $block['blockName'] === 'core/post-excerpt' ) {
        // Remove the "Read more" link by stripping the <span>
        $block_content = preg_replace( '/<p class="wp-block-post-excerpt__more-text">.*?<\/p>/', '', $block_content );
    }
    return $block_content;
}, 10, 2 );

// FAQ accordion JS
$faq_js_rel = '/assets/js/faq-accordion.js';
$faq_js_path = get_stylesheet_directory() . $faq_js_rel;

if ( file_exists( $faq_js_path ) ) {
  $handle = 'artsolio-faq';
  wp_enqueue_script(
    $handle,
    get_stylesheet_directory_uri() . $faq_js_rel,
    [],
    filemtime( $faq_js_path ),
    true
  );
  if ( function_exists('wp_script_add_data') ) {
    wp_script_add_data( $handle, 'strategy', 'defer' );
  }
}

/**
 * EDITOR (extra safety): explicitly enqueue the same stylesheet for the block editor.
 * This complements add_editor_style() and helps in edge cases or plugin conflicts.
 */
add_action('enqueue_block_editor_assets', function () {
  $css_path = get_stylesheet_directory() . '/style.css';
  if ( file_exists( $css_path ) ) {
    wp_enqueue_style(
      'artsolio-style-editor',
      get_stylesheet_uri(),
      [],
      filemtime( $css_path )
    );
  }
});

// Allow SVG Uploads
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

	global $wp_version;
	if ( $wp_version !== '4.7.1' ) {
	   return $data;
	}
  
	$filetype = wp_check_filetype( $filename, $mimes );
  
	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
  ];
}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
    .attachment-266x266, .thumbnail img {
      width: 100% !important;
      height: auto !important;
    }
    </style>';
}
add_action( 'admin_head', 'fix_svg' );

/**
 * Add section-specific body classes for both sidebar and primary nav highlighting.
 */
add_filter( 'body_class', function( $classes ) {
    // Always work with the queried object (safer than relying on global $post alone)
    $qo = get_queried_object();
    if ( ! $qo ) {
        return $classes;
    }

    $section        = '';
    $resource_slugs = [ 'resources', 'guides', 'insights', 'checklists' ];

    /* ===========================
     * PAGES: use top-level ancestor
     * =========================== */
    if ( is_page() ) { // singular 'page'
        $ancestors = get_post_ancestors( $qo->ID ); // lowest -> highest
        $top_id    = $ancestors ? end( $ancestors ) : $qo->ID;
        $top_slug  = get_post_field( 'post_name', $top_id );

        $section = $top_slug;

        // Generic resource section class when inside the resources family
        if ( in_array( $top_slug, $resource_slugs, true ) ) {
            $classes[] = 'section-resources';
        }

        // Portfolio page family
        if ( $top_slug === 'portfolio' ) {
            $classes[] = 'section-portfolio';
        }
    }

    /* ===========================
     * POSTS: use top-level category
     * =========================== */
    elseif ( is_single() && get_post_type( $qo ) === 'post' ) {
        $cats = get_the_category( $qo->ID );
        if ( ! empty( $cats ) ) {
            // Pick the first category (or replace this with your "primary" logic if desired)
            $cat = $cats[0];

            // Climb to the top-most parent category
            if ( $cat->parent ) {
                $anc = get_ancestors( $cat->term_id, 'category' ); // child -> ... -> top
                if ( $anc ) {
                    $top_cat = get_term( end( $anc ), 'category' );
                    if ( $top_cat && ! is_wp_error( $top_cat ) ) {
                        $section = $top_cat->slug;
                    }
                }
            }
            if ( ! $section ) {
                $section = $cat->slug;
            }

            // If top-level category is one of the resources sections, add the generic class
            if ( in_array( $section, [ 'guides', 'insights', 'checklists' ], true ) ) {
                $classes[] = 'section-resources';
            }
        }
    }

    // Add the specific section class (e.g., section-guides, section-portfolio)
    if ( $section ) {
        $classes[] = 'section-' . sanitize_html_class( $section );
    }

    return $classes;
}, 10 );

// Remove links from the Categories terms in the Categories block (used in Query Loop).
add_filter( 'render_block_core/post-terms', function( $html, $block ) {
	// Only affect the Categories variation used inside your loops.
	$attrs = $block->attributes ?? [];
	$term  = $attrs['term'] ?? 'category';
	if ( $term !== 'category' ) {
		return $html;
	}

	// Replace each <a>term</a> with a <span>term</span>, preserving classes.
	$html = preg_replace_callback(
		'~<a([^>]*)>([^<]+)</a>~i',
		function( $m ) {
			// Pull over core classes so styling is unaffected.
			preg_match( '/class="([^"]*)"/', $m[1], $class );
			$cls = ! empty( $class[1] ) ? ' class="' . esc_attr( $class[1] ) . '"' : '';
			return '<span' . $cls . '>' . $m[2] . '</span>';
		},
		$html
	);

	return $html;
}, 10, 2 );

/**
 * Insert favicons into the head section of the site.
 * Minor update to ensure favicons are loaded correctly.
 *
 * @since 1.0.0
 */
function artsolio_insert_favicons() {
	?>
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/site.webmanifest">
	<?php
}
add_action('wp_head', 'artsolio_insert_favicons', 20);

/**
 * Add WOT validation script to the head section.
 * This script is used for validating the site with WOT (Web of Trust).
 *
 * @since 1.0.0
 */
function artsolio_insert_wot_validation() {
	?>
	<meta name="wot-verification" content="6fc4c1f629106d59ffa8"/>
	<?php
}
add_action('wp_head', 'artsolio_insert_wot_validation', 20);