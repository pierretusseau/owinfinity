<?php
/*
Template Name: Front v2.0
*/
get_header(); ?>

<!-- <section id="load_screen">
	<div id="loading">
		Loading Element
	</div>
</section> -->
<div class="main-wrap parallax-window" data-parallax="scroll" data-image-src="<?php do_action('parallax') ?>">
	<section id="listing-hero">
		<div class="wrap--partie-1 row">
			<section id="listing--left-column" class="column small-6">
				<h3>Attack</h3>
				<?php do_action('MyPostsCat','attack') ?>
				<h3>Defense</h3>
				<?php do_action('MyPostsCat','defense') ?>
				<h3>Tank</h3>
				<?php do_action('MyPostsCat','tank') ?>
				<h3>Support</h3>
				<?php do_action('MyPostsCat','support') ?>
			</section>
			<section id="listing--right-column" class="column small-6">
				<!-- REMPLIR ICI AVEC LE NON:HOVER EN ATTENDANT -->
				<div id="home--video">
					<h3>Featured video</h3>
					<?php if(get_field('video')) : ?>
						<iframe width="580" height="315" src="<?php the_field("video"); ?>" frameborder="0" allowfullscreen></iframe>
					<?php else : ?>
						<iframe width="580" height="315" src="https://www.youtube.com/embed/FqnKB22pOC0" frameborder="0" allowfullscreen></iframe>
					<?php endif; ?>
					<h3>Recent updates</h3>
					<div id="recent-update-wrap">
						<ul id="home--recent-updates" class="row align-spaced">
							<?php do_action('LastUpdates'); ?>
						</ul>
					</div>
				</div>
			</section>
		</div>
	</section>
	<section id="home--separator">
		<!-- EMPTY -->
	</section>
	<section id="home-second-part">
		<div class="row" id="home--partie-2-title">
			<h3 class="column small-9">Blog</h3>
			<h3 class="column small-3">Twitch</h3>
		</div>
		<div class="row" id="home--partie-2-equalizedblog" data-equalizer="liste-article">
			<section id="home--wrap-listblog" class="column small-9">
				<ul id="home--list-blog" class="row">
					<?php if(get_locale()=="fr_FR") : ?>
						<?php do_action('HomeLoopBlog','fr') ?>
					<?php else: ?>
						<?php do_action('HomeLoopBlog','en') ?>
					<?php endif; ?>

				</ul>
			</section>

			<section id="home--twitch-block" class="column small-3" data-equalizer-watch="liste-article">
				<div id="twitch-wrap" data-equalizer-watch="liste-article">
					<div id="twitch-stream">
						<iframe src="http://streambadge.com/twitch/dark/<?php the_field('twitch_embed') ?>/" style="border:none;height:4em;width:100%"></iframe>
					</div>
					<?php the_field('twitch_text') ?>
				</div>
			</section>
		</div>
		<div class="row" id="home--partie-2-buttons">
			<section id="community--left-column" class="column small-9">
				<a href="<?php do_action('GetBlogPage'); ?>" class="expanded button">
					Read more
				</a>
			</section>
			<section id="community--right-column" class="column small-3">
				<?php do_action('foundationpress_after_sidebar') ?>
			</section>
		</div>
	</section>
</div>
<?php get_footer();
