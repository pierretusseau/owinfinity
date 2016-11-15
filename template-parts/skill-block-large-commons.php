<?php // Cooldown ?>
<?php if (!empty(get_field($skill.'_cooldown'))) : ?>
	<div class="columns small-1 skill-common">
		<p class="value decal-droite">
			<?= $skillCooldown ?>
		</p>
		<img src="<?= $reloadImage ?>" alt="Cooldown / Reload" />
		<h6><?= __( 'Second', 'foundationpress' ) ?></h6>
	</div>
<?php endif; ?>

<?php // Damage ?>
<?php if (!empty(get_field($skill.'_damage'))): ?>
	<div class="columns small-1 damage-number skill-common">
		<p class="value">
			<?php if((get_the_title() == 'Hanzo') && ($skill == 'lshift')) : ?>
				<?= $skillDamage ?>
			<?php elseif ((get_the_title() == 'Bastion') && ($skill == 'e')) : ?>
				<?php echo abs($skillDamage) ?>%
			<?php else : ?>
				<?php echo abs($skillDamage) ?>
			<?php endif ?>
		</p>
		<?php if (!($skillDamage < 0)) : ?>
			<img src="<?= $damageImage ?>" alt="Damages" />
			<h6><?= __( 'Damage', 'foundationpress' ) ?></h6>
		<?php else : ?>
			<img src="<?= get_stylesheet_directory_uri().'/assets/images/icons/skill-common/heal_blc.png' ?>" alt="Heal" />
			<?php if ( (get_the_title() == 'Roadhog') || (get_the_title() == 'Mei') || (get_the_title() == 'Lucio') || (get_the_title() == 'Ana') ) : ?>
				<h6><?= __( 'Heal', 'foundationpress' ) ?></h6>
			<?php elseif ((get_the_title() == 'Zarya') || (get_the_title() == 'Winston') || (get_the_title() == 'Symmetra')) : ?>
				<h6><?= __( 'Absorb', 'foundationpress' ) ?></h6>
			<?php else : ?>
				<h6><?= __( 'Heal/Sec', 'foundationpress' ) ?></h6>
			<?php endif; ?>
		<?php endif; ?>
	</div>
<?php endif; ?>

<?php // DPS ?>
<?php if (!empty(get_field($skill.'_dps'))): ?>
	<div class="columns small-1 damage-number skill-common">
		<p class="value">
			<?php the_field($skill."_dps") ?>
		</p>
		<img src="<?= $dpsImage ?>" alt="DPS" />
		<h6>DPS</h6>
	</div>
<?php endif; ?>

<?php // Duration ?>
<?php if (!empty(get_field($skill.'_duration'))): ?>
	<div class="columns small-1 skill-common">
		<p class="value">
			<?= $skillDuration ?>
		</p>
		<img src="<?= $durationImage ?>" alt="Duration" />
		<h6><?= __( 'Second', 'foundationpress' ) ?></h6>
	</div>
<?php endif; ?>

<?php // Range ?>
<?php if (!empty(get_field($skill.'_range'))): ?>
	<div class="columns small-1 skill-common">
		<p class="value">
			<?= $skillRange ?>
		</p>
		<img src="<?= $rangeImage ?>" alt="Range" />
		<h6><?= __( 'Meter', 'foundationpress' ) ?></h6>
	</div>
<?php endif; ?>

<?php // Radius ?>
<?php if (!empty(get_field($skill.'_radius'))): ?>
	<div class="columns small-1 skill-common">
		<p class="value decal-droite">
			<?php the_field($skill."_radius") ?>
		</p>
		<img src="<?= $radiusImage ?>" alt="Radius" />
		<h6><?= __( 'Meter', 'foundationpress' ) ?></h6>
	</div>
<?php endif; ?>
<div class="columns small-1 end"></div>
