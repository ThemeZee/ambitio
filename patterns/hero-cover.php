<?php
/**
 * Title: Hero Cover
 * Slug: ambitious/hero-cover
 * Categories: ambitious_hero
*/
?>

<!-- wp:cover {"url":"http://localhost/wp-content/themes/ambitious/assets/img/default-image.png","isRepeated":true,"dimRatio":80,"contentPosition":"center center","align":"full"} -->
<div class="wp-block-cover alignfull is-repeated" style="background-image:url(http://localhost/wp-content/themes/ambitious/assets/img/default-image.png)">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim"></span>

	<div class="wp-block-cover__inner-container">

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"3.5vw","right":"3.5vw","bottom":"3.5vw","left":"3.5vw"}}},"textColor":"white","layout":{"type":"default","contentSize":"800px"}} -->
	<div class="wp-block-group has-white-color has-text-color" style="padding-top:3.5vw;padding-right:3.5vw;padding-bottom:3.5vw;padding-left:3.5vw">

		<!-- wp:paragraph -->
		<p><?php _e( 'Add a subtitle here', 'ambitious' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1} -->
		<h1><?php _e( 'Hero Headline', 'ambitious' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"medium"} -->
		<p class="has-medium-font-size">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Join now', 'ambitious' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Learn more', 'ambitious' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

	</div>

</div>
<!-- /wp:cover -->
