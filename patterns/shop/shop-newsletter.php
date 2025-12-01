<?php
/**
 * Title: Shop Newsletter
 * Slug: marcia/shop-newsletter
 * Categories: marcia-shop
 * Description: Newsletter signup for shop with discount offer
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"gradient":"dark-gradient","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-dark-gradient-gradient-background has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Get 10% Off Your First Order', 'marcia' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
			<p class="has-large-font-size" style="margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Subscribe to our newsletter for exclusive deals, new arrivals, and special offers.', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"radius":"0.5rem"}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"default"}} -->
			<div class="wp-block-group has-contrast-color has-base-background-color has-text-color has-background" style="border-radius:0.5rem;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Stay Updated', 'marcia' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|40"}}}} -->
				<p style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Enter your email to receive our newsletter:', 'marcia' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:html -->
				<form class="newsletter-form">
					<input type="email" placeholder="<?php esc_attr_e( 'your@email.com', 'marcia' ); ?>" required style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--wp--preset--color--gray-300); border-radius: 0.25rem; margin-bottom: 1rem; font-size: 1rem;">
					<button type="submit" class="wp-block-button__link wp-element-button" style="width: 100%; background-color: var(--wp--preset--color--primary); color: var(--wp--preset--color--base); padding: 0.75rem 1.5rem; border: none; border-radius: 0.25rem; font-weight: 600; cursor: pointer;"><?php esc_html_e( 'Subscribe Now', 'marcia' ); ?></button>
				</form>
				<!-- /wp:html -->

				<!-- wp:paragraph {"fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
				<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'By subscribing, you agree to our Privacy Policy and consent to receive updates.', 'marcia' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
