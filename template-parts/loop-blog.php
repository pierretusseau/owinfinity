<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<article class="blog--article-item">
		<a href="<?php the_permalink() ?>">
			<?php the_post_thumbnail() ?>
			<h2><?php the_title() ?></h2>
			<?php if(get_locale()=="fr_FR") : ?>
				<p><?php the_date('d/m/Y') ?></p>
			<?php else: ?>
				<p><?php the_date('l, m/d/Y') ?></p>
			<?php endif; ?>
			<?php the_excerpt() ?>
		</a>
	</article>
<?php endwhile;?>
