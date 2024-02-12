<?php
/**
 * pavlin functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pavlin
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.1');
}

require_once "lib/acf.php";

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pavlin_setup()
{
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	register_nav_menus(
		array(
			'navigation' => esc_html__('navigation', 'pavlin'),

		)
	);
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support('woocommerce');

}
add_action('after_setup_theme', 'pavlin_setup');

/**
 * Enqueue scripts and styles.
 */
function pavlin_scripts()
{
	wp_enqueue_style('pavlin-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_style('pavlin-main', get_template_directory_uri() . '/dist/main.css', array(), _S_VERSION);
	wp_enqueue_style('pavlin-slick-style', get_template_directory_uri() . '/assets/slick/slick.css', array(), _S_VERSION);


	wp_enqueue_script("jquery");
	wp_enqueue_script('pavlin-main-js', get_template_directory_uri() . '/dist/main.js', array(), _S_VERSION);
	wp_enqueue_script('pavlin-slick-js', get_template_directory_uri() . '/assets/slick/slick.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'pavlin_scripts');

if (function_exists('acf_add_options_page')) {
	acf_add_options_page();
}


//Turn off output of number products
function disable_woocommerce_availability($availability)
{
	return '';
}
add_filter('woocommerce_get_availability', 'disable_woocommerce_availability');

remove_action('woocommerce_cart_collaterals', 'woocommerce_cross_sell_display');
add_filter('wc_add_to_cart_message_html', '__return_false');
add_filter('woocommerce_cart_item_removed_notice_type', '__return_null');
remove_action("woocommerce_archive_description", "woocommerce_taxonomy_archive_description", 10);
remove_action("woocommerce_product_archive_description", "woocommerce_product_archive_description", 10);
remove_action("woocommerce_before_shop_loop", "woocommerce_output_all_notices", 10);
remove_action("woocommerce_before_shop_loop", "woocommerce_result_count", 20);
remove_action("woocommerce_before_shop_loop", "woocommerce_catalog_ordering", 30);
remove_action("woocommerce_before_single_product", "woocommerce_output_all_notices", 10);

// remove_action('woocommerce_after_shop_loop_item', "woocommerce_template_loop_add_to_cart", 10);


// Allow SVG

add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {

	global $wp_version;
	if ($wp_version !== '4.7.1') {
		return $data;
	}

	$filetype = wp_check_filetype($filename, $mimes);

	return [
		'ext' => $filetype['ext'],
		'type' => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];

}, 10, 4);

function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg()
{
	echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
}
add_action('admin_head', 'fix_svg');





add_filter('woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count');
function wc_refresh_mini_cart_count($fragments)
{
	ob_start();
	$items_count = WC()->cart->get_cart_contents_count();
	?>
	<span class="mini-cart-count">
		<?php echo $items_count ? $items_count : '0'; ?>
	</span>
	<?php
	$fragments['.mini-cart-count'] = ob_get_clean();
	return $fragments;
}

add_filter('woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text');
function woocommerce_custom_product_add_to_cart_text()
{
	return __('', 'woocommerce');  // Replace "By Now" text with your own text
}


function update_header_cart_count_after_remove($cart_item_key)
{
	// Ваш код обновления значения в хедере
	$cart_count = WC()->cart->get_cart_contents_count();

	// Обновление значения в хедере (пример)
	echo '<span class="header-cart-count">' . esc_html($cart_count) . '</span>';
}

