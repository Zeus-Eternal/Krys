<?php
/**
 * Title: Two Column Content
 * Slug: marcia/content-two-column
 * Categories: marcia-content
 * Description: Split layout with image and text content side by side
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.5rem"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/content-feature.jpg" alt="" style="border-radius:0.5rem;aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"fontSize":"small","textColor":"primary"} -->
			<p class="has-primary-color has-text-color has-small-font-size"><?php esc_html_e( 'FEATURE', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Powerful Features for Modern Teams', 'marcia' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"large"} -->
			<p class="has-large-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Our platform provides everything you need to collaborate effectively, manage projects efficiently, and deliver exceptional results.', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"is-style-marcia-checkmarks","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<ul class="is-style-marcia-checkmarks" style="margin-top:var(--wp--preset--spacing--40)">
				<li><?php esc_html_e( 'Real-time collaboration tools', 'marcia' ); ?></li>
				<li><?php esc_html_e( 'Advanced analytics and reporting', 'marcia' ); ?></li>
				<li><?php esc_html_e( 'Seamless integrations', 'marcia' ); ?></li>
				<li><?php esc_html_e( 'Enterprise-grade security', 'marcia' ); ?></li>
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Learn More', 'marcia' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Watch Demo', 'marcia' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
