<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package pavlin
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<div class="error-block">
			<h1>404</h1>
			<div class="error-text">
				<?php _e("Sorry, such a page does not exist", "pavlin") ?>
			</div>
			<a href="/" class="error-link">
				<?php _e("Return home", "pavlin") ?>
			</a>
		</div>
		<div class="image-block">
			<img src="<?php echo get_template_directory_uri() . "/src/images/hand.png" ?>" alt="hand">
		</div>
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
