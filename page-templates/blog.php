<?php
/*
Template Name: Blog
*/
get_header(); ?>

<div id="blog-wrapper" class="parallax-window" data-parallax="scroll" data-image-src="<?php do_action('parallax') ?>">
	<section class="blog--list-article row">
		<h2 id="blog--title">The <?php the_title() ?></h2>
		<div class="blog--wrapper columns small-9">
			<?php do_action('LoopBlog') ?>
		</div>
		<div class="blog--wrapper-siderbar columns small-3">
			<?php get_sidebar() ?>
		</div>
	</section>
</div>

<?php get_footer();
