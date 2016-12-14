<div id="twitch-wrap" class="<?php isHome(); ?>" data-equalizer-watch="liste-article">
	<div id="twitch-stream">
		<iframe src="http://streambadge.com/twitch/dark/<?php the_field('twitch_embed',$sbTwitch) ?>/" style="border:none;height:4em;width:100%"></iframe>
	</div>
	<?php the_field('twitch_text',$sbTwitch) ?>
</div>
