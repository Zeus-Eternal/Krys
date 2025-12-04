<?php
/**
 * Title: Blog with Sidebar
 * Slug: marcia/blog-sidebar
 * Categories: marcia-blog
 * Description: Blog layout with sidebar for categories and recent posts
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"66.66%"} -->
		<div class="wp-block-column" style="flex-basis:66.66%">
			<!-- wp:query {"queryId":1,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true}} -->
			<div class="wp-block-query">
				<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
					<!-- wp:group {"className":"is-style-marcia-card","layout":{"type":"default"}} -->
					<div class="wp-block-group is-style-marcia-card">
						<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":"0.5rem"}}} /-->

						<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} /-->

						<!-- wp:post-date {"fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} /-->

						<!-- wp:post-excerpt {"moreText":"Read More →","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} /-->
					</div>
					<!-- /wp:group -->
				<!-- /wp:post-template -->

				<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
					<!-- wp:query-pagination-previous /-->
					<!-- wp:query-pagination-numbers /-->
					<!-- wp:query-pagination-next /-->
				<!-- /wp:query-pagination -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%">
			<!-- wp:group {"className":"is-style-marcia-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-marcia-card" style="margin-bottom:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php esc_html_e( 'Categories', 'marcia' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:categories {"showHierarchy":true,"showPostCounts":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"is-style-marcia-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-marcia-card" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php esc_html_e( 'Recent Posts', 'marcia' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:latest-posts {"displayPostDate":true,"displayFeaturedImage":true,"featuredImageSizeSlug":"thumbnail","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
