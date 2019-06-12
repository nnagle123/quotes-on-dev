<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

<div class="footerdiv">
<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button> -->
					
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<div class="footermessage"> <li class="last">Brought to you by <a href="https://redacademy.com"> Red Academy </a> </li> </div>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">




			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->
</div>
		<script  src="https://code.jquery.com/jquery-3.4.1.min.js"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>

		<?php wp_footer(); ?>


	</body>
</html>
