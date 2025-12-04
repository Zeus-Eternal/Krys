<?php
/**
 * Title: Shop Hero
 * Slug: marcia/shop-hero
 * Categories: marcia-shop
 * Description: Eye-catching hero section for shop homepage with call-to-action
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"gradient":"primary-gradient","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-primary-gradient-gradient-background has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large"} -->
	<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'Shop Our Collection', 'marcia' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
	<p class="has-text-align-center has-large-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Discover premium products at unbeatable prices. Free shipping on orders over $50.', 'marcia' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:button {"backgroundColor":"base","textColor":"contrast"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button" href="/shop"><?php esc_html_e( 'Shop Now', 'marcia' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-marcia-outline"} -->
		<div class="wp-block-button is-style-marcia-outline"><a class="wp-block-button__link wp-element-button" href="/shop?filter=sale"><?php esc_html_e( 'View Sale', 'marcia' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
