<?php
/**
 * Block Styles
 *
 * Custom block style CSS and configuration.
 *
 * @package Marcia
 * @since 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue block-specific styles.
 *
 * @since 2.0.0
 */
function marcia_enqueue_block_styles() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// Custom button styles.
	wp_enqueue_block_style(
		'core/button',
		array(
			'handle' => 'marcia-button-styles',
			'src'    => get_theme_file_uri( 'assets/css/blocks/core-button.css' ),
			'ver'    => $theme_version,
			'path'   => get_theme_file_path( 'assets/css/blocks/core-button.css' ),
		)
	);

	// Custom navigation styles.
	wp_enqueue_block_style(
		'core/navigation',
		array(
			'handle' => 'marcia-navigation-styles',
			'src'    => get_theme_file_uri( 'assets/css/blocks/core-navigation.css' ),
			'ver'    => $theme_version,
			'path'   => get_theme_file_path( 'assets/css/blocks/core-navigation.css' ),
		)
	);
}
add_action( 'init', 'marcia_enqueue_block_styles' );

/**
 * Add inline styles for custom block variations.
 *
 * @since 2.0.0
 */
function marcia_custom_block_styles() {
	$custom_css = '
		/* Button - Outline Style */
		.is-style-marcia-outline {
			background-color: transparent !important;
			border: 2px solid currentColor;
			color: var(--wp--preset--color--primary) !important;
		}
		.is-style-marcia-outline:hover {
			background-color: var(--wp--preset--color--primary) !important;
			color: var(--wp--preset--color--base) !important;
		}

		/* Button - Ghost Style */
		.is-style-marcia-ghost {
			background-color: transparent !important;
			border: none;
			color: var(--wp--preset--color--primary) !important;
			text-decoration: underline;
		}
		.is-style-marcia-ghost:hover {
			color: var(--wp--preset--color--secondary) !important;
		}

		/* List - Checkmarks */
		.is-style-marcia-checkmarks {
			list-style: none;
		}
		.is-style-marcia-checkmarks li::before {
			content: "✓";
			color: var(--wp--preset--color--success);
			font-weight: bold;
			margin-right: 0.5rem;
		}

		/* Group - Card */
		.is-style-marcia-card {
			border: 1px solid var(--wp--preset--color--gray-200);
			border-radius: 0.5rem;
			padding: var(--wp--preset--spacing--50);
		}

		/* Group - Shadow */
		.is-style-marcia-shadow {
			box-shadow: var(--wp--preset--shadow--natural);
			border-radius: 0.5rem;
			padding: var(--wp--preset--spacing--50);
		}
	';

	wp_add_inline_style( 'wp-block-library', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'marcia_custom_block_styles' );
add_action( 'enqueue_block_editor_assets', 'marcia_custom_block_styles' );
