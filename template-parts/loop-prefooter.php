<ul class="prefooter-list row align-spaced">
   <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
         <li class="loop-footer-wrapper">
            <a href="<?php the_permalink(); ?>" <?php post_class('footer-gallery') ?> id="post-<?php the_ID(); ?>">
               <img src="<?php the_field('mini-thumbnail') ?>" alt="<?php the_title() ?>"/>
            </a>
			<h6><?php the_title(); ?></h6>
		</li>
   <?php endwhile;?>
</ul>
