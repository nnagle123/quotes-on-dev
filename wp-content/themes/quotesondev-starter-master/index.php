<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

				<div class="left"> <i class="fas fa-quote-left"></i> </div>
				<div class="right"> <i class="fas fa-quote-right"></i> </div>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


		<div class="quote-area">
			<?php
			$args = array(
				'posts_per_page' => '1',
				'orderby' => 'rand',
			);

			// The Query
			$the_query = new WP_Query($args);

			// The Loop
			if ($the_query->have_posts()) {

				while ($the_query->have_posts()) {
					$the_query->the_post();
					?>
					<div class="quote">
						<?php
						the_excerpt();
						?>
						<p class="author">
						<?php
						the_title();
						?>
					</p>
					</div>
					
					<div class="source"> </div>
	
				<?php

			}}
			?>
				

				<button class="mainbutton" type="button"> Show Me Another!</button>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_footer(); ?>