<?php
/**
 * Title: Testimonial Slider
 * Slug: marcia/testimonials-slider
 * Categories: marcia-testimonials
 * Description: Single large testimonial with client photo and company logo
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"gradient":"primary-gradient","textColor":"base","layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group alignfull has-base-color has-primary-gradient-gradient-background has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size"><?php esc_html_e( 'TESTIMONIAL', 'marcia' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center","fontSize":"x-large","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
	<p class="has-text-align-center has-x-large-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( '"This solution transformed our business. We saw a 300% increase in productivity within the first month. The team is exceptional and the support is world-class."', 'marcia' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:image {"width":"60px","height":"60px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","style":{"border":{"radius":"100%"}}} -->
		<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/testimonial-avatar.jpg" alt="<?php esc_attr_e( 'Client photo', 'marcia' ); ?>" style="border-radius:100%;object-fit:cover;width:60px;height:60px"/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size"><strong><?php esc_html_e( 'Jennifer Martinez', 'marcia' ); ?></strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php esc_html_e( 'CEO, TechCorp Solutions', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size">★★★★★</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
