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
	// DNS prefetch for common domains.
	echo '<link rel="dns-prefetch" href="//fonts.googleapis.com">';
	echo '<link rel="dns-prefetch" href="//fonts.gstatic.com">';

	// Preconnect to critical domains.
	echo '<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>';
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
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

/**
 * Remove query strings from static resources.
 *
 * @since 2.0.0
 * @param string $src The source URL.
 * @return string Modified URL.
 */
function marcia_remove_query_strings( $src ) {
	if ( strpos( $src, '?ver=' ) ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
}
add_filter( 'style_loader_src', 'marcia_remove_query_strings', 10, 1 );
add_filter( 'script_loader_src', 'marcia_remove_query_strings', 10, 1 );

/**
 * Preload critical assets.
 *
 * @since 2.0.0
 */
function marcia_preload_critical_assets() {
	// Preload theme stylesheet.
	echo '<link rel="preload" href="' . esc_url( get_stylesheet_uri() ) . '" as="style">';

	// Preload critical fonts (if using local fonts).
	$font_path = get_template_directory_uri() . '/assets/fonts/';
	if ( file_exists( get_template_directory() . '/assets/fonts/inter-variable.woff2' ) ) {
		echo '<link rel="preload" href="' . esc_url( $font_path . 'inter-variable.woff2' ) . '" as="font" type="font/woff2" crossorigin>';
	}
}
add_action( 'wp_head', 'marcia_preload_critical_assets', 0 );

/**
 * Optimize font loading.
 *
 * @since 2.0.0
 */
function marcia_optimize_fonts() {
	// Add font-display: swap to Google Fonts.
	add_filter(
		'wp_resource_hints',
		function( $urls, $relation_type ) {
			if ( 'preconnect' === $relation_type ) {
				$urls[] = array(
					'href' => 'https://fonts.googleapis.com',
					'crossorigin',
				);
				$urls[] = array(
					'href' => 'https://fonts.gstatic.com',
					'crossorigin',
				);
			}
			return $urls;
		},
		10,
		2
	);
}
add_action( 'after_setup_theme', 'marcia_optimize_fonts' );

/**
 * Disable embeds.
 *
 * @since 2.0.0
 */
function marcia_disable_embeds() {
	// Remove embed scripts.
	wp_deregister_script( 'wp-embed' );

	// Remove embed discovery links.
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

	// Remove embed-specific JavaScript.
	remove_action( 'wp_head', 'wp_oembed_add_host_js' );
}
add_action( 'init', 'marcia_disable_embeds', 9999 );

/**
 * Optimize heartbeat API.
 *
 * @since 2.0.0
 * @param array $settings Heartbeat settings.
 * @return array Modified settings.
 */
function marcia_optimize_heartbeat( $settings ) {
	// Slow down heartbeat to every 60 seconds.
	$settings['interval'] = 60;
	return $settings;
}
add_filter( 'heartbeat_settings', 'marcia_optimize_heartbeat' );

/**
 * Disable heartbeat on frontend.
 *
 * @since 2.0.0
 */
function marcia_disable_frontend_heartbeat() {
	if ( ! is_admin() ) {
		wp_deregister_script( 'heartbeat' );
	}
}
add_action( 'init', 'marcia_disable_frontend_heartbeat', 1 );

/**
 * Optimize block editor assets.
 *
 * @since 2.0.0
 */
function marcia_optimize_block_editor() {
	// Remove global styles inline output on frontend.
	remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
	remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
}
add_action( 'after_setup_theme', 'marcia_optimize_block_editor' );

/**
 * Conditional WooCommerce scripts loading.
 *
 * @since 2.0.0
 */
function marcia_conditional_woocommerce_scripts() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	// Remove WooCommerce scripts on non-shop pages.
	if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() && ! is_account_page() ) {
		// Dequeue WooCommerce styles.
		wp_dequeue_style( 'woocommerce-general' );
		wp_dequeue_style( 'woocommerce-layout' );
		wp_dequeue_style( 'woocommerce-smallscreen' );

		// Dequeue WooCommerce scripts.
		wp_dequeue_script( 'wc-add-to-cart' );
		wp_dequeue_script( 'wc-cart-fragments' );
		wp_dequeue_script( 'woocommerce' );
	}
}
add_action( 'wp_enqueue_scripts', 'marcia_conditional_woocommerce_scripts', 99 );

/**
 * Optimize database with auto-cleanup.
 *
 * @since 2.0.0
 */
function marcia_database_optimization() {
	// Limit number of post revisions.
	if ( ! defined( 'WP_POST_REVISIONS' ) ) {
		define( 'WP_POST_REVISIONS', 3 );
	}

	// Set autosave interval to 3 minutes.
	if ( ! defined( 'AUTOSAVE_INTERVAL' ) ) {
		define( 'AUTOSAVE_INTERVAL', 180 );
	}

	// Increase memory limit if needed.
	if ( ! defined( 'WP_MEMORY_LIMIT' ) ) {
		define( 'WP_MEMORY_LIMIT', '256M' );
	}
}
add_action( 'init', 'marcia_database_optimization' );

/**
 * Enable compression for theme assets.
 *
 * @since 2.0.0
 */
function marcia_enable_compression() {
	if ( ! is_admin() ) {
		// Enable Gzip compression.
		if ( ! ini_get( 'zlib.output_compression' ) && 'ob_gzhandler' !== ini_get( 'output_handler' ) ) {
			if ( function_exists( 'ob_gzhandler' ) ) {
				ob_start( 'ob_gzhandler' );
			}
		}
	}
}
add_action( 'init', 'marcia_enable_compression' );
