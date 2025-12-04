<?php
/**
 * Title: Contact Card
 * Slug: marcia/contact-card
 * Categories: marcia-contact
 * Description: Centered contact card with form placeholder
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"gray-50","layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group alignfull has-gray-50-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"className":"is-style-marcia-shadow","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}},"border":{"radius":"1rem"}},"backgroundColor":"base","layout":{"type":"default"}} -->
	<div class="wp-block-group is-style-marcia-shadow has-base-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
		<!-- wp:heading {"textAlign":"center"} -->
		<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Send Us a Message', 'marcia' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"secondary"} -->
		<p class="has-text-align-center has-secondary-color has-text-color" style="margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'We\'ll get back to you within 24 hours', 'marcia' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
		<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"/>
		<!-- /wp:separator -->

		<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
		<p style="margin-bottom:var(--wp--preset--spacing--40)"><strong><?php esc_html_e( 'Name', 'marcia' ); ?></strong></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
		<p style="margin-bottom:var(--wp--preset--spacing--40)"><strong><?php esc_html_e( 'Email', 'marcia' ); ?></strong></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
		<p style="margin-bottom:var(--wp--preset--spacing--40)"><strong><?php esc_html_e( 'Message', 'marcia' ); ?></strong></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small","textColor":"secondary","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
		<p class="has-secondary-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Add your contact form shortcode or block here', 'marcia' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"width":100} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Send Message', 'marcia' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
		<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"/>
		<!-- /wp:separator -->

		<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
		<p class="has-text-align-center has-small-font-size"><?php esc_html_e( 'Or email us directly at', 'marcia' ); ?> <a href="mailto:hello@example.com"><strong><?php esc_html_e( 'hello@example.com', 'marcia' ); ?></strong></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
