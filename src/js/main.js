jQuery(document).ready(function ($) {
  $(".btn-mobile-menu").on("click", function () {
    $(this).toggleClass("active");
    $(".header-nav").toggleClass("active");
    $(".header").toggleClass("active");
  });

  $(".menu .menu-item-has-children").on("click", function () {
    $(this).toggleClass("active");
  });

  $(".filters").on("click", function () {
    $(".wpfMainWrapper").toggleClass("visual");
  });

  $(".products .columns-4").addClass("one-time");

  //input label animation

  $(document).ready(function () {
    $(".woocommerce-input-wrapper input").each(function () {
      updateLabelClass($(this));
    });

    $(".woocommerce-input-wrapper input").on("focusout", function () {
      updateLabelClass($(this));
    });

    $(".woocommerce-input-wrapper input").on("focus", function () {
      let $label = $("label[for='" + this.id + "']");
      $label.addClass("active");
    });

    function updateLabelClass($input) {
      let $label = $("label[for='" + $input.attr("id") + "']");
      let $check_val = $input.val();
      if ($check_val === "") {
        $label.removeClass("active");
      } else {
        $label.addClass("active");
      }
    }
  });

  //slider slick

  $(".one-time").slick({
    responsive: [
      {
        breakpoint: 769,
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
      },
      {
        breakpoint: Infinity,
        settings: "unslick",
      },
    ],
  });
});
