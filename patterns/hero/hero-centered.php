<?php
/**
 * Title: Hero Centered
 * Slug: marcia/hero-centered
 * Categories: marcia-hero
 * Description: Simple centered hero with clean typography
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"700px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xxx-large"} -->
	<h1 class="wp-block-heading has-text-align-center has-xxx-large-font-size"><?php esc_html_e( 'Welcome to the Future of Work', 'marcia' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"x-large","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<p class="has-text-align-center has-x-large-font-size" style="margin-top:var(--wp--preset--spacing--50)"><?php esc_html_e( 'A modern workspace designed to help teams collaborate, innovate, and achieve more together.', 'marcia' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)">
		<!-- wp:button {"fontSize":"medium"} -->
		<div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'marcia' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline","fontSize":"medium"} -->
		<div class="wp-block-button has-custom-font-size is-style-outline has-medium-font-size"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Explore Features', 'marcia' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

	<!-- wp:image {"align":"center","width":"120px","sizeSlug":"large","linkDestination":"none","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
	<figure class="wp-block-image aligncenter size-large is-resized" style="margin-top:var(--wp--preset--spacing--70)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arrow-down.svg" alt="<?php esc_attr_e( 'Scroll down', 'marcia' ); ?>" style="width:120px"/></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->
