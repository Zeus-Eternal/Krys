<?php
/**
 * Title: On Sale Products
 * Slug: marcia/shop-on-sale
 * Categories: marcia-shop
 * Description: Showcase products currently on sale
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"accent","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-accent-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center","fontSize":"xx-large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Flash Sale! Limited Time Only', 'marcia' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<p class="has-text-align-center has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--60)"><?php esc_html_e( 'Save big on these handpicked deals', 'marcia' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:woocommerce/product-collection {"queryId":3,"query":{"perPage":3,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":true,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"displayLayout":{"type":"flex","columns":3}} -->
	<div class="wp-block-woocommerce-product-collection">
		<!-- wp:woocommerce/product-template -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"0.5rem"}},"backgroundColor":"base","textColor":"contrast","className":"is-style-marcia-shadow","layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-marcia-shadow has-contrast-color has-base-background-color has-text-color has-background" style="border-radius:0.5rem;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true,"align":"left"} /-->

				<!-- wp:woocommerce/product-image {"isDescendentOfQueryLoop":true,"style":{"border":{"radius":"0.25rem"}}} /-->

				<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"medium","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

				<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} /-->

				<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"x-large","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} /-->

				<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"textAlign":"center","width":100,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:woocommerce/product-template -->
	</div>
	<!-- /wp:woocommerce/product-collection -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)">
		<!-- wp:button {"backgroundColor":"base","textColor":"contrast"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button" href="/shop?filter=sale"><?php esc_html_e( 'View All Sale Items', 'marcia' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
