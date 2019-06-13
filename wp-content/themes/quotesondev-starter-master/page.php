<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="submitpage">

</form action="" method="POST">
<h3>Author of Quote</h3> <input type="text" class="author" name="Author"><br>
<br>
<h3>Quote </h3>  <textarea class="quote"> </textarea> <br>
<br>
<h3> Where did you find the quote? (E.g. Book Name)  </h3> <input type="text" class="source" name="Location"><br>
<br>
<h3>Provide the URL of quote source if available </h3> <input type="text" class="URL" name="URL"><br>
<br>
<input type="button" class="submitAQuote" value="Submit a Quote" name="zero">

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

</div>

<?php 
   if (isset($_POST["Thanks bruh!"]))
   {

    echo $_POST["Thanks bruh!"];
}
?>


<br> <br> <br> <br>
<?php get_footer(); ?>

