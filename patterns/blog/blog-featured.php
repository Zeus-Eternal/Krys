<?php
/**
 * Title: Featured Post
 * Slug: marcia/blog-featured
 * Categories: marcia-blog
 * Description: Large featured blog post with image and excerpt
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"gray-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-gray-50-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:query {"queryId":1,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false}} -->
	<div class="wp-block-query">
		<!-- wp:post-template -->
			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-center">
				<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
					<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"0.5rem"}},"className":"is-style-marcia-shadow"} /-->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.25rem","right":"0.75rem","bottom":"0.25rem","left":"0.75rem"},"margin":{"bottom":"var:preset|spacing|40"}},"border":{"radius":"0.25rem"}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
					<div class="wp-block-group has-base-color has-primary-background-color has-text-color has-background" style="border-radius:0.25rem;margin-bottom:var(--wp--preset--spacing--40);padding-top:0.25rem;padding-right:0.75rem;padding-bottom:0.25rem;padding-left:0.75rem">
						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size"><?php esc_html_e( 'FEATURED', 'marcia' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-title {"isLink":true,"fontSize":"xx-large"} /-->

					<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
						<!-- wp:post-author-name /-->
						<!-- wp:post-date /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-excerpt {"moreText":"<?php esc_attr_e( 'Continue Reading', 'marcia' ); ?>","excerptLength":30,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} /-->

					<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
					<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
						<!-- wp:button -->
						<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Read Full Article', 'marcia' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
