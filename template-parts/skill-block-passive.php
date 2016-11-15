
<section class="blue-block row skill-block-wrapper" id="<?= $skill ?>-block">
	<div class="skill-block">
		<div class="skill-box">
			<img src="<?= $skillImage['url'] ?>" alt="<?php the_title() ?>-<?= $skill ?>-icon" />
		</div>
		<header class="row">
			<div class="columns small-9">
				<h2 class="block-name"><?php the_field($skill."_name") ?></h2>
			</div>
			<div class="columns small-3 keybinding-image-wrapper">
				<?php if (!empty(get_field($skillKeySelect))) : ?>
					<img src="<?= $skillKeybinding ?>" alt="Keybinding" class="keybinding-image"/>
				<?php endif; ?>
			</div>
		</header>
		<article class="row large-description skill-block-content" data-equalizer>
			<?php if ((!empty(get_field($skill.'_effect'))) && (empty(get_field($skill.'_value')))) : ?>
				<div class="columns small-12 large-effect skill-block-text">
					<?php the_field($skill.'_effect') ?>
				</div>
			<?php elseif ((!empty(get_field($skill.'_effect'))) && (!empty(get_field($skill.'_value')))) : ?>
				<div class="columns small-8 large-effect skill-block-text" data-equalizer-watch>
					<?php the_field($skill.'_effect') ?>
				</div>
			<?php endif ?>
			<?php if (!empty(get_field($skill.'_value'))): ?>
				<div class="columns small-4 large-value skill-block-text" data-equalizer-watch>
					<p><?php the_field($skill.'_value') ?></p>
					<div class="clr"></div>
				</div>
			<?php endif ?>
		</article>
	</div>
</section>
