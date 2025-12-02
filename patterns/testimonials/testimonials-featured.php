<?php
/**
 * Title: Featured Testimonial
 * Slug: marcia/testimonials-featured
 * Categories: marcia-testimonials
 * Description: Large split layout testimonial with image and detailed quote
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"gray-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-gray-50-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.5rem"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimonial-featured.jpg" alt="<?php esc_attr_e( 'Client testimonial', 'marcia' ); ?>" style="border-radius:0.5rem;aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- wp:paragraph {"fontSize":"small","textColor":"primary"} -->
			<p class="has-primary-color has-text-color has-small-font-size"><?php esc_html_e( 'SUCCESS STORY', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'How We Scaled to 10,000 Users', 'marcia' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"large"} -->
			<p class="has-large-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( '"Working with this team has been game-changing. Their expertise and dedication helped us scale from 500 to 10,000 users in just 6 months. The platform is rock-solid and the ROI has exceeded all expectations."', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
			<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"/>
			<!-- /wp:separator -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"width":"50px","height":"50px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","style":{"border":{"radius":"100%"}}} -->
				<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimonial-avatar-2.jpg" alt="<?php esc_attr_e( 'Client photo', 'marcia' ); ?>" style="border-radius:100%;object-fit:cover;width:50px;height:50px"/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph -->
					<p><strong><?php esc_html_e( 'David Thompson', 'marcia' ); ?></strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"fontSize":"small","textColor":"secondary"} -->
					<p class="has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'Founder & CEO, GrowthLabs', 'marcia' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"textColor":"warning"} -->
				<p class="has-warning-color has-text-color">★★★★★</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
