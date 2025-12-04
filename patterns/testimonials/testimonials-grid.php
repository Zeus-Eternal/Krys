<?php
/**
 * Title: Testimonials Grid
 * Slug: marcia/testimonials-grid
 * Categories: marcia-testimonials
 * Description: Customer testimonials in 3-column grid
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"gray-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-gray-50-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--60)"><?php esc_html_e( 'What Our Customers Say', 'marcia' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"className":"is-style-marcia-shadow"} -->
		<div class="wp-block-column is-style-marcia-shadow">
			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size"><?php esc_html_e( '"Outstanding service and great results. Highly recommended!"', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
			<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"/>
			<!-- /wp:separator -->

			<!-- wp:paragraph {"fontWeight":"600"} -->
			<p><strong><?php esc_html_e( 'Sarah Williams', 'marcia' ); ?></strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
			<p class="has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'CEO, Tech Corp', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"is-style-marcia-shadow"} -->
		<div class="wp-block-column is-style-marcia-shadow">
			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size"><?php esc_html_e( '"Best decision we made for our business. Exceeded expectations!"', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
			<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"/>
			<!-- /wp:separator -->

			<!-- wp:paragraph {"fontWeight":"600"} -->
			<p><strong><?php esc_html_e( 'David Chen', 'marcia' ); ?></strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
			<p class="has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'Founder, StartupXYZ', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"is-style-marcia-shadow"} -->
		<div class="wp-block-column is-style-marcia-shadow">
			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size"><?php esc_html_e( '"Professional, reliable, and delivered exactly what we needed!"', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
			<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"/>
			<!-- /wp:separator -->

			<!-- wp:paragraph {"fontWeight":"600"} -->
			<p><strong><?php esc_html_e( 'Emily Rodriguez', 'marcia' ); ?></strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
			<p class="has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'Director, Design Studio', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
