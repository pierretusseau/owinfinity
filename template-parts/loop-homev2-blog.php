<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<li class="columns small-4">
		<a href="<?php the_permalink() ?>">
			<h5><?php the_title() ?></h5>
			<?php if(get_locale()=="fr_FR") : ?>
				<p><?php the_time('d/m/Y') ?></p>
			<?php else: ?>
				<p><?php the_time('l, m/d/Y') ?></p>
			<?php endif; ?>
		</a>
	</li>
<?php endwhile; ?>
