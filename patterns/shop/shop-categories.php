<?php
/**
 * Title: Shop Categories
 * Slug: marcia/shop-categories
 * Categories: marcia-shop
 * Description: Product category showcase with images and links
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Shop by Category', 'marcia' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"},"border":{"radius":"0.5rem"}},"className":"is-style-marcia-shadow","layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-marcia-shadow" style="border-radius:0.5rem;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"top":"0.5rem","left":"0.5rem","right":"0.5rem"}}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="https://placehold.co/400x300/007cba/ffffff?text=Electronics" alt="<?php esc_attr_e( 'Electronics', 'marcia' ); ?>" style="border-top-left-radius:0.5rem;border-top-right-radius:0.5rem;border-bottom-left-radius:0.5rem"/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"textAlign":"center"} -->
					<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Electronics', 'marcia' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
					<div class="wp-block-buttons">
						<!-- wp:button {"width":100} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="/product-category/electronics"><?php esc_html_e( 'Shop Electronics', 'marcia' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"},"border":{"radius":"0.5rem"}},"className":"is-style-marcia-shadow","layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-marcia-shadow" style="border-radius:0.5rem;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"top":"0.5rem","left":"0.5rem","right":"0.5rem"}}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="https://placehold.co/400x300/00a0d2/ffffff?text=Clothing" alt="<?php esc_attr_e( 'Clothing', 'marcia' ); ?>" style="border-top-left-radius:0.5rem;border-top-right-radius:0.5rem;border-bottom-left-radius:0.5rem"/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"textAlign":"center"} -->
					<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Clothing', 'marcia' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
					<div class="wp-block-buttons">
						<!-- wp:button {"width":100} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="/product-category/clothing"><?php esc_html_e( 'Shop Clothing', 'marcia' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"},"border":{"radius":"0.5rem"}},"className":"is-style-marcia-shadow","layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-marcia-shadow" style="border-radius:0.5rem;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"top":"0.5rem","left":"0.5rem","right":"0.5rem"}}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="https://placehold.co/400x300/ff6900/ffffff?text=Home+%26+Living" alt="<?php esc_attr_e( 'Home & Living', 'marcia' ); ?>" style="border-top-left-radius:0.5rem;border-top-right-radius:0.5rem;border-bottom-left-radius:0.5rem"/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"textAlign":"center"} -->
					<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Home & Living', 'marcia' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
					<div class="wp-block-buttons">
						<!-- wp:button {"width":100} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="/product-category/home-living"><?php esc_html_e( 'Shop Home & Living', 'marcia' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
