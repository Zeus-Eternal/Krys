<?php
/**
 * Title: No Results Pattern
 * Slug: marcia/hidden-no-results
 * Inserter: no
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'No results found', 'marcia' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'marcia' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"<?php esc_attr_e( 'Search', 'marcia' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Search...', 'marcia' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'marcia' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center"} /-->
</div>
<!-- /wp:group -->
