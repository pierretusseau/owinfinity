<div class="gallery-list">
   <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<?php
			$charCat = get_field('character_category');
			$generatedURI = get_stylesheet_directory_uri().'/assets/images/icons/skill-common/flip-'.get_field('character_category').'.png';
		?>
		<div class="home-gallery--wrapper">
			<h3 class="home-gallery--name">
				<?php the_title(); ?>
			</h3>
			<div class="home-gallery--item">
				<a href="<?php the_permalink(); ?>" <?php post_class('home-gallery--link') ?> id="home-gallery--<?php the_ID(); ?>">
					<figure class="home-gallery--flip front">
						<img src="<?php the_field('mini-thumbnail') ?>" alt="Mini-<?php the_title() ?>"/>
					</figure>
					<figure class="home-gallery--flip back <?= $charCat ?>-flip">
						<img src="<?= $generatedURI ?>" alt="<?php the_field('character_category') ?>"/>
						<h3>
							<?php the_field('character_category') ?>
						</h3>
					</figure>
				</a>
			</div>
		</div>
   <?php endwhile;?>
</div>
