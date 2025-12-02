<?php
/**
 * Title: Author Bio
 * Slug: marcia/blog-author-bio
 * Categories: marcia-blog
 * Description: Author biography box for posts
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"radius":"0.5rem"}},"backgroundColor":"gray-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-gray-50-background-color has-background" style="border-radius:0.5rem;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"100px"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100px">
			<!-- wp:avatar {"size":100,"style":{"border":{"radius":"50%"}}} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'About the Author', 'marcia' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:post-author-name {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} /-->

			<!-- wp:post-author-biography {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
