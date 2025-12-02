<?php
/**
 * Title: Hero with Video Background
 * Slug: marcia/hero-video
 * Categories: marcia-hero
 * Description: Full-width hero with video background and overlay
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/hero-bg.mp4","dimRatio":60,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":600,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-cover alignfull" style="min-height:600px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/hero-bg.mp4" data-object-fit="cover"></video><div class="wp-block-cover__inner-container">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":1,"textColor":"base","fontSize":"xxx-large"} -->
		<h1 class="wp-block-heading has-text-align-center has-base-color has-text-color has-xxx-large-font-size"><?php esc_html_e( 'Experience the Future', 'marcia' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"base","fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
		<p class="has-text-align-center has-base-color has-text-color has-large-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Join thousands of teams already using our platform to build, ship, and scale their products faster than ever before.', 'marcia' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
			<!-- wp:button {"backgroundColor":"base","textColor":"contrast","fontSize":"medium"} -->
			<div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Start Free Trial', 'marcia' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"backgroundColor":"transparent","textColor":"base","style":{"border":{"width":"2px","color":"#ffffff"}},"fontSize":"medium"} -->
			<div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link has-base-color has-transparent-background-color has-text-color has-background has-border-color wp-element-button" style="border-color:#ffffff;border-width:2px"><?php esc_html_e( 'Learn More', 'marcia' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
