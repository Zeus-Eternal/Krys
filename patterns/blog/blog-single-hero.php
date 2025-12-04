<?php
/**
 * Title: Blog Post Hero
 * Slug: marcia/blog-single-hero
 * Categories: marcia-blog
 * Description: Large hero section for single blog posts
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":500,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-cover alignfull" style="min-height:500px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
	<div class="wp-block-group">
		<!-- wp:post-terms {"term":"category","textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->

		<!-- wp:post-title {"textAlign":"center","level":1,"textColor":"base","fontSize":"xx-large"} /-->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
			<!-- wp:post-author {"showAvatar":false,"textColor":"base"} /-->

			<!-- wp:paragraph {"textColor":"base"} -->
			<p class="has-base-color has-text-color">•</p>
			<!-- /wp:paragraph -->

			<!-- wp:post-date {"textColor":"base"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
