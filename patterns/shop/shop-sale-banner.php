<?php
/**
 * Title: Sale Banner
 * Slug: marcia/shop-sale-banner
 * Categories: marcia-shop
 * Description: Eye-catching sale promotion banner
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"accent","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-accent-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Spring Sale', 'marcia' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:heading {"level":3,"fontSize":"x-large","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
			<h3 class="wp-block-heading has-x-large-font-size" style="margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Up to 50% Off', 'marcia' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
			<p class="has-large-font-size" style="margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Limited time offer on selected items. Free shipping on all orders.', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button {"backgroundColor":"base","textColor":"contrast"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button" href="/shop?filter=sale"><?php esc_html_e( 'Shop Sale', 'marcia' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}},"border":{"radius":"50%","width":"4px"}},"borderColor":"base","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color has-base-border-color" style="border-width:4px;border-radius:50%;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
				<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large"} -->
				<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size">50%</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
				<p class="has-text-align-center has-large-font-size"><?php esc_html_e( 'OFF', 'marcia' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
