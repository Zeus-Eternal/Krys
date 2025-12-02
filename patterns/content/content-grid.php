<?php
/**
 * Title: Content Grid
 * Slug: marcia/content-grid
 * Categories: marcia-content
 * Description: 3-column grid layout for showcasing content cards
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--60)"><?php esc_html_e( 'Featured Content', 'marcia' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-marcia-card","layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-marcia-card">
				<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.5rem"}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/content-1.jpg" alt="" style="border-radius:0.5rem;aspect-ratio:16/9;object-fit:cover"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Getting Started Guide', 'marcia' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
				<p style="margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Everything you need to know to get up and running quickly with our platform.', 'marcia' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:button {"className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Read More →', 'marcia' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-marcia-card","layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-marcia-card">
				<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.5rem"}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/content-2.jpg" alt="" style="border-radius:0.5rem;aspect-ratio:16/9;object-fit:cover"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Best Practices', 'marcia' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
				<p style="margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Learn the proven strategies that help teams maximize productivity and results.', 'marcia' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:button {"className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Read More →', 'marcia' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-marcia-card","layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-marcia-card">
				<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.5rem"}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/content-3.jpg" alt="" style="border-radius:0.5rem;aspect-ratio:16/9;object-fit:cover"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Case Studies', 'marcia' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
				<p style="margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Real-world examples of how companies achieved success with our solution.', 'marcia' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:button {"className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Read More →', 'marcia' ); ?></a></div>
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
