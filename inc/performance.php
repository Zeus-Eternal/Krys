<?php
/**
 * Performance Optimizations
 *
 * Performance enhancements and optimizations.
 *
 * @package Marcia
 * @since 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Defer non-critical CSS.
 *
 * @since 2.0.0
 * @param string $tag    The link tag for the stylesheet.
 * @param string $handle The stylesheet's registered handle.
 * @return string Modified link tag.
 */
function marcia_defer_non_critical_css( $tag, $handle ) {
	// List of non-critical stylesheets to defer.
	$defer_styles = array(
		'marcia-blocks',
	);

	if ( in_array( $handle, $defer_styles, true ) ) {
		$tag = str_replace( "rel='stylesheet'", "rel='preload' as='style' onload=\"this.onload=null;this.rel='stylesheet'\"", $tag );
		$tag = str_replace( 'rel="stylesheet"', 'rel="preload" as="style" onload="this.onload=null;this.rel=\'stylesheet\'"', $tag );
	}

	return $tag;
}
add_filter( 'style_loader_tag', 'marcia_defer_non_critical_css', 10, 2 );

/**
 * Add preconnect for external resources.
 *
 * @since 2.0.0
 */
function marcia_resource_hints() {
	// Preconnect to CDNs if needed (placeholder for future use).
	// echo '<link rel="preconnect" href="https://example.com" crossorigin>';
}
add_action( 'wp_head', 'marcia_resource_hints', 1 );

/**
 * Optimize script loading.
 *
 * @since 2.0.0
 * @param string $tag    The script tag.
 * @param string $handle The script's registered handle.
 * @return string Modified script tag.
 */
function marcia_defer_scripts( $tag, $handle ) {
	// Scripts to defer.
	$defer_scripts = array(
		'marcia-script',
	);

	if ( in_array( $handle, $defer_scripts, true ) ) {
		return str_replace( ' src', ' defer src', $tag );
	}

	return $tag;
}
add_filter( 'script_loader_tag', 'marcia_defer_scripts', 10, 2 );

/**
 * Remove unnecessary WordPress features.
 *
 * @since 2.0.0
 */
function marcia_remove_unnecessary_features() {
	// Remove emoji scripts and styles.
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );

	// Remove Windows Live Writer manifest.
	remove_action( 'wp_head', 'wlwmanifest_link' );

	// Remove RSD link.
	remove_action( 'wp_head', 'rsd_link' );

	// Remove WordPress generator meta tag.
	remove_action( 'wp_head', 'wp_generator' );

	// Remove shortlink.
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );
}
add_action( 'init', 'marcia_remove_unnecessary_features' );

/**
 * Optimize image loading.
 *
 * @since 2.0.0
 */
function marcia_optimize_images() {
	// Add lazy loading to images (WordPress 5.5+).
	add_filter( 'wp_lazy_loading_enabled', '__return_true' );
}
add_action( 'after_setup_theme', 'marcia_optimize_images' );

/**
 * Enable WebP support.
 *
 * @since 2.0.0
 * @param array $mimes Existing mime types.
 * @return array Modified mime types.
 */
function marcia_enable_webp( $mimes ) {
	$mimes['webp'] = 'image/webp';
	$mimes['avif'] = 'image/avif';
	return $mimes;
}
add_filter( 'upload_mimes', 'marcia_enable_webp' );

/**
 * Optimize query performance.
 *
 * @since 2.0.0
 * @param WP_Query $query The WordPress query object.
 */
function marcia_optimize_queries( $query ) {
	if ( ! is_admin() && $query->is_main_query() ) {
		// Limit post revisions shown.
		if ( $query->is_singular() ) {
			$query->set( 'posts_per_page', 1 );
		}

		// Optimize archive queries.
		if ( $query->is_archive() || $query->is_home() ) {
			$query->set( 'posts_per_page', 12 );
			$query->set( 'no_found_rows', false ); // Enable pagination.
		}
	}
}
add_action( 'pre_get_posts', 'marcia_optimize_queries' );

/**
 * Disable XML-RPC for security.
 *
 * @since 2.0.0
 */
add_filter( 'xmlrpc_enabled', '__return_false' );

/**
 * Limit post revisions.
 *
 * @since 2.0.0
 */
if ( ! defined( 'WP_POST_REVISIONS' ) ) {
	define( 'WP_POST_REVISIONS', 3 );
}

/**
 * Add cache-control headers.
 *
 * @since 2.0.0
 */
function marcia_add_cache_headers() {
	if ( ! is_admin() ) {
		header( 'Cache-Control: public, max-age=31536000' );
	}
}
add_action( 'send_headers', 'marcia_add_cache_headers' );
