<?php
$hero_section = get_field("hero_section");
?>

<section class="hero-innerContainer">
    <div class="hero">
        <p class="hero-subtitle">
            <?php echo $hero_section["hero_subtitle"]; ?>
        </p>
        <h1 class="hero-title">
            <?php echo $hero_section["hero_title"]; ?>
        </h1>
        <p class="hero-text">
            <?php echo $hero_section["hero_text"]; ?>
        </p>
        <a href="shop/" class="hero-link">
            <?php echo __("shop now", "pavlin") ?>
        </a>
        <img class="hero-background" src="<?php echo $hero_section["hero_background"]; ?>" alt="background">
    </div>
</section>