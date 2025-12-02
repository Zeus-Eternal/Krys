<?php
/**
 * Title: Gallery Masonry
 * Slug: marcia/gallery-masonry
 * Categories: marcia-gallery
 * Description: Masonry-style gallery with varying heights
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"gray-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-gray-50-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--60)"><?php esc_html_e( 'Featured Work', 'marcia' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.5rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
			<figure class="wp-block-image size-large has-custom-border" style="margin-bottom:var(--wp--preset--spacing--40)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gallery-1.jpg" alt="" style="border-radius:0.5rem;aspect-ratio:3/4;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.5rem"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gallery-2.jpg" alt="" style="border-radius:0.5rem;aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.5rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
			<figure class="wp-block-image size-large has-custom-border" style="margin-bottom:var(--wp--preset--spacing--40)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gallery-3.jpg" alt="" style="border-radius:0.5rem;aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.5rem"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gallery-4.jpg" alt="" style="border-radius:0.5rem;aspect-ratio:3/4;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.5rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
			<figure class="wp-block-image size-large has-custom-border" style="margin-bottom:var(--wp--preset--spacing--40)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gallery-5.jpg" alt="" style="border-radius:0.5rem;aspect-ratio:3/4;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.5rem"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gallery-6.jpg" alt="" style="border-radius:0.5rem;aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
