<?php
$collection_section = get_field("section_collection");
?>

<section class="collection-innerContainer">
    <div class="collection">

        <div class="collection-first">
            <div class="collection-wrapper">
                <div class="collection-subtitle">
                    <?php echo $collection_section["collection_subtitle"]; ?>
                </div>
                <h3 class="collection-title">
                    <?php echo $collection_section["collection-first-tile"]; ?>
                </h3>
                <p class="collection-text">
                    <?php echo $collection_section["collection-first-text"]; ?>
                </p>
                <a href="shop/" class="collection-link">
                    <?php echo __("shop now", "pavlin") ?>
                </a>
                <img class="collection-image-1" src="
                    <?php echo $collection_section["collection-first-image"]; ?>" alt="background">
            </div>
        </div>


        <div class="collection-second">
            <h3 class="collection-title">
                <?php echo $collection_section["collection-second-tile"]; ?>
            </h3>
            <p class="collection-text">
                <?php echo $collection_section["collection-second-text"]; ?>
            </p>
            <a href="shop/" class="">
                <?php echo __("View Products", "pavlin") ?>
            </a>
            <img class="collection-image-1" src=" <?php echo $collection_section["collection-second-image"]; ?>"
                alt="background">
        </div>


        <div class="collection-third">
            <h3 class="collection-title">
                <?php echo $collection_section["collection-third-tile"]; ?>
            </h3>
            <p class="collection-text">
                <?php echo $collection_section["collection-third-text"]; ?>
            </p>
            <a href="shop/" class="">
                <?php echo __("View Products", "pavlin") ?>
            </a>
            <img class="collection-image-1" src=" <?php echo $collection_section["collection-third-image"]; ?>"
                alt="background">
        </div>
    </div>
</section>