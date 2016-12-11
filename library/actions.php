<?php
	// Custom Post Type (Hero)
	function create_post_type() {
		register_post_type(
		  'hero',
		  array(
		    'label' => 'Heroes',
		    'labels' => array(
		      'name' => 'Heroes',
		      'singular_name' => 'Hero',
		      'all_items' => 'All heroes',
		      'add_new_item' => 'Add a hero',
		      'edit_item' => 'Edit hero',
		      'new_item' => 'New hero',
		      'view_item' => 'See hero',
		      'search_items' => 'Search heroes',
		      'not_found' => 'No hero found',
		      'not_found_in_trash'=> 'No hero in the trash'
		      ),
		    'public' => true,
		    'capability_type' => 'post',
		    'supports' => array(
		      'title',
		      'editor',
		      'thumbnail'
		    ),
		    'has_archive' => true,
			'menu_icon' => 'dashicons-groups'
		  )
		);
	}
	add_action( 'init', 'create_post_type' );
/////////////////////////////////////////////////////////////////////////////////////////


	// Custom loop pour afficher les blocs explicatifs des skills
	function loop_skill_list($nbskill) {

		// Tableau type de skill
		$skillTable = array(
			'passive'	=>	'Passive',
			'lclick'	=>	'Left Click',
			'rclick'	=>	'Right Click',
			'lshift'	=>	'LShift',
			'e'			=>	'E',
			'ult'		=>	'Ultimate'
		);

		// Tableau type de dégats
		$typeDamage = array(
			'basic'		=> 	"Basic",
			'can_crit'	=> 	"Can critical",
			'penetrate'	=> 	"Penetrate",
			'fall_off'	=> 	"No distance fall-off",
			'splash'	=> 	"Slash",
			'heal'		=> 	"Heal",
			'barrier'	=> 	"Barrier",
			'melee'		=> 	"Melee"
		);

		// Je définis les liens vers les images uniques
		$reloadImage = get_stylesheet_directory_uri().'/assets/images/icons/skill-common/reload.png';
		$ammoImage = get_stylesheet_directory_uri().'/assets/images/icons/skill-common/ammo.png';
		$durationImage = get_stylesheet_directory_uri().'/assets/images/icons/skill-common/duration.png';
		$damageImage = get_stylesheet_directory_uri().'/assets/images/icons/skill-common/damage.png';
		$rangeImage = get_stylesheet_directory_uri().'/assets/images/icons/skill-common/range.png';
		$radiusImage = get_stylesheet_directory_uri().'/assets/images/icons/skill-common/radius.png';
		$dpsImage = get_stylesheet_directory_uri().'/assets/images/icons/skill-common/dps.png';

		foreach ($skillTable as $skill => $value) {

			// Je définis l'image de mes skill
			$skillSelection = 'slist_'.$skill;
			$skillImage = get_field( $skillSelection );
			$skillKeySelect = $skill.'_keybinding';
			$skillKeybinding = get_field( $skillKeySelect );
			// $skillKeybinding = get_stylesheet_directory_uri().'/assets/images/icons/skill-common/'.$skill.'_keybinding.png';

			// Si c'est le block clic gauche ou droit
			if (($skill == 'lclick') || ($skill == 'rclick')) :
				$skillTod = $skill.'_type_damage';
				foreach ($typeDamage as $type => $typeIn) {
					$typeOfDamage = get_field( $skillTod );
					$typeInNoDesu = $typeIn;
				}
				// Je définis mon type de dég
				$damageURI = get_stylesheet_directory_uri().'/assets/images/icons/skill-common/'.$typeOfDamage.'_blc.png';
				// Je défini ma vitesse d'attaque (ROF)
				$skillRof = $skill.'_rof';
				$speedRof = get_field( $skillRof );
				$rofURI = get_stylesheet_directory_uri().'/assets/images/icons/skill-common/'.$speedRof.'.png';
				// Je définis mon image d'arme
				$weaponImage = get_field($skill.'_weapon_image');
			elseif (!($skill == 'passive')) : // la meme chose que ($skill == 'lshift') || ($skill == 'e') || ($skill == 'ult')
				$needLine = 0;
				if (!($skill == 'ult')) :
					if (!empty(get_field($skill.'_cooldown'))) :
					$skillCooldown = get_field($skill.'_cooldown');
					$needLine++;
					endif;
				endif;
				if (!empty(get_field($skill.'_range'))) :
					$skillRange = get_field($skill.'_range');
					$needLine++;
				endif;
				if (!empty(get_field($skill.'_damage'))) :
					$skillDamage = get_field($skill.'_damage');
					$needLine++;
				endif;
				if (!empty(get_field($skill.'_duration'))) :
					$skillDuration = get_field($skill.'_duration');
					$needLine++;
				endif;
				if (!empty(get_field($skill.'_radius'))) :
					$skillRadius = get_field($skill.'_radius');
					$needLine++;
				endif;
			endif;

			switch($skill) {
				case "passive":
					if (get_field('has_passive')) :
						require(TEMPLATEPATH.'/template-parts/skill-block-passive.php');
					// else :
					// 	require(TEMPLATEPATH.'/template-parts/skill-block-empty.php');
					endif;
					break;
				case "lclick":
					require(TEMPLATEPATH.'/template-parts/skill-block.php');
					break;
				case "rclick":
					if (get_field('has_rclick')) :
						require(TEMPLATEPATH.'/template-parts/skill-block.php');
					endif;
					break;
				case "lshift":
					require(TEMPLATEPATH.'/template-parts/skill-block-large.php');
					break;
				case "e":
					if (get_field('has_e')) :
						require(TEMPLATEPATH.'/template-parts/skill-block-large.php');
					endif;
					break;
				case "ult":
					require(TEMPLATEPATH.'/template-parts/skill-block-large.php');
					break;
			}
		}


		// for ($i=0; $i < $nbskill ; $i++) {
		//
		//
		// 	$activeSkill = $skillTable[$i];
		//
		// 	// Je définis mon type de dégat
		// 	$typeOfDamage = get_field($activeSkill.'_type_damage');
		// 	echo '<h1>'.$typeOfDamage.'</h1>';
		// 	// Quel type de dégat afficher & sortir l'URL
		// 	$damageURI = get_stylesheet_directory_uri() . '/assets/images/tod/' . $typeOfDamage . '_blc.png';
		//
		// }

	}
	add_action( 'loop_skill_list', 'loop_skill_list', 1, 1 );
	// 	NOM DE L'ACTION / FUNCTION / PRIORITE / NOMBRE DE PARAMETRE
/////////////////////////////////////////////////////////////////////////////////////////


	// Appel des images de skill ////////////////////////////////////////////////////////////////
	function skillIcon() {

			// Tableau type de skill
			$skillTable = array(
				'passive'	=>	__( 'Passive', 'foundationpress' ),
				'lclick'	=>	__( 'Primary', 'foundationpress' ),
				'rclick'	=>	__( 'Secondary', 'foundationpress' ),
				'lshift'	=>	__( 'Skill', 'foundationpress' ).' 1',
				'e'			=>	__( 'Skill', 'foundationpress' ).' 2',
				'ult'		=>	__( 'Ultimate', 'foundationpress' )
			);

		$imageURI = '<img src="'.get_stylesheet_directory_uri().'/assets/images/icons/slist/no-skill.png" alt="';

		foreach ($skillTable as $skill => $value) {
			echo '<div class="button-wrap">';
				$skillSelector = 'slist_'.$skill;
				$skillObject = get_field($skillSelector);

				if( ( ($skill == 'passive') && (get_field('has_passive') == false) ) || ( ($skill == 'rclick') && (get_field('has_rclick') == false) ) ) :
					echo '<button id="'.$skill.'-button"type="button" class="skill-button button disabled">'.$imageURI.$skill.'" alt="Disabled"/></button>';
				elseif( ($skill == 'e') && ( (get_field('has_e') == false) ) ) :
					echo '<button id="'.$skill.'-button"type="button" class="skill-button button disabled">'.$imageURI.$skill.'" alt="Disabled"/></button>';
				elseif ($skill != 'ult') :
					echo '<button id="'.$skill.'-button"type="button" class="skill-button button"><div class="skill-img-wrap"><img src="'.$skillObject['url'].'" alt="'.$skill.'-icon" class="bounce-in"/></div></button>';
				else :
					echo '<button id="'.$skill.'-button"type="button" class="skill-button button sb-larger"><div class="skill-img-wrap"><img src="'.$skillObject['url'].'" alt="'.$skill.'-icon" class="bounce-in"/></div></button>';
				endif;
				echo '<h6 class="skill-list-name hide-for-small-only">'.$value.'</h6>';
			echo '</div>';
		}
	}
	add_action('skillIcon','skillIcon',1,0);
	// 	NOM DE L'ACTION / FUNCTION / PRIORITE / NOMBRE DE PARAMETRE
/////////////////////////////////////////////////////////////////////////////////////////


	// Gallerie de héro HOMEPAGE ////////////////////////////////////////////////////////////////
	function MyPosts($npost) {


		// Ici je définis mes arguments
		$args   =   array(
					//	'category__in'  =>  array(1,2), // Publiés
						'post_type' 	=>  'hero',		// Type de post
						'post_status'   =>  'publish',  // Publiés
						'posts_per_page'=>  $npost,     // Nb de post (relatif)
						'orderby'       =>  'name',     // Ordonnée par date
						'order'         =>  'ASC'      // + grand au + petit
					);
		// J'effectue la requête
		$the_query = new WP_query ($args);

		// Je récupère mon template
		require(TEMPLATEPATH.'/template-parts/loop-home.php');

		// Je reste mes requêtes de post
		wp_reset_postdata();
	}
	add_action('MyPostAction','MyPosts',1,1);
	// 	NOM DE L'ACTION / FUNCTION / PRIORITE / NOMBRE DE PARAMETRE
/////////////////////////////////////////////////////////////////////////////////////////

	// My footer gallery ////////////////////////////////////////////////////////////////
	function FooterGallery($npost) {


		// Ici je définis mes arguments
		$args   =   array(
					//	'category__in'  =>  array(1,2), // Publiés
						'post_type' 	=>  'hero',		// Type de post
						'post_status'   =>  'publish',  // Publiés
						'posts_per_page'=>  $npost,     // Nb de post (relatif)
						'orderby'       =>  'name',     // Ordonnée par date
						'order'         =>  'ASC'      // + grand au + petit
					);
		// J'effectue la requête
		$the_query = new WP_query ($args);

		// Je récupère mon template
		require(TEMPLATEPATH.'/template-parts/loop-prefooter.php');

		// Je reste mes requêtes de post
		wp_reset_postdata();
	}
	add_action('MyFooterGallery','FooterGallery',1,1);
	// 	NOM DE L'ACTION / FUNCTION / PRIORITE / NOMBRE DE PARAMETRE
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
//		Front V2.0
////// Gallerie de héro HOMEPAGE ////////////////////////////////////////////////////////////////
	function PostsByCategory($charcat) {


		// Ici je définis mes arguments
		$args   =   array(
					//	'category__in'  =>  array(1,2), 			// Publiés
						'post_type' 	=>  'hero',					// Type de post
						'post_status'   =>  'publish',  			// Publiés
						//'posts_per_page'=>  $npost,     			// Nb de post (relatif)
						'orderby'       =>  'name',     			// Ordonnée par date
						'order'         =>  'ASC',      			// + grand au + petit
						'meta_key'		=>	'character_category', 	// Dans la catégorie de personnage
						'meta_value'	=>	$charcat 				// Catégorie choisie dans l'action
					);
		// J'effectue la requête
		$the_query = new WP_query ($args);
		// Je récupère mon template
		require(TEMPLATEPATH.'/template-parts/loop-homev2.php');
		// Je reste mes requêtes de post
		wp_reset_postdata();
	}
	add_action('MyPostsCat','PostsByCategory',1,1);
	// 	NOM DE L'ACTION / FUNCTION / PRIORITE / NOMBRE DE PARAMETRE

////// Gallerie de héro HOMEPAGE ////////////////////////////////////////////////////////////////
	function LastUpdates() {


		// Ici je définis mes arguments
		$args   =   array(
						'post_type' 	=>  'hero',					// Type de post
						'post_status'   =>  'publish',  			// Publiés
						'posts_per_page'=>  3,     					// Nb de post (relatif)
						'orderby'       =>  'modified',     		// Ordonnée par date
						'order'         =>  'DESC',      			// + grand au + petit
					);
		// J'effectue la requête
		$the_query = new WP_query ($args);
		// Je récupère mon template
		require(TEMPLATEPATH.'/template-parts/loop-homev2-lastedited.php');
		// Je reste mes requêtes de post
		wp_reset_postdata();
	}
	add_action('LastUpdates','LastUpdates',1,0);
	// 	NOM DE L'ACTION / FUNCTION / PRIORITE / NOMBRE DE PARAMETRE
