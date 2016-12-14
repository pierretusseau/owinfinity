<?php

// Start the loop
while ( $the_query->have_posts() ) : $the_query->the_post();

// Import last edited template
require('last-edited.php');
?>

<li class="columns small-4 last-edited-item">
	<a href="<?php the_permalink() ?>" class="last-edited-link">
		<?php the_post_thumbnail(); ?>
		<h5><?php the_title(); ?></h5>
		<p><strong><?= $changeSince ?></strong> <?= __( 'Day(s) since last update', 'foundationpress' ) ?> <?php //dateUpdate() ?></p>
	</a>
</li>


<?php

// Fin de loop
endwhile;

?>
