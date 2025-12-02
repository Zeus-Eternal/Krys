<?php
/**
 * Title: Magazine Layout
 * Slug: marcia/blog-magazine
 * Categories: marcia-blog
 * Description: Magazine-style blog layout with sidebar
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
			<!-- wp:query {"queryId":1,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
			<div class="wp-block-query">
				<!-- wp:post-template -->
					<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
					<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--60)">
						<!-- wp:column {"width":"40%"} -->
						<div class="wp-block-column" style="flex-basis:40%">
							<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"0.375rem"}}} /-->
						</div>
						<!-- /wp:column -->

						<!-- wp:column {"width":"60%"} -->
						<div class="wp-block-column" style="flex-basis:60%">
							<!-- wp:post-terms {"term":"category","fontSize":"small"} /-->

							<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} /-->

							<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
							<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
								<!-- wp:post-date {"fontSize":"small"} /-->
								<!-- wp:post-author {"showAvatar":false,"fontSize":"small"} /-->
							</div>
							<!-- /wp:group -->

							<!-- wp:post-excerpt {"moreText":"<?php esc_attr_e( 'Read more', 'marcia' ); ?>","excerptLength":15,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} /-->
						</div>
						<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->

					<!-- wp:separator /-->
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
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"bottom":"var:preset|spacing|50"}},"border":{"radius":"0.5rem"}},"backgroundColor":"gray-50","layout":{"type":"default"}} -->
			<div class="wp-block-group has-gray-50-background-color has-background" style="border-radius:0.5rem;margin-bottom:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Popular Posts', 'marcia' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"comment_count","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
				<div class="wp-block-query">
					<!-- wp:post-template -->
						<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
						<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
							<!-- wp:post-title {"isLink":true,"level":4,"fontSize":"medium"} /-->
							<!-- wp:post-date {"fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} /-->
						</div>
						<!-- /wp:group -->
					<!-- /wp:post-template -->
				</div>
				<!-- /wp:query -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"radius":"0.5rem"}},"backgroundColor":"primary","textColor":"base","layout":{"type":"default"}} -->
			<div class="wp-block-group has-base-color has-primary-background-color has-text-color has-background" style="border-radius:0.5rem;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Newsletter', 'marcia' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|40"}}}} -->
				<p style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Get the latest posts delivered to your inbox.', 'marcia' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"base","textColor":"primary","width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-color has-base-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Subscribe', 'marcia' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
