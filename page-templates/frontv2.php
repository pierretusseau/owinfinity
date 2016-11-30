<?php
/*
Template Name: Front v2.0
*/
get_header(); ?>

<!-- <section id="load_screen">
	<div id="loading">
		Loading Element
	</div>
</section> -->
<div class="main-wrap">
	<section id="listing-hero">
		<div class="wrap--partie-1 row">
			<section id="listing--left-column" class="column small-6">
				<h3>Attack</h3>
				<?php do_action('MyPostsCat', 6, 'attack') ?>
				<ul class="home--list-heroes" id="homme--list-attack">
					<li><a href="#">Perso</a></li>
					<li><a href="#">Perso</a></li>
					<li><a href="#">Perso</a></li>
					<li><a href="#">Perso</a></li>
					<li><a href="#">Perso</a></li>
					<li><a href="#">Perso</a></li>
				</ul>
				<h3>Defense</h3>
				<ul class="home--list-heroes" id="homme--list-defense">
					<li><a href="#">Perso</a></li>
					<li><a href="#">Perso</a></li>
					<li><a href="#">Perso</a></li>
					<li><a href="#">Perso</a></li>
					<li><a href="#">Perso</a></li>
				</ul>
				<h3>Tank</h3>
				<ul class="home--list-heroes" id="homme--list-tank">
					<li><a href="#">Perso</a></li>
					<li><a href="#">Perso</a></li>
					<li><a href="#">Perso</a></li>
					<li><a href="#">Perso</a></li>
					<li><a href="#">Perso</a></li>
				</ul>
				<h3>Support</h3>
				<ul class="home--list-heroes" id="homme--list-support">
					<li><a href="#">Perso</a></li>
					<li><a href="#">Perso</a></li>
					<li><a href="#">Perso</a></li>
					<li><a href="#">Perso</a></li>
					<li><a href="#">Perso</a></li>
					<li><a href="#">Perso</a></li>
					<li><a href="#">Perso</a></li>
				</ul>
			</section>
			<section id="listing--right-column" class="column small-6">
				<!-- REMPLIR ICI AVEC LE NON:HOVER EN ATTENDANT -->
				<div id="home--video">
					<h3>Last hero video</h3>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/6p0osh7STug" frameborder="0" allowfullscreen>
					</iframe>
					<h3>Recent updates</h3>
					<div id="recent-update-wrap">
						<ul id="home--recent-updates" class="row align-spaced">
							<li class="column small-4">
								<article>
									Update 1
								</article>
							</li>
							<li class="column small-4">
								<article>
									Update 1
								</article>
							</li>
							<li class="column small-4">
								<article>
									Update 1
								</article>
							</li>
						</ul>
					</div>
				</div>
			</section>
		</div>
	</section>
	<section id="home--separator">
		<!-- EMPTY -->
	</section>
	<section id="home-second-part">
		<div class="row" id="home--partie-2-title">
			<h3 class="column small-9">Blog</h3>
			<h3 class="column small-3">Twitch</h3>
		</div>
		<div class="row" id="home--partie-2-equalizedblog" data-equalizer="liste-article">
			<section id="home--wrap-listblog" class="column small-9">
				<ul id="home--list-blog" class="row">
					<li class="column small-4">
						<a href="#">
							<h4>Titre de l'article</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
						</a>
					</li>
					<li class="column small-4">
						<a href="#">
							<h4>Titre de l'article</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
						</a>
					</li>
					<li class="column small-4">
						<a href="#">
							<h4>Titre de l'article</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
						</a>
					</li>
					<li class="column small-4">
						<a href="#">
							<h4>Titre de l'article</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
						</a>
					</li>
					<li class="column small-4">
						<a href="#">
							<h4>Titre de l'article</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
						</a>
					</li>
					<li class="column small-4">
						<a href="#">
							<h4>Titre de l'article</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
						</a>
					</li>
				</ul>
			</section>

			<section id="home--twitch-block" class="column small-3" data-equalizer-watch="liste-article">
				<div id="twitch-wrap" data-equalizer-watch="liste-article">
					<div id="twitch-stream">
						<!-- EMPTY -->
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus laborum nobis dolorum velit expedita accusantium quam quod, neque at veritatis.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, sequi, id! Debitis voluptatibus ad sint, veritatis sunt culpa est quam.</p>
				</div>
			</section>
		</div>
		<div class="row" id="home--partie-2-buttons">
			<section id="community--left-column" class="column small-9">
				<a href="#" class="expanded button">
					Read more
				</a>
			</section>
			<section id="community--right-column" class="column small-3">
				<div class="expanded button-group align-justify">
					<a href="#" class="button">Twitter</a>
					<a href="#" class="button">Tipeee</a>
				</div>
			</section>
		</div>
	</section>
</div>
<?php get_footer();
