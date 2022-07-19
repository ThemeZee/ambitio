<?php
/**
 * Title: Postmeta
 * Slug: ambitious/postmeta
 * Inserter: no
*/
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0.4em"}},"textColor":"dark-gray","layout":{"type":"flex","allowOrientation":false,"flexWrap":"wrap"}} -->
<div class="wp-block-group has-dark-gray-color has-text-color">

	<!-- wp:paragraph -->
	<p><?php _e( 'Posted on', 'ambitious' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:post-date {"isLink":true} /-->

	<!-- wp:paragraph -->
	<p><?php _e( 'by', 'ambitious' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:post-author {"showAvatar":false} /-->

</div>
<!-- /wp:group -->
