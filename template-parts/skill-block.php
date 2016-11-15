
<section class="blue-block row skill-block-wrapper" id="<?= $skill ?>-block">
	<div class="skill-block">
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
		<article class="row skill-block-content">
			<div class="columns small-2 weapon-image skill-common">
				<img src="<?= $weaponImage['url'] ?>" alt="Weapon"/>
			</div>
			<?php if (!empty(get_field($skill.'_total_ammo'))): ?>
				<div class="columns small-1 skill-common">
					<p class="value">
						<?php if (get_field($skill.'_total_ammo') == 'inf') : ?>
							<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/icons/skill-common/infinite.png" alt="Infinite ammo" class="img-infinite"/>
						<?php else : ?>
							<?php the_field($skill."_total_ammo") ?>
						<?php endif; ?>
					</p>
					<img src="<?= $ammoImage ?>" alt="Ammo" />
					<?php if(!empty(get_field($skill.'_ammo_used'))) : ?>
						<div class="ammo-used">
							<?php the_field($skill."_ammo_used") ?>
						</div>
					<?php endif; ?>
					<h6><?= __( 'Ammo', 'foundationpress' ) ?></h6>
				</div>
			<?php endif; ?>
			<?php if (!empty(get_field($skill.'_damage_number'))): ?>
				<div class="columns small-1 damage-number skill-common">
					<p class="value">
						<?php the_field($skill."_damage_number") ?>
					</p>
					<img src="<?= $damageURI ?>" alt="Type of damage" />
					<?php if (($typeOfDamage == 'heal') && (get_the_title() == 'Ana')) : ?>
						<h6><?= __( 'Heal', 'foundationpress' ) ?></h6>
					<?php elseif($typeOfDamage == 'heal') : ?>
						<h6><?= __( 'Heal/Sec', 'foundationpress' ) ?></h6>
					<?php elseif ($typeOfDamage == 'barrier') : ?>
						<h6><?= __( 'Barrier', 'foundationpress' ) ?></h6>
					<?php else : ?>
						<h6><?= __( 'Damage', 'foundationpress' ) ?></h6>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<?php if (!empty(get_field($skill.'_value_rof'))): ?>
				<div class="columns small-1 skill-common">
					<p class="value">
						<?php the_field($skill."_value_rof") ?>
					</p>
					<img src="<?= $rofURI ?>" alt="Rate of fire" />
					<h6>RPS</h6>
				</div>
			<?php endif; ?>
			<?php if (!empty(get_field($skill.'_dps'))): ?>
				<div class="columns small-1 damage-number skill-common">
					<p class="value">
						<?php the_field($skill."_dps") ?>
					</p>
					<img src="<?= $dpsImage ?>" alt="DPS" />
					<h6>DPS</h6>
				</div>
			<?php endif; ?>
			<?php if (!empty(get_field($skill.'_reload_cd'))): ?>
				<div class="columns small-1 skill-common">
					<p class="value decal-droite">
						<?php the_field($skill."_reload_cd") ?>
					</p>
					<img src="<?= $reloadImage ?>" alt="Reload" />
					<h6><?= __( 'Second', 'foundationpress' ) ?></h6>
				</div>
			<?php endif; ?>
			<?php if (!empty(get_field($skill.'_range'))): ?>
				<div class="columns small-1 skill-common">
					<p class="value decal-droite">
						<?php the_field($skill."_range") ?>
					</p>
					<img src="<?= $rangeImage ?>" alt="Range" />
					<h6><?= __( 'Meter', 'foundationpress' ) ?></h6>
				</div>
			<?php endif; ?>
			<?php if (!empty(get_field($skill.'_radius'))): ?>
				<div class="columns small-1 skill-common">
					<p class="value decal-droite">
						<?php the_field($skill."_radius") ?>
					</p>
					<img src="<?= $radiusImage ?>" alt="Range" />
					<h6><?= __( 'Meter', 'foundationpress' ) ?></h6>
				</div>
			<?php endif; ?>

			<div class="columns small-1 end"></div>
		</article>
		<?php if ( ( $skill == 'lclick' ) && ( (get_field($skill.'_second')) == true) ): ?>
			<?php include('skill-block-second.php') ?>
		<?php endif; ?>
		<?php if (!empty(get_field($skill.'_note')) || (!empty(get_field($skill.'_important')))) : ?>
			<article class="row skill-block-plus skill-block-content note-wrapper skill-block-text" data-equalizer>
				<?php if ((!empty(get_field($skill.'_note'))) && (empty(get_field($skill.'_important')))) : ?>
					<div class="columns small-12 large-12 large-effect skill-block-text">
						<?php the_field($skill.'_note') ?>
					</div>
				<?php elseif ((!empty(get_field($skill.'_note'))) && (!empty(get_field($skill.'_important')))) : ?>
					<div class="columns small-12 large-8 large-effect skill-block-text" data-equalizer-watch>
						<?php the_field($skill.'_note') ?>
					</div>
				<?php endif ?>
				<?php if (!empty(get_field($skill.'_important')) && (empty(get_field($skill.'_note'))) ): ?>
					<div class="columns small-12 large-12 large-value skill-block-text">
						<p><?php the_field($skill.'_important') ?></p>
					</div>
				<?php elseif (!empty(get_field($skill.'_important')) && (!empty(get_field($skill.'_note'))) ): ?>
					<div class="columns small-12 large-4 large-value skill-block-text" data-equalizer-watch>
						<p><?php the_field($skill.'_important') ?></p>
					</div>
				<?php endif ?>
				<div class="clr"></div>
			</article>
		<?php endif ?>
	</div>
</section>
