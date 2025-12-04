<?php
/**
 * Title: CTA Boxed
 * Slug: marcia/cta-boxed
 * Categories: marcia-cta
 * Description: Call-to-action in a boxed card with shadow
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"className":"is-style-marcia-shadow","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}},"border":{"radius":"1rem"}},"backgroundColor":"gray-50","layout":{"type":"constrained","contentSize":"800px"}} -->
	<div class="wp-block-group is-style-marcia-shadow has-gray-50-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
		<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Take Your Business to the Next Level', 'marcia' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"large"} -->
		<p class="has-text-align-center has-large-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Start your 14-day free trial today. No credit card required, cancel anytime.', 'marcia' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
			<!-- wp:button {"fontSize":"medium"} -->
			<div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started Free', 'marcia' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline","fontSize":"medium"} -->
			<div class="wp-block-button has-custom-font-size is-style-outline has-medium-font-size"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Schedule Demo', 'marcia' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
		<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"/>
		<!-- /wp:separator -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">✓ <?php esc_html_e( '14-day free trial', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">✓ <?php esc_html_e( 'No credit card required', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">✓ <?php esc_html_e( 'Cancel anytime', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
