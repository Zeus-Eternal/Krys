<?php
/**
 * Block Patterns
 *
 * Pattern registration and management.
 *
 * @package Marcia
 * @since 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load block patterns from patterns directory.
 *
 * @since 2.0.0
 */
function marcia_load_patterns() {
	$pattern_dirs = array(
		'hidden',
		'hero',
		'features',
		'content',
		'testimonials',
		'pricing',
		'blog',
		'shop',
		'team',
		'cta',
		'utility',
	);

	foreach ( $pattern_dirs as $dir ) {
		$pattern_path = get_template_directory() . '/patterns/' . $dir;

		if ( ! is_dir( $pattern_path ) ) {
			continue;
		}

		$patterns = glob( $pattern_path . '/*.php' );

		if ( ! $patterns ) {
			continue;
		}

		foreach ( $patterns as $pattern_file ) {
			require_once $pattern_file;
		}
	}
}
add_action( 'init', 'marcia_load_patterns' );

/**
 * Unregister core patterns we don't want.
 *
 * @since 2.0.0
 */
function marcia_unregister_core_patterns() {
	// Remove all default WordPress patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'marcia_unregister_core_patterns' );
