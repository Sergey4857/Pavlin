<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pavlin
 */
?>
<?php
$my_post_language_details = apply_filters('wpml_current_language', NULL, 1);
if ($my_post_language_details === 'ru') {
	$cart_link = 'https://pavlin.boutique/ru/cart/';
} elseif ($my_post_language_details === 'uk') {
	$cart_link = 'https://pavlin.boutique/uk/cart/';
} else {
	$cart_link = '/cart/';
}
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<section class="header-innerContainer">
		<header class="<?php if (is_front_page()): ?>header header-home<?php else: ?>header<?php endif; ?>">
			<div class="header-nav">
				<?php wp_nav_menu([
					'theme_location' => 'navigation',

				]); ?>
			</div>
			<button type="button" class="btn-mobile-menu">
			</button>
			<div class="header-logo-box">
				<a class="header-logo" href="/">
					<img src="<?php echo get_field("logo", "option"); ?>" alt="pavlin">
					<span>Pavlin</span>
				</a>
			</div>
			<div class="header-block">
				<a href="<?php echo $cart_link ?>" class="header-shop">
					<img src="<?php echo get_template_directory_uri() . "/src/icons/bag.svg" ?>" alt="shop">

					<div class="header-cart-count">
						<?php $items_count = WC()->cart->get_cart_contents_count();

						echo '<div id="mini-cart-count"><?php echo $items_count ?></div>'; ?>

					</div>
				</a>
			</div>

			</a>
			</div>
		</header>
	</section>