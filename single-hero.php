<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="single-post" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<header class="charpage-header">
			<h1 class="entry-title <?php if(get_field('is_ptr')):echo('is-ptr');endif; ?>"><?php the_title(); ?></h1>
			<div class="cat-icon">
				<!-- Attack, Defense, Tank or Support ? -->
				<?php
					$charCat = get_field('character_category');
					$categoryURI = get_stylesheet_directory_uri().'/assets/images/icons/skill-common/flip-'.get_field('character_category').'-large.png';
				?>
				<img src="<?= $categoryURI ?>" alt="<?= $charCat ?>-icon" />
			</div>
			<?php include_once('template-parts/last-edited.php'); ?>
			<div class="last-edited-wrap">
				<h2><strong><?= $changeSince ?></strong> <?= __( 'Day(s) since last update', 'foundationpress' ) ?> <?php //dateUpdate() ?></h2>
			</div>
		</header>
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>

			<?php include_once('template-parts/skill-list.php'); ?>

		<div class="entry-content">

			<?php the_content(); ?>

		</div> <!-- Entry-content -->

</div>

		<!-- <footer>
			<?php // wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
			<p><?php // the_tags(); ?></p>
		</footer> -->
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_footer();
