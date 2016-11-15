<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<section class="life-block row hide-for-small-only">
	<div class="blocks-wrapper">
		<?php include('life-block.php') ?>
	</div>
	<h3><?= $totalLife ?><span class="mini-health"> total hp</span></h3>
</section>
<section class="blue-block blue-block-skill row">
	<div class="arrow bounce">
		<!-- Boing ! -->
	</div>
	<nav class="skill-list">
		<div class="button-group">
			<?php do_action('skillIcon') ?>
		</div>
	</nav>
</section>
<div class="wrap">

	<?php do_action('loop_skill_list',6) ?>

</div><!--  Wrap -->
