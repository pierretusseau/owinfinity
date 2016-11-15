<?php
	// Weapon image 2
	$weaponImage = get_field($skill.'2_weapon_image');
	// Type of damage 2
	$skillTod2 = $skill.'2_type_damage';
	$typeOfDamage2 = get_field( $skillTod2 );
	$damageURI = get_stylesheet_directory_uri().'/assets/images/icons/skill-common/'.$typeOfDamage2.'_blc.png';
	// Rof2
	$skillRof2 = $skill.'2_rof';
	$speedRof2 = get_field( $skillRof2 );
	$rofURI = get_stylesheet_directory_uri().'/assets/images/icons/skill-common/'.$speedRof2.'.png';
	$skillTod2 = $skill.'2_type_damage';
	foreach ($typeDamage as $type => $typeIn) {
		$typeOfDamage = get_field( $skillTod2 );
		$typeInNoDesu = $typeIn;
	}
?>
<header class="row">
	<div class="columns small-9 end">
		<h2 class="block-name"><?php the_field($skill."2_name") ?></h2>
	</div>
</header>
<?php if ($skill == 'ult'): ?>
	<article class="row large-description skill-block-content skill-block-commons">
<?php else : ?>
	<article class="row skill-block-content">
<?php endif; ?>
	<?php if (!empty(get_field($skill.'2_weapon_image'))): ?>
		<div class="columns small-2 weapon-image skill-common">
			<img src="<?= $weaponImage['url'] ?>" alt="Weapon" />
		</div>
	<?php endif; ?>
	<?php if (!empty(get_field($skill.'2_total_ammo'))): ?>
		<div class="columns small-1 skill-common">
			<p class="value">
				<?php if (get_field($skill.'2_total_ammo') == 'inf') : ?>
					<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/icons/skill-common/infinite.png" alt="Infinite ammo" class="img-infinite"/>
				<?php else : ?>
					<?php the_field($skill."2_total_ammo") ?>
				<?php endif; ?>
			</p>
			<img src="<?= $ammoImage ?>" alt="Ammo" />
			<?php if(!empty(get_field($skill.'2_ammo_used'))) : ?>
				<div class="ammo-used">
					<?php the_field($skill."2_ammo_used") ?>
				</div>
			<?php endif; ?>
			<h6><?= __( 'Ammo', 'foundationpress' ) ?></h6>
		</div>
	<?php endif; ?>
	<?php if (!empty(get_field($skill.'2_damage_number'))): ?>
		<div class="columns small-1 damage-number skill-common">
			<p class="value">
				<?php the_field($skill."2_damage_number") ?>
			</p>
			<img src="<?= $damageURI ?>" alt="Type of damage" />
			<?php if($typeOfDamage == 'heal') : ?>
				<h6><?= __( 'Heal', 'foundationpress' ) ?></h6>
			<?php elseif ($typeOfDamage == 'barrier') : ?>
				<h6><?= __( 'Barrier', 'foundationpress' ) ?></h6>
			<?php else : ?>
				<h6><?= __( 'Damage', 'foundationpress' ) ?></h6>
			<?php endif; ?>
		</div>
	<?php endif; ?>
	<?php if (!empty(get_field($skill.'2_value_rof'))): ?>
		<div class="columns small-1 skill-common">
			<p class="value">
				<?php the_field($skill."2_value_rof") ?>
			</p>
			<img src="<?= $rofURI ?>" alt="Rate of fire" />
			<h6>RPS</h6>
		</div>
	<?php endif; ?>
	<?php if (!empty(get_field($skill.'2_dps'))): ?>
		<div class="columns small-1 damage-number skill-common">
			<p class="value">
				<?php the_field($skill."2_dps") ?>
			</p>
			<img src="<?= $dpsImage ?>" alt="DPS" />
			<h6>DPS</h6>
		</div>
	<?php endif; ?>
	<?php if (!empty(get_field($skill.'2_reload_cd'))): ?>
		<div class="columns small-1 skill-common">
			<p class="value decal-droite">
				<?php the_field($skill."2_reload_cd") ?>
			</p>
			<img src="<?= $reloadImage ?>" alt="Reload" />
			<h6><?= __( 'Second', 'foundationpress' ) ?></h6>
		</div>
	<?php endif; ?>
	<?php if (!empty(get_field($skill.'2_range'))): ?>
		<div class="columns small-1 skill-common">
			<p class="value decal-droite">
				<?php the_field($skill."2_range") ?>
			</p>
			<img src="<?= $rangeImage ?>" alt="Range" />
			<h6><?= __( 'Meter', 'foundationpress' ) ?></h6>
		</div>
	<?php endif; ?>
	<?php if ( ($skill == 'ult') && (!empty(get_field($skill.'2_effect') ))): ?>
		</article>
		<article class="row large-description skill-block-content">
			<div class="columns small-12 large-effect skill-block-text">
				<?php the_field($skill.'2_effect') ?>
			</div>
		</article>
	<?php else : ?>
	<?php endif; ?>
	<div class="columns small-1 end"></div>
</article>
