<?php
/*
Template Name: Blog
*/
get_header(); ?>

<div id="blog-wrapper">
	<article class="row">
		<h1>The <?php the_title() ?></h1>
	</article>
	<p class="row">Yeah an update is needed :(</p>
	<section class="blog--list-article row">
		<?php do_action('LoopBlog') ?>
	</section>
</div>

<?php get_footer();
