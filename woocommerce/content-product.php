<?php

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
$image = wp_get_attachment_image_src(get_post_thumbnail_id($product->get_id()), 'single-post-thumbnail');
$link = get_permalink($product->get_id());
$price = wc_price($product->get_price());
?>

<li class="goods-item">
	<a href="<?php echo $link; ?>">
		<img class="goods-picture" src="<?php echo $image[0]; ?>" alt="<?php echo $product->get_title(); ?>" />
		<div class="goods-price">
			<?php do_action('woocommerce_after_shop_loop_item_title') ?>
		</div>
		<div class="goods-model">
			<?php echo $product->get_title(); ?>
		</div>
	</a>
</li>