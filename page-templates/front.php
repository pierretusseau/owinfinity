<?php
/*
Template Name: Front
*/
get_header(); ?>
<?php // include(TEMPLATEPATH.'/template-parts/overlay.php') ?>
<section class="page-in-progress">
	<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/page-in-progress.png" alt="Page in progress" class="page-in-progress--img"/>
</section>
<div class="main-wrap">
	<!-- <div id="clock-wrapper">
		<h3>Overwatch Out since</h3>
		<div id="clock"></div>
		<h6>This will eventually disappear</h6>
	</div> -->
	<section class="main-gallery-wrapper">
		<section class="row">
			<?php
			// My custom gallery
			do_action('MyPostAction',23);
			?>
		</section>
	</section>
</div>
<?php get_footer();
