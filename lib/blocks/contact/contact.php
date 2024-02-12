<?php /* Template Name: Contact us */

$info_section = get_field("section_info");
?>

<div class="info-innerContainer">
    <div class="info-wrapper">
        <div class="info">
            <div class="info-box box-location">
                <img src="<?php echo $info_section["info-first-image"]; ?>" alt="">
                <p class="info-subtitle">
                    <?php echo $info_section["info-subtitle-first"]; ?>
                </p>
                <p class="info-desc">
                    <?php echo $info_section["info-location"]; ?>
                </p>
            </div>

            <div class="info-box box-phone">
                <img src="<?php echo $info_section["info-second-image"]; ?>" alt="">

                <p class="info-subtitle">
                    <?php echo $info_section["info-subtitle-second"]; ?>
                </p>
                <a class="info-text phone" href="tel:<?php echo get_field("phone", "option"); ?>" class="info-phone">
                    <?php echo get_field("phone", "option"); ?>
                </a>

                <a class="info-text mail" href="mailto:<?php echo get_field("mail", "option"); ?>" class="info-email">
                    <?php echo get_field("mail", "option"); ?>
                </a>

                <a class="info-text instagram" href="<?php echo get_field("instagram", "option"); ?>"
                    class="info-instagram">pavlin_boutique</a>

                <a class="info-text facebook" href="<?php echo get_field("facebook", "option"); ?>"
                    class="info-facebook">pavlin.boutique</a>

                <a class="info-text whatsapp" href="https://wa.me/<?php echo get_field("whatsapp", "option"); ?>"
                    class="info-whatsapp">WhatsApp
                </a>

            </div>

            <div class="info-box box-hours">
                <img src="<?php echo $info_section["info-third-image"]; ?>" alt="">
                <p class="info-subtitle">
                    <?php echo $info_section["info-subtitle-third"]; ?>
                </p>
                <P class="info-desc">
                    <?php echo $info_section["info-days"]; ?>
                </P>
                <p class="info-desc">
                    <?php echo $info_section["info-hours"]; ?>
                </p>
            </div>
        </div>


        <div class="form">
            <h1 class="form-title">
                <?php echo $info_section["info-form-title"]; ?>
            </h1>
            <?php echo do_shortcode('[wpforms id="161"]') ?>
        </div>
    </div>
</div>