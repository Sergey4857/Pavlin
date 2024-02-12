<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined('ABSPATH') || exit;

global $product;

if (!$product->is_purchasable()) {
	return;
}

echo wc_get_stock_html($product); // WPCS: XSS ok.

if ($product->is_in_stock()): ?>
	<?php do_action('woocommerce_before_add_to_cart_form'); ?>

	<?php
	global $woocommerce;

	$product = wc_get_product(get_the_ID());

	$in_cart = false;

	foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
		if ($cart_item['data']->get_id() === $product->get_id()) {
			$in_cart = true;
			break;
		}
	}

	if ($in_cart) {
		$cart_url = wc_get_cart_url();
		echo '<a class="cart-link" href="' . esc_url($cart_url) . '">' . esc_html__('Go to cart', 'pavlin') . '</a>';
	} else {
		?>
		<form class="cart"
			action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>"
			method="post" enctype="multipart/form-data">
			<button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>"
				class="single_add_to_cart_button button alt">
				<?php echo esc_html__('Add to cart', 'pavlin'); ?>
			</button>
			<?php do_action('woocommerce_after_add_to_cart_button'); ?>
		</form>
	<?php } ?>

	<?php do_action('woocommerce_after_add_to_cart_form'); ?>
<?php endif; ?>