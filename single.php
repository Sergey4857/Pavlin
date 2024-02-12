<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pavlin
 */

get_header();
$post_in_header = get_field("post_in_header", "option");
$post_quantity = get_field("posts_quantity", "option");
$cat_fillter = get_field("category_fillter", "option");
?>
<section class="news-innerContainer single">
	<div class="news-wrap">
		<div class="news-content">
			<div class="news-first-group">
				<div class="news-link">
					<?php echo get_the_date(); ?>
				</div>
				<h1 class="news-title">
					<?php echo get_the_title(); ?>
				</h1>
				<p class="news-description">
					<?php echo get_the_excerpt(); ?>
				</p>
				<div class="news-button greybutton black read_full">Read full article</div>
			</div>
			<div class="news-second-group">
				<?php the_post_thumbnail("full", array('class' => "news-picture")); ?>
			</div>
		</div>
	</div>
</section>

<section class="article-innerContainer">
	<div class="article">
		<?php echo get_the_content(); ?>
		<a class="article-back" href="/blog">‹ Back</a>
	</div>
</section>
<section class="blog-innerContainer">
	<?php
	$current_post = get_post();
	$categories = get_the_category($current_post->ID);
	if ($categories) {
		$category_ids = array();
		foreach ($categories as $category) {
			$category_ids[] = $category->term_id;
		}

		$args = array(
			'category__in' => $category_ids,
			'post__not_in' => array($current_post->ID),
			'posts_per_page' => 3,
			'orderby' => 'rand',
		);

		$related_query = new WP_Query($args);

		if ($related_query->have_posts()):
			?>
			<div class="blog">
				<div class="blog-wrap">
					<h2 class="blog-title">RELATED POSTS</h2>

					<a class="blog-link" href="/blog/">View all ›</a>
				</div>
				<div class="blog-list">
					<?php
					while ($related_query->have_posts()):
						$related_query->the_post();
						get_template_part('template-parts/content', get_post_type());
					endwhile;
					?>
				</div>
			</div>
			<?php
			wp_reset_postdata();
		endif;
	}
	?>
</section>
<?php
get_footer();
