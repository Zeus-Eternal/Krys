<?php
/**
 * Title: Pricing Comparison Table
 * Slug: marcia/pricing-comparison
 * Categories: marcia-pricing
 * Description: Detailed feature comparison table for pricing plans
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--60)"><?php esc_html_e( 'Compare Plans', 'marcia' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:table {"hasFixedLayout":true,"className":"is-style-stripes"} -->
	<figure class="wp-block-table is-style-stripes"><table class="has-fixed-layout"><thead><tr><th><?php esc_html_e( 'Features', 'marcia' ); ?></th><th><?php esc_html_e( 'Starter', 'marcia' ); ?></th><th><?php esc_html_e( 'Professional', 'marcia' ); ?></th><th><?php esc_html_e( 'Enterprise', 'marcia' ); ?></th></tr></thead><tbody><tr><td><strong><?php esc_html_e( 'Projects', 'marcia' ); ?></strong></td><td><?php esc_html_e( '10', 'marcia' ); ?></td><td><?php esc_html_e( 'Unlimited', 'marcia' ); ?></td><td><?php esc_html_e( 'Unlimited', 'marcia' ); ?></td></tr><tr><td><strong><?php esc_html_e( 'Storage', 'marcia' ); ?></strong></td><td><?php esc_html_e( '5GB', 'marcia' ); ?></td><td><?php esc_html_e( '100GB', 'marcia' ); ?></td><td><?php esc_html_e( 'Unlimited', 'marcia' ); ?></td></tr><tr><td><strong><?php esc_html_e( 'Team Members', 'marcia' ); ?></strong></td><td><?php esc_html_e( '3', 'marcia' ); ?></td><td><?php esc_html_e( '10', 'marcia' ); ?></td><td><?php esc_html_e( 'Unlimited', 'marcia' ); ?></td></tr><tr><td><strong><?php esc_html_e( 'Support', 'marcia' ); ?></strong></td><td><?php esc_html_e( 'Email', 'marcia' ); ?></td><td><?php esc_html_e( 'Priority', 'marcia' ); ?></td><td><?php esc_html_e( '24/7 Phone', 'marcia' ); ?></td></tr><tr><td><strong><?php esc_html_e( 'API Access', 'marcia' ); ?></strong></td><td>✗</td><td>✓</td><td>✓</td></tr><tr><td><strong><?php esc_html_e( 'Custom Integrations', 'marcia' ); ?></strong></td><td>✗</td><td>✗</td><td>✓</td></tr><tr><td><strong><?php esc_html_e( 'Advanced Analytics', 'marcia' ); ?></strong></td><td>✗</td><td>✓</td><td>✓</td></tr><tr><td><strong><?php esc_html_e( 'Dedicated Manager', 'marcia' ); ?></strong></td><td>✗</td><td>✗</td><td>✓</td></tr><tr><td><strong><?php esc_html_e( 'Monthly Price', 'marcia' ); ?></strong></td><td><strong>$9</strong></td><td><strong>$29</strong></td><td><strong>$99</strong></td></tr></tbody></table></figure>
	<!-- /wp:table -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Start Free Trial', 'marcia' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
