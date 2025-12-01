<?php
/**
 * Editor Configuration
 *
 * Customize the block editor experience.
 *
 * @package Marcia
 * @since 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Configure editor settings.
 *
 * @since 2.0.0
 * @param array $settings Editor settings.
 * @return array Modified settings.
 */
function marcia_editor_settings( $settings ) {
	// Enable custom font sizes.
	$settings['__experimentalFeatures']['typography']['customFontSize'] = true;

	// Enable custom line height.
	$settings['__experimentalFeatures']['typography']['lineHeight'] = true;

	// Enable custom spacing.
	$settings['__experimentalFeatures']['spacing']['customPadding'] = true;
	$settings['__experimentalFeatures']['spacing']['customMargin']  = true;

	// Enable link color control.
	$settings['__experimentalFeatures']['color']['link'] = true;

	return $settings;
}
add_filter( 'block_editor_settings_all', 'marcia_editor_settings' );

/**
 * Add custom color palette to editor.
 *
 * @since 2.0.0
 */
function marcia_editor_color_palette() {
	// Colors are defined in theme.json.
	// This function is a placeholder for any additional editor customization.
}
add_action( 'after_setup_theme', 'marcia_editor_color_palette' );

/**
 * Customize block categories.
 *
 * @since 2.0.0
 * @param array $categories Default block categories.
 * @return array Modified categories.
 */
function marcia_block_categories( $categories ) {
	// Add custom Marcia category for custom blocks (future use).
	return array_merge(
		$categories,
		array(
			array(
				'slug'  => 'marcia',
				'title' => __( 'Marcia', 'marcia' ),
				'icon'  => 'layout',
			),
		)
	);
}
add_filter( 'block_categories_all', 'marcia_block_categories' );

/**
 * Add custom editor width for better WYSIWYG experience.
 *
 * @since 2.0.0
 */
function marcia_editor_width() {
	add_theme_support( 'editor-styles' );
}
add_action( 'after_setup_theme', 'marcia_editor_width' );

/**
 * Disable remote block patterns.
 *
 * @since 2.0.0
 */
function marcia_disable_remote_patterns() {
	// Only use theme patterns, not remote WordPress.org patterns.
	add_filter( 'should_load_remote_block_patterns', '__return_false' );
}
add_action( 'after_setup_theme', 'marcia_disable_remote_patterns' );
