
<section class="blue-block row skill-block-wrapper" id="<?= $skill ?>-block">
	<div class="skill-block">
		<div class="skill-box <?php if($skill =='ult') : echo('ult-skill-box');endif; ?>">
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
		<?php if ($needLine > 0) : ?>
		<article class="row skill-block-commons skill-block-content">
			<?php include('skill-block-large-commons.php') ?>
		</article>
		<?php endif; ?>
		<?php if ( ( $skill == 'lshift' ) && ( (get_field($skill.'_second')) == true) ): ?>
			<?php include('skill-block-large-second.php') ?>
		<?php endif; ?>
		<article class="row large-description skill-block-content" data-equalizer>
			<?php if ((!empty(get_field($skill.'_effect'))) && (empty(get_field($skill.'_important')))) : ?>
				<div class="columns small-12 large-12 large-effect skill-block-text">
					<?php the_field($skill.'_effect') ?>
				</div>
			<?php elseif ((!empty(get_field($skill.'_effect'))) && (!empty(get_field($skill.'_important')))) : ?>
				<div class="columns small-12 large-8 large-effect skill-block-text" data-equalizer-watch>
					<?php the_field($skill.'_effect') ?>
				</div>
			<?php endif ?>
			<?php if ((!empty(get_field($skill.'_important'))) && (empty(get_field($skill.'_effect')))) : ?>
				<div class="columns small-12 large-12 large-value important-alone skill-block-text" data-equalizer-watch>
					<p><?php the_field($skill.'_important') ?></p>
				</div>
			<?php elseif ((!empty(get_field($skill.'_important'))) && (!empty(get_field($skill.'_effect')))) : ?>
				<div class="columns small-12 large-4 large-value skill-block-text" data-equalizer-watch>
					<p><?php the_field($skill.'_important') ?></p>
				</div>
			<?php endif ?>
			<div class="clr"></div>
		</article>
		<?php if ( ( $skill == 'ult' ) && ( (get_field($skill.'_second')) == true) ): ?>
			<?php include('skill-block-large-second.php') ?>
		<?php endif; ?>
	</div>
</section>
