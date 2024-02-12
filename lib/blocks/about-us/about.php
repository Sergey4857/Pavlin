<?php
$about_section = get_field("section_about");
$investigate_section = get_field("section_investigate");

?>
<section class="about-innerContainer">
    <div class="content">
        <div class="about">
            <div class="about-wrap">
                <div class="about-wrapper">
                    <h2 class="about-title">
                        <?php echo $about_section["about-title"]; ?>
                    </h2>

                    <p class="about-description">
                        <?php echo $about_section["about-text"]; ?>
                    </p>
                </div>
                <img class="about-image" src="<?php echo $about_section["about-first-image"]; ?>" alt="background">
                <div class="image-wrap">
                    <img class="about-image-prise" src="<?php echo $about_section["about-image-second"]; ?>"
                        alt="background">
                    <img class="about-image-box" src="<?php echo $about_section["about-image-third"]; ?>"
                        alt="background">
                </div>
            </div>
        </div>

        <div class="investigate">
            <h2 class="investigate-title">
                <?php echo $investigate_section["investigate-title"]; ?>
            </h2>

            <p class="investigate-text">
                <?php echo $investigate_section["investigate-text"]; ?>
            </p>

            <div class="investigate-gallery">
                <img class="about-image-frst" src="<?php echo $investigate_section["investigate-image-first"]; ?>"
                    alt="background">
                <img class="about-image-snd" src="<?php echo $investigate_section["investigate-image-second"]; ?>"
                    alt="background">
                <img class="about-image-third" src="<?php echo $investigate_section["investigate-image-third"]; ?>"
                    alt="background">
            </div>
        </div>
    </div>
</section>