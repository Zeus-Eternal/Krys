<?php
/**
 * Title: Team Cards with Bio
 * Slug: marcia/team-cards
 * Categories: marcia-team
 * Description: Team members with photos, roles, bios, and social links
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Meet Our Team', 'marcia' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-marcia-card","layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-marcia-card">
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.5rem"}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/team-1.jpg" alt="<?php esc_attr_e( 'Team member', 'marcia' ); ?>" style="border-radius:0.5rem;aspect-ratio:1;object-fit:cover"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<h3 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Sarah Johnson', 'marcia' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small"} -->
				<p class="has-text-align-center has-primary-color has-text-color has-small-font-size"><?php esc_html_e( 'Chief Executive Officer', 'marcia' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
				<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Leading our vision with 15+ years of industry experience and a passion for innovation.', 'marcia' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#000000","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
					<!-- wp:social-link {"url":"#","service":"twitter"} /-->
					<!-- wp:social-link {"url":"#","service":"mail"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-marcia-card","layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-marcia-card">
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.5rem"}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/team-2.jpg" alt="<?php esc_attr_e( 'Team member', 'marcia' ); ?>" style="border-radius:0.5rem;aspect-ratio:1;object-fit:cover"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<h3 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Michael Chen', 'marcia' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small"} -->
				<p class="has-text-align-center has-primary-color has-text-color has-small-font-size"><?php esc_html_e( 'Chief Technology Officer', 'marcia' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
				<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Architecting scalable solutions and leading our technical strategy with expertise.', 'marcia' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#000000","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
					<!-- wp:social-link {"url":"#","service":"github"} /-->
					<!-- wp:social-link {"url":"#","service":"mail"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-marcia-card","layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-marcia-card">
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.5rem"}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/team-3.jpg" alt="<?php esc_attr_e( 'Team member', 'marcia' ); ?>" style="border-radius:0.5rem;aspect-ratio:1;object-fit:cover"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<h3 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Emily Rodriguez', 'marcia' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small"} -->
				<p class="has-text-align-center has-primary-color has-text-color has-small-font-size"><?php esc_html_e( 'Head of Design', 'marcia' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
				<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Creating beautiful experiences that delight users and drive business results.', 'marcia' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#000000","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
					<!-- wp:social-link {"url":"#","service":"dribbble"} /-->
					<!-- wp:social-link {"url":"#","service":"mail"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
