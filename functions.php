<?php
/**
 * Marcia Theme Functions
 *
 * This is a block theme - most functionality is handled through theme.json.
 * This file contains only essential setup and performance optimizations.
 *
 * @package Marcia
 * @since 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Marcia Theme Setup
 */
if ( ! function_exists( 'marcia_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 2.0.0
	 */
	function marcia_setup() {
		// Make theme available for translation.
		load_theme_textdomain( 'marcia', get_template_directory() . '/languages' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'assets/css/editor.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height.
		add_theme_support( 'custom-line-height' );

		// Add support for custom spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		add_theme_support( 'custom-units' );

		// Add support for appearance tools.
		add_theme_support( 'appearance-tools' );

		// Add support for link color.
		add_theme_support( 'link-color' );

		// Add support for border.
		add_theme_support( 'border' );

		// Add support for WooCommerce.
		add_theme_support( 'woocommerce' );

		// Add support for WooCommerce product gallery features.
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );
	}
}
add_action( 'after_setup_theme', 'marcia_setup' );

/**
 * Enqueue theme styles and scripts.
 *
 * @since 2.0.0
 */
function marcia_enqueue_assets() {
	// Theme version for cache busting.
	$theme_version = wp_get_theme()->get( 'Version' );

	// Enqueue base styles.
	wp_enqueue_style(
		'marcia-base',
		get_template_directory_uri() . '/assets/css/base.css',
		array(),
		$theme_version
	);

	// Enqueue block styles conditionally based on blocks present.
	if ( has_block( 'core/navigation' ) ) {
		wp_enqueue_style(
			'marcia-navigation',
			get_template_directory_uri() . '/assets/css/blocks/core-navigation.css',
			array(),
			$theme_version
		);
	}

	if ( has_block( 'core/button' ) ) {
		wp_enqueue_style(
			'marcia-button',
			get_template_directory_uri() . '/assets/css/blocks/core-button.css',
			array(),
			$theme_version
		);
	}

	// Enqueue fonts.
	wp_enqueue_style(
		'marcia-fonts',
		get_template_directory_uri() . '/assets/fonts/font-face.css',
		array(),
		$theme_version
	);
}
add_action( 'wp_enqueue_scripts', 'marcia_enqueue_assets' );

/**
 * Enqueue editor assets.
 *
 * @since 2.0.0
 */
function marcia_enqueue_editor_assets() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// Enqueue editor styles.
	wp_enqueue_style(
		'marcia-editor',
		get_template_directory_uri() . '/assets/css/editor.css',
		array(),
		$theme_version
	);
}
add_action( 'enqueue_block_editor_assets', 'marcia_enqueue_editor_assets' );

/**
 * Add custom block styles.
 *
 * @since 2.0.0
 */
function marcia_register_block_styles() {
	// Button styles.
	register_block_style(
		'core/button',
		array(
			'name'  => 'marcia-outline',
			'label' => __( 'Outline', 'marcia' ),
		)
	);

	register_block_style(
		'core/button',
		array(
			'name'  => 'marcia-ghost',
			'label' => __( 'Ghost', 'marcia' ),
		)
	);

	// List styles.
	register_block_style(
		'core/list',
		array(
			'name'  => 'marcia-checkmarks',
			'label' => __( 'Checkmarks', 'marcia' ),
		)
	);

	// Group styles.
	register_block_style(
		'core/group',
		array(
			'name'  => 'marcia-card',
			'label' => __( 'Card', 'marcia' ),
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'  => 'marcia-shadow',
			'label' => __( 'Shadow', 'marcia' ),
		)
	);
}
add_action( 'init', 'marcia_register_block_styles' );

/**
 * Register block pattern categories.
 *
 * @since 2.0.0
 */
function marcia_register_pattern_categories() {
	$categories = array(
		'marcia-hero'         => array(
			'label'       => __( 'Hero Sections', 'marcia' ),
			'description' => __( 'Eye-catching hero sections for landing pages', 'marcia' ),
		),
		'marcia-features'     => array(
			'label'       => __( 'Features', 'marcia' ),
			'description' => __( 'Feature sections and service showcases', 'marcia' ),
		),
		'marcia-testimonials' => array(
			'label'       => __( 'Testimonials', 'marcia' ),
			'description' => __( 'Customer testimonials and reviews', 'marcia' ),
		),
		'marcia-pricing'      => array(
			'label'       => __( 'Pricing', 'marcia' ),
			'description' => __( 'Pricing tables and plans', 'marcia' ),
		),
		'marcia-blog'         => array(
			'label'       => __( 'Blog', 'marcia' ),
			'description' => __( 'Blog layouts and post grids', 'marcia' ),
		),
		'marcia-shop'         => array(
			'label'       => __( 'Shop', 'marcia' ),
			'description' => __( 'E-commerce patterns for WooCommerce', 'marcia' ),
		),
		'marcia-team'         => array(
			'label'       => __( 'Team', 'marcia' ),
			'description' => __( 'Team member showcases', 'marcia' ),
		),
		'marcia-cta'          => array(
			'label'       => __( 'Call to Action', 'marcia' ),
			'description' => __( 'Call-to-action sections', 'marcia' ),
		),
		'marcia-content'      => array(
			'label'       => __( 'Content', 'marcia' ),
			'description' => __( 'Content layouts and grids', 'marcia' ),
		),
	);

	foreach ( $categories as $slug => $args ) {
		register_block_pattern_category( $slug, $args );
	}
}
add_action( 'init', 'marcia_register_pattern_categories' );

/**
 * Load additional theme files.
 */
require_once get_template_directory() . '/inc/block-styles.php';
require_once get_template_directory() . '/inc/block-patterns.php';
require_once get_template_directory() . '/inc/editor-config.php';
require_once get_template_directory() . '/inc/performance.php';

// Load WooCommerce integration if WooCommerce is active.
if ( class_exists( 'WooCommerce' ) ) {
	require_once get_template_directory() . '/inc/woocommerce.php';
}
