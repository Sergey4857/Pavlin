<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */


defined('ABSPATH') || exit;

global $product;

//output сategory-name
$category = wc_get_product_category_list($product->get_id());

//output collection-name
$collection = wc_get_product_tag_list($product->get_id());
?>


<?php
/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */

do_action('woocommerce_before_single_product');
?>

<section class="product-innerContainer">
	<div id="product-<?php the_ID(); ?>" <?php wc_product_class('product', $product); ?>>
		<div class="gallery">
			<?php echo do_shortcode("[product_gallery_slider]") ?>
		</div>

		<div class="product-content">
			<div class="product-navigation">
				<?php echo woocommerce_breadcrumb(
					array(
						'home' => esc_html('Home'),
					)
				) ?>
			</div>

			<?php echo woocommerce_template_single_title() ?>
			<?php echo woocommerce_template_single_price() ?>
			<div class="product-details">
				<ul class="product-list">

					<li class="product-item">
						<span>
							<?php _e("Category:", "pavlin") ?>
						</span>
						<?php echo $category ?>
					</li>

					<li class="product-item">
						<span>
							<?php _e("Collection:", "pavlin");
							?>
						</span>
						<?php echo $collection ?>
					</li>

					<?php output_attributes() ?>

				</ul>
			</div>
			<?php woocommerce_template_single_add_to_cart() ?>
		</div>
	</div>
</section>

<section class="related-innerContainer">
	<?php woocommerce_output_related_products() ?>
</section>


<?php
function output_attributes()
{
	global $product;

	if (isset($product) && is_a($product, 'WC_Product')) {
		$attributes = $product->get_attributes();

		foreach ($attributes as $attribute) {
			$attribute_name = wc_attribute_label($attribute->get_name());
			$attribute_value = $product->get_attribute($attribute->get_name());

			echo '<li class="product-item"><span>' . esc_html__($attribute_name, "pavlin") . ':</span> ' . esc_html__($attribute_value, "pavlin") . '</li>';
		}
	} else {
		echo esc_html__('Товар не найден.', 'pavlin');
	}
}
?>