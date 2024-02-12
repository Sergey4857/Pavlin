<?php

get_header();

$post_in_header = get_field("post_in_header", "option");
$post_quantity = get_field("posts_quantity", "option");
$cat_fillter = get_field("category_fillter", "option");
?>
<section class="news-innerContainer">
	<div class="news-wrap">
		<div class="news-content">
			<div class="news-first-group">
				<a class="news-link slide-in-left" href="/blog">NEWS</a>
				<h1 class="news-title slide-in-left"><a href="<?php echo $post_in_header->guid; ?>">
						<?php echo $post_in_header->post_title; ?>
					</a></h1>
				<p class="news-description slide-in-left">
					<?php echo $post_in_header->post_content; ?>
				</p>
				<a href="<?php echo $post_in_header->guid; ?>">
					<div class="news-button greybutton white fade-in">Read full article</div>
				</a>
			</div>
			<div class="news-second-group fade-in-bottom">
				<?php echo get_the_post_thumbnail($post_in_header->ID, "full", array('class' => "news-picture", )); ?>
			</div>
		</div>
	</div>
</section>

<section class="blog-innerContainer">
	<div class="blog">

		<div class="blog-button-group">
			<a href="/blog">
				<div class="blog-button">ALL</div>
			</a>
			<?php foreach ($cat_fillter as $filter): ?>
				<a href="/<?php echo $filter->taxonomy . '/' . $filter->slug; ?>">
					<div class="blog-button">
						<?php echo $filter->name; ?>
					</div>
				</a>
			<?php endforeach; ?>
		</div>
		<div class="blog-list fade-in-bottom">
			<?php if (have_posts()): ?>
				<?php
				while (have_posts()):
					the_post();
					get_template_part('template-parts/content', get_post_type());
				endwhile;
			else:
				get_template_part('template-parts/content', 'none');
			endif;
			?>
		</div>
		<button class="blog-button greybuttonMobl">View all</button>
	</div>
</section>
<?php get_footer(); ?>