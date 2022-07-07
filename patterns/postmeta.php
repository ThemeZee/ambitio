<?php
/**
 * Title: Postmeta
 * Slug: ambitious/postmeta
 * Inserter: no
*/
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0.4em"}},"textColor":"gray","layout":{"type":"flex","allowOrientation":false,"flexWrap":"wrap"}} -->
<div class="wp-block-group has-gray-color has-text-color">

	<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
	<p style="font-style:normal;font-weight:700"><?php _e( 'Posted on', 'ambitious' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:post-date {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

	<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
	<p style="font-style:normal;font-weight:700"><?php _e( 'by', 'ambitious' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:post-author {"showAvatar":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

	<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
	<p style="font-style:normal;font-weight:700"><?php _e( 'in', 'ambitious' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

</div>
<!-- /wp:group -->
