<?php
/**
 * Title: Content with Sidebar
 * Slug: marcia/content-sidebar
 * Categories: marcia-content
 * Description: Main content area with complementary sidebar
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"66.66%"} -->
		<div class="wp-block-column" style="flex-basis:66.66%">
			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Main Content Area', 'marcia' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"large"} -->
			<p class="has-large-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'This is the main content area where your primary information will be displayed. It provides ample space for detailed content, images, and rich media.', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.5rem"},"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
			<figure class="wp-block-image size-large has-custom-border" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/content-main.jpg" alt="" style="border-radius:0.5rem;aspect-ratio:16/9;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Key Benefits', 'marcia' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:list {"className":"is-style-marcia-checkmarks","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<ul class="is-style-marcia-checkmarks" style="margin-top:var(--wp--preset--spacing--40)">
				<li><?php esc_html_e( 'Comprehensive feature set', 'marcia' ); ?></li>
				<li><?php esc_html_e( 'Easy to use interface', 'marcia' ); ?></li>
				<li><?php esc_html_e( 'Excellent customer support', 'marcia' ); ?></li>
				<li><?php esc_html_e( 'Regular updates and improvements', 'marcia' ); ?></li>
			</ul>
			<!-- /wp:list -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'marcia' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%">
			<!-- wp:group {"className":"is-style-marcia-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-marcia-card" style="margin-bottom:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php esc_html_e( 'Quick Links', 'marcia' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:list {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<ul style="margin-top:var(--wp--preset--spacing--40)">
					<li><a href="#"><?php esc_html_e( 'Documentation', 'marcia' ); ?></a></li>
					<li><a href="#"><?php esc_html_e( 'API Reference', 'marcia' ); ?></a></li>
					<li><a href="#"><?php esc_html_e( 'Tutorials', 'marcia' ); ?></a></li>
					<li><a href="#"><?php esc_html_e( 'Support', 'marcia' ); ?></a></li>
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"is-style-marcia-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"bottom":"var:preset|spacing|50"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-marcia-card has-base-color has-primary-background-color has-text-color has-background" style="margin-bottom:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
				<!-- wp:heading {"level":3,"textColor":"base"} -->
				<h3 class="wp-block-heading has-base-color has-text-color"><?php esc_html_e( 'Get Started', 'marcia' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
				<p style="margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Ready to try it out? Start your free trial today.', 'marcia' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:button {"backgroundColor":"base","textColor":"contrast","width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Start Free Trial', 'marcia' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"is-style-marcia-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group is-style-marcia-card" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php esc_html_e( 'Newsletter', 'marcia' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"small"} -->
				<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Subscribe to get the latest updates and news.', 'marcia' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:button {"width":100,"className":"is-style-outline"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Subscribe', 'marcia' ); ?></a></div>
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
