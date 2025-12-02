<?php
/**
 * Title: Gallery Grid
 * Slug: marcia/gallery-grid
 * Categories: marcia-gallery
 * Description: Image gallery in a 3-column grid layout
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--60)"><?php esc_html_e( 'Our Gallery', 'marcia' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:gallery {"columns":3,"linkTo":"none","sizeSlug":"large","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<figure class="wp-block-gallery has-nested-images columns-3 is-cropped">
		<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.5rem"}}} -->
		<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gallery-1.jpg" alt="" style="border-radius:0.5rem"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.5rem"}}} -->
		<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gallery-2.jpg" alt="" style="border-radius:0.5rem"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.5rem"}}} -->
		<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gallery-3.jpg" alt="" style="border-radius:0.5rem"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.5rem"}}} -->
		<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gallery-4.jpg" alt="" style="border-radius:0.5rem"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.5rem"}}} -->
		<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gallery-5.jpg" alt="" style="border-radius:0.5rem"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.5rem"}}} -->
		<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gallery-6.jpg" alt="" style="border-radius:0.5rem"/></figure>
		<!-- /wp:image -->
	</figure>
	<!-- /wp:gallery -->
</div>
<!-- /wp:group -->
