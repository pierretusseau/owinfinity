<?php

	$heroLife = abs(get_field('hero_life'));
	$heroArmor = abs(get_field('hero_armor'));
	$heroShield = abs(get_field('hero_shield'));
	$heroLifeBlock = abs($heroLife / 25);
	$heroArmorBlock = abs($heroArmor / 25);
	$heroShieldBlock = abs($heroShield / 25);
	$totalLife = abs($heroLife + $heroArmor + $heroShield);

	// function lifeBlock() {
	// 	echo '<div class="lifeBlock"></div>';
	// }
	//
	if ($heroLife > 0) {
		for ($i=0; $i < $heroLifeBlock; $i++) {
			echo '<div class="life-bubble bubble"><h6>'.$heroLife.'</h6></div>';
		}
	}
	if ($heroArmor > 0) {
		for ($i=0; $i < $heroArmorBlock; $i++) {
			echo '<article class="armor-bubble bubble"><h6>'.$heroArmor.'</h6></article>';
		}
	}
	if ($heroShield > 0) {
		for ($i=0; $i < $heroShieldBlock; $i++) {
			echo '<blockquote class="shield-bubble bubble"><h6>'.$heroShield.'</h6></blockquote>';
		}
	}

	return $totalLife;
?>
