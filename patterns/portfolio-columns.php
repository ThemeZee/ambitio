<?php
/**
 * Title: Portfolio Columns
 * Slug: ambitious/portfolio-columns
 * Categories: ambitious_portfolio
*/
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"3.5vw","right":"3.5vw","bottom":"3.5vw","left":"3.5vw"}}},"backgroundColor":"white","layout":{"contentSize":"800px","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:3.5vw;padding-right:3.5vw;padding-bottom:3.5vw;padding-left:3.5vw">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"3.5vw"}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">

			<!-- wp:heading -->
			<h2><?php _e( 'What we have done', 'ambitious' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">

			<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"2rem"}}} -->
			<div class="wp-block-columns alignwide">

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-style-default">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt="">
					</figure>
					<!-- /wp:image -->

					<!-- wp:heading {"level":3"} -->
					<h3><?php _e( 'Project One', 'ambitious' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button -->
						<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Learn more', 'ambitious' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->

				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-style-default">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt="">
					</figure>
					<!-- /wp:image -->

					<!-- wp:heading {"level":3"} -->
					<h3><?php _e( 'Project Two', 'ambitious' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button -->
						<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Learn more', 'ambitious' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->

				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
