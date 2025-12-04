<?php
/**
 * Title: Pricing Table Basic
 * Slug: marcia/pricing-basic
 * Categories: marcia-pricing
 * Description: Simple 3-column pricing table
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--60)"><?php esc_html_e( 'Simple Pricing', 'marcia' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"className":"is-style-marcia-card"} -->
		<div class="wp-block-column is-style-marcia-card">
			<!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Starter', 'marcia' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","fontSize":"xx-large","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<p class="has-text-align-center has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--40)"><strong>$9</strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'per month', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
			<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"/>
			<!-- /wp:separator -->

			<!-- wp:list {"className":"is-style-marcia-checkmarks"} -->
			<ul class="is-style-marcia-checkmarks">
				<li><?php esc_html_e( '10 projects', 'marcia' ); ?></li>
				<li><?php esc_html_e( '5GB storage', 'marcia' ); ?></li>
				<li><?php esc_html_e( 'Email support', 'marcia' ); ?></li>
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button {"width":100} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'marcia' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"is-style-marcia-shadow"} -->
		<div class="wp-block-column is-style-marcia-shadow">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.5rem","right":"1rem","bottom":"0.5rem","left":"1rem"},"margin":{"bottom":"var:preset|spacing|30"}},"border":{"radius":"0.25rem"}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-base-color has-primary-background-color has-text-color has-background" style="border-radius:0.25rem;margin-bottom:var(--wp--preset--spacing--30);padding-top:0.5rem;padding-right:1rem;padding-bottom:0.5rem;padding-left:1rem">
				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size"><?php esc_html_e( 'POPULAR', 'marcia' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Professional', 'marcia' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","fontSize":"xx-large","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<p class="has-text-align-center has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--40)"><strong>$29</strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'per month', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
			<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"/>
			<!-- /wp:separator -->

			<!-- wp:list {"className":"is-style-marcia-checkmarks"} -->
			<ul class="is-style-marcia-checkmarks">
				<li><?php esc_html_e( 'Unlimited projects', 'marcia' ); ?></li>
				<li><?php esc_html_e( '100GB storage', 'marcia' ); ?></li>
				<li><?php esc_html_e( 'Priority support', 'marcia' ); ?></li>
				<li><?php esc_html_e( 'Advanced features', 'marcia' ); ?></li>
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button {"width":100} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'marcia' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"is-style-marcia-card"} -->
		<div class="wp-block-column is-style-marcia-card">
			<!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Enterprise', 'marcia' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","fontSize":"xx-large","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<p class="has-text-align-center has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--40)"><strong>$99</strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'per month', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
			<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"/>
			<!-- /wp:separator -->

			<!-- wp:list {"className":"is-style-marcia-checkmarks"} -->
			<ul class="is-style-marcia-checkmarks">
				<li><?php esc_html_e( 'Unlimited everything', 'marcia' ); ?></li>
				<li><?php esc_html_e( 'Unlimited storage', 'marcia' ); ?></li>
				<li><?php esc_html_e( '24/7 phone support', 'marcia' ); ?></li>
				<li><?php esc_html_e( 'Custom integrations', 'marcia' ); ?></li>
				<li><?php esc_html_e( 'Dedicated account manager', 'marcia' ); ?></li>
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button {"width":100} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Contact Sales', 'marcia' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
