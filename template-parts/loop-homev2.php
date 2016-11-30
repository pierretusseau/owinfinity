<div class="home--list-heroes" id="homme--list-<?= $charcat ?>">
   <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	   <div class="home--list-wrapper">
		   <a href="<?= the_permalink(); ?>">
			   <img src="<?php the_field('mini-thumbnail') ?>" alt="<?php the_title() ?>"/>
			   <svg version="1.2" baseProfile="tiny" class="home--svg-circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
			   x="0px" y="0px" viewBox="0 0 60 60" xml:space="preserve">
			   <circle class="svg-cicle" fill="none" stroke="#FFFFFF" stroke-width="5" stroke-miterlimit="10" cx="30" cy="30" r="25"/>
		   </svg>
	   </a>
		<svg version="1.2" baseProfile="tiny" class="home--svg-stroke" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 81.6 65" xml:space="preserve">
			<path class="svg-stroke" fill="none" stroke="#FFFFFF" stroke-width="5" stroke-miterlimit="10" d="M52.8,62.5c0,0-43.3,0-45.2,0
	s-5.9-1.5-5-5s15.4-46.3,15.4-46.3c2.7-7,8.7-8.7,12.9-8.7c0,0,33.9,0,39.3,0s9.9,3.5,8.5,7.8c-1.4,4.3-16,43.7-16,43.7
	C59.6,60.7,55.5,62.5,52.8,62.5z"/>
		</svg>

	   </div>
   <?php endwhile;?>
</div>
