<?php
$explore_section = get_field("section_explore");
?>


<section class="explore-innerContainer">
    <div class="explore">
        <div class="explore-wrap">
            <div class="explore-first explore-small">
                <img class="explore-image-1" src="<?php echo $explore_section["explore-first-image"]; ?>"
                    alt="background">
                <div class="overley">
                    <img class="explore-image-1" src="<?php echo $explore_section["explore-first-image-overlay"]; ?>"
                        alt="background">
                    <p class="explore-title">
                        <?php echo $explore_section["explore-first-title"]; ?>
                    </p>
                    <a href="shop/" class="shop-link">
                        <?php echo __("Shop now", "pavlin") ?>
                    </a>
                </div>
            </div>


            <div class="explore-second explore-small">

                <img class="explore-image-1" src="<?php echo $explore_section["explore-second-image"]; ?>"
                    alt="background">
                <div class="overley">
                    <img class="explore-image-1" src="<?php echo $explore_section["explore-second-image-overley"]; ?>"
                        alt="background">
                    <p class="explore-title">
                        <?php echo $explore_section["explore-second-title"]; ?>
                    </p>
                    <a href="shop/" class="shop-link">
                        <?php echo __("Shop now", "pavlin") ?>
                    </a>
                </div>
            </div>

            <div class="explore-third explore-big">
                <img class="explore-image-1" src="<?php echo $explore_section["explore-central-image"]; ?>"
                    alt="background">

                <div class="overley">
                    <img class="explore-image-1" src="<?php echo $explore_section["explore-central-image-overley"]; ?>"
                        alt="background">
                    <p class="explore-title">
                        <?php echo $explore_section["explore-central-title"]; ?>
                    </p>
                    <a href="shop/" class="shop-link">
                        <?php echo __("Shop now", "pavlin") ?>
                    </a>
                </div>

            </div>

            <div class="explore-fourth explore-small">

                <img class="explore-image-1" src="<?php echo $explore_section["explore-fourth-image"]; ?>"
                    alt="background">
                <div class="overley">
                    <img src="<?php echo $explore_section["explore-fourth-image-overley"]; ?>" alt="background">

                    <p class="explore-title">
                        <?php echo $explore_section["explore-fourth-title"]; ?>
                    </p>
                    <a href="shop/" class="shop-link">
                        <?php echo __("Shop now", "pavlin") ?>
                    </a>
                </div>
            </div>

            <div class="explore-fifth explore-small">
                <img class="explore-image-1" src="<?php echo $explore_section["explore-fifth-image"]; ?>"
                    alt="background">
                <div class="overley">
                    <img class="explore-image-1" src="<?php echo $explore_section["explore-fifth-image-overlay"]; ?>"
                        alt="background">
                    <p class="explore-title">
                        <?php echo $explore_section["explore-fifth-title"]; ?>
                    </p>
                    <a href="shop/" class="shop-link">
                        <?php echo __("Shop now", "pavlin") ?>
                    </a>
                </div>
            </div>


        </div>
    </div>
</section>