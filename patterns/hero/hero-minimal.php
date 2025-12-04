<?php
/**
 * Title: Minimal Hero
 * Slug: marcia/hero-minimal
 * Categories: marcia-hero
 * Description: A clean, minimal hero section with heading, description, and call-to-action buttons
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"gray-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-gray-50-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large"} -->
	<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'Build Something Amazing', 'marcia' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
	<p class="has-text-align-center has-large-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Create stunning websites with Marcia, the modern WordPress block theme built for performance and flexibility.', 'marcia' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'marcia' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-marcia-outline"} -->
		<div class="wp-block-button is-style-marcia-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Learn More', 'marcia' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
