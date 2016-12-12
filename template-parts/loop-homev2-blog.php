<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<li class="column small-4">
		<a href="<?php the_permalink() ?>">
			<h5><?php the_title() ?></h5>
		</a>
	</li>
<?php endwhile; ?>
