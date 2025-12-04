<?php
/**
 * Title: New Arrivals
 * Slug: marcia/shop-new-arrivals
 * Categories: marcia-shop
 * Description: Showcase new product arrivals
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'New Arrivals', 'marcia' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Check out our latest products', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-marcia-outline"} -->
			<div class="wp-block-button is-style-marcia-outline"><a class="wp-block-button__link wp-element-button" href="/shop?orderby=date"><?php esc_html_e( 'View All New', 'marcia' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:woocommerce/product-collection {"queryId":2,"query":{"perPage":4,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"displayLayout":{"type":"flex","columns":4}} -->
	<div class="wp-block-woocommerce-product-collection">
		<!-- wp:woocommerce/product-template -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"},"border":{"width":"1px","radius":"0.5rem"}},"borderColor":"gray-200","layout":{"type":"default"}} -->
			<div class="wp-block-group has-border-color has-gray-200-border-color" style="border-width:1px;border-radius:0.5rem;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.25rem","right":"0.5rem","bottom":"0.25rem","left":"0.5rem"},"margin":{"bottom":"var:preset|spacing|30"}},"border":{"radius":"0.25rem"}},"backgroundColor":"success","textColor":"base","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-base-color has-success-background-color has-text-color has-background" style="border-radius:0.25rem;margin-bottom:var(--wp--preset--spacing--30);padding-top:0.25rem;padding-right:0.5rem;padding-bottom:0.25rem;padding-left:0.5rem">
					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size"><?php esc_html_e( 'NEW', 'marcia' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:woocommerce/product-image {"isDescendentOfQueryLoop":true,"style":{"border":{"radius":"0.25rem"}}} /-->

				<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"medium","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

				<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} /-->

				<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"textAlign":"center","width":100,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:woocommerce/product-template -->
	</div>
	<!-- /wp:woocommerce/product-collection -->
</div>
<!-- /wp:group -->
