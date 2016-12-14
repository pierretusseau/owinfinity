<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<?php if (is_front_page() || is_page_template('page-templates/blog.php')): ?>
			<div class="clr"></div>
		<?php else: ?>
			<div class="charCLR"></div>
		<?php endif; ?>
		<div id="footer-container">
			<?php if(!is_front_page()) : ?>
				<header>
					<?php do_action('MyFooterGallery',23) ?>
				</header>
			<?php else : ?>
			<?php endif; ?>
			<footer id="footer">
				<div class="row">
					<div class="columns small-1 img-footer">
						<a href="https://playoverwatch.com" class="img-footer-wrap">
							<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/icons/overwatch-logo.png" alt="Logo Overwatch" />
						</a>
					</div>
					<div class="columns small-7 custom-menu-footer">
						<?php do_action( 'foundationpress_before_footer' ); ?>
						<?php dynamic_sidebar( 'footer-widgets' ); ?>
						<?php do_action( 'foundationpress_after_footer' ); ?>
					</div>
					<div class="columns small-4 copy-footer">
						<?php if(get_locale()=="fr_FR") : ?>
							Webdesign, Integration et Dev par <a href="http://pierre-tusseau.com">&copy;PierreTusseau</a>
						<?php else: ?>
							Webdesign, Integration and Dev by <a href="http://pierre-tusseau.com">&copy;PierreTusseau</a>
						<?php endif; ?>
					</div>
				</div>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script id="__bs_script__">//<![CDATA[
	document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.12.8.js'><\/script>".replace("HOST", location.hostname));
	//]]>
</script>
<script src="<?= get_stylesheet_directory_uri(); ?>/assets/components/jquery.countdown/dist/jquery.countdown.js"></script>
</body>
</html>
