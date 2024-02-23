<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pavlin
 */

?>
<?php
$my_post_language_details = apply_filters('wpml_current_language', NULL, 1);

if ($my_post_language_details === 'ru') {
  $privacy_link = 'https://pavlin.boutique/ru/privacy-policy/';
} elseif ($my_post_language_details === 'uk') {
  $privacy_link = 'https://pavlin.boutique/uk/privacy-policy/';
} else {
  $privacy_link = '/privacy-policy/';
}
?>

<footer class="footer-innerContainer">
  <div class="footer">
    <div class="footer-wrap">
      <div class="footer-logo-box">
        <a class="footer-logo" href="/">
          <img src="<?php echo get_field("logo", "option"); ?>" alt="pavlin">
          <span>Pavlin</span>
        </a>
      </div>
      <div class="footer-nav">
        <?php wp_nav_menu(['theme_location' => 'navigation']); ?>
      </div>
      <div class="footer-privacy">
        <span class="footer-text">
          <a href="<?php echo $privacy_link ?>">
            <?php echo __("Privacy Policy | Terms & Condition", "pavlin") ?>
          </a>

        </span>
      </div>
      <address class="footer-address">
        <a href="/contact-us/">
          <img src="<?php echo get_template_directory_uri() . "/src/icons/phone.svg" ?>" alt="phone">
        </a>
        <a href="https://wa.me/<?php echo get_field("whatsapp", "option"); ?>">
          <img src="<?php echo get_template_directory_uri() . "/src/icons/whatsapp.svg" ?>" alt="whatsapp">
        </a>
        <a href="<?php echo get_field("instagram", "option"); ?>">
          <img src="<?php echo get_template_directory_uri() . "/src/icons/instagram.svg" ?>" alt="instagram">
        </a>
        <a href="<?php echo get_field("facebook", "option"); ?>">
          <img src="<?php echo get_template_directory_uri() . "/src/icons/facebook.svg" ?>" alt="facebook">
        </a>
      </address>
    </div>
</footer>
<script src="./dist/main.js"></script>
<?php wp_footer(); ?>
</body>