<?php
	// If a feature image is set, get the id, so it can be injected as a css background property
	if ( has_post_thumbnail( $post->ID ) ) :
		$sThumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$sThumb = $sThumb[0];
?>
	<img src="<?= $sThumb ?>" alt="Background" id="video-cache">
<?php
	endif;
