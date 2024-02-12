<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pavlin
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
?>
<aside id="secondary" class="widget-area">
	<h1>Sidebar</h1>
	<?php

	if (!dynamic_sidebar("sidebar-shop")): ?>
		<?php dynamic_sidebar("sidebar-shop") ?>
	<?php endif;
	?>
</aside><!-- #secondary -->