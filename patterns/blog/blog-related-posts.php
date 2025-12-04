<?php
/**
 * Title: Related Posts
 * Slug: marcia/blog-related-posts
 * Categories: marcia-blog
 * Description: Related posts grid for single post pages
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--60)"><?php esc_html_e( 'You Might Also Like', 'marcia' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"is-style-marcia-card","layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-marcia-card">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":"0.375rem"}}} /-->
				<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} /-->
				<!-- wp:post-date {"fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
