<div class="frame-28 copywrite">
  <div class="container">
    <p class="text-wrapper-14"><?php the_field('copyright_text', 'options'); ?></p>
    <?php
    $link = get_field('privacy_text', 'option');
    if ($link):
      $link_url = $link['url'];
      $link_title = $link['title'];
      $link_target = $link['target'] ? $link['target'] : '_self';
      ?>
      <!-- <a class="text-wrapper-14" href="<?php // echo esc_url($link_url); ?>" target="<?php // echo esc_attr($link_target); ?>"><?php // echo esc_html($link_title); ?></a> -->
    <?php endif; ?>
    <?php
    $link = get_field('terms_text', 'option');
    if ($link):
      $link_url = $link['url'];
      $link_title = $link['title'];
      $link_target = $link['target'] ? $link['target'] : '_self';
      ?>
      <!-- <a class="text-wrapper-14" href="<?php // echo esc_url($link_url); ?>" target="<?php // echo esc_attr($link_target); ?>"><?php // echo esc_html($link_title); ?></a> -->
    <?php endif; ?>
    <a href="<?php echo esc_attr(get_field('footer_logo_link', 'option')); ?>" target="_blank">
      <img class="without_hvr" alt="hcp-logo" src="<?php the_field('footer_logo', 'option'); ?>">
      <img class="with_hvr" alt="hcp-logo" src="<?php the_field('footer_hover_logo', 'option'); ?>">
    </a>
  </div>
</div>

</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
  $('#tabs-nav li:first-child').addClass('active');
  $('.tab-content').hide();
  $('.tab-content:first').show();

  // Click function
  $('#tabs-nav li').click(function () {
    $('#tabs-nav li').removeClass('active');
    $(this).addClass('active');
    $('.tab-content').hide();

    var activeTab = $(this).find('a').attr('href');
    $(activeTab).fadeIn();
    return false;
  });
</script>
<script>
  $(document).ready(function () {
    // Open the first tab by default
    $(".accordion-item:first-child .accordion-contant").show();
    $(".accordion-item:first-child .accordion-titel").addClass("active");

    $(".accordion-titel").click(function () {
      // Toggle visibility of the current content
      $(this).parent(".accordion-item").find(".accordion-contant").slideToggle();

      // Add 'active' class to the clicked title
      $(this).toggleClass("active");

      // Close all previous items and remove 'active' class
      $(this).parent(".accordion-item").prevAll(".accordion-item").find(".accordion-contant").slideUp();
      $(this).parent(".accordion-item").prevAll(".accordion-item").find(".accordion-titel").removeClass("active");

      // Close all next items and remove 'active' class
      $(this).parent(".accordion-item").nextAll(".accordion-item").find(".accordion-contant").slideUp();
      $(this).parent(".accordion-item").nextAll(".accordion-item").find(".accordion-titel").removeClass("active");
    });
  });
</script>
<script>
  $('.owl-before').owlCarousel({
    loop: true,
    margin: 10,
    dots: false,
    responsiveClass: true,
    mouseDrag: false, // Disable mouse drag
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 1,
        nav: false
      },
      1000: {
        items: 1,
        nav: false,
        loop: false
      }
    }
  });





  let active = false;
  let gap = "24";

  function initSlider(sliderElement) {
    let slider = sliderElement;
    let before = sliderElement.querySelector('[data-action="before-image"]');
    let beforeImage = before.getElementsByTagName("img")[0];
    let resizer = sliderElement.querySelector(".before-after-slider__resizer");
    let width = slider.offsetWidth;
    beforeImage.style.width = width + "px";

    //Adjust width of image on resize
    window.addEventListener("resize", function () {
      let width = slider.offsetWidth;
      beforeImage.style.width = width + "px";
    });

    resizer.addEventListener("mousedown", function () {
      active = true;
      resizer.classList.add("resize");
    });

    slider.addEventListener("mouseup", function () {
      active = false;
      resizer.classList.remove("resize");
    });

    slider.addEventListener("mouseleave", function () {
      active = false;
      resizer.classList.remove("resize");
    });

    slider.addEventListener("mousemove", function (e) {
      if (!active) return;
      let x = e.pageX;
      x -= slider.getBoundingClientRect().left;
      slideIt(x, slider, before, resizer);
      pauseEvent(e);
    });

    resizer.addEventListener("touchstart", function () {
      active = true;
      resizer.classList.add("resize");
    });

    slider.addEventListener("touchend", function () {
      active = false;
      resizer.classList.remove("resize");
    });

    slider.addEventListener("touchcancel", function () {
      active = false;
      resizer.classList.remove("resize");
    });

    //calculation for dragging on touch devices
    slider.addEventListener("touchmove", function (e) {
      if (!active) return;
      let x;
      let i;

      for (i = 0; i < e.changedTouches.length; i++) {
        x = e.changedTouches[i].pageX;
      }

      x -= slider.getBoundingClientRect().left;

      slideIt(x, slider, before, resizer, gap ? gap : 0);

      pauseEvent(e);
    });
  }

  function slideIt(x, slider, before, resizer, gap = 0) {
    let transform = Math.max(0, Math.min(x, slider.offsetWidth));
    if (transform > gap && transform < slider.offsetWidth - gap) {
      before.style.width = transform + "px";
      resizer.style.left = transform - 0 + "px";
    }
  }

  //stop divs being selected.
  function pauseEvent(e) {
    if (e.stopPropagation) e.stopPropagation();
    if (e.preventDefault) e.preventDefault();
    e.cancelBubble = true;
    e.returnValue = false;
    return false;
  }

  document.addEventListener("DOMContentLoaded", function () {
    document
      .querySelectorAll(".before-after-slider")
      .forEach((e) => initSlider(e));
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Name field: Allow only characters
    const nameField = document.getElementById('fname');
    nameField.addEventListener('input', function () {
      this.value = this.value.replace(/[^a-zA-Z\s]/g, ''); // Remove non-alphabetical characters
    });

    // Phone field: Allow only numbers
    const phoneField = document.getElementById('phone');
    phoneField.addEventListener('input', function () {
      this.value = this.value.replace(/[^0-9]/g, ''); // Remove non-numeric characters
    });

    // Form validation before submission
    const form = document.querySelector('form'); // Adjust selector if necessary
    form.addEventListener('submit', function (event) {
      if (!nameField.value.match(/^[a-zA-Z\s]+$/)) {
        alert('Name must only contain characters.');
        event.preventDefault();
      }

      if (!phoneField.value.match(/^\d+$/)) {
        alert('Phone number must only contain numbers.');
        event.preventDefault();
      }
    });
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
  $(document).ready(function () {
    $(".at-title").click(function () {
      $(this)
        .toggleClass("active")
        .next(".at-tab")
        .slideToggle()
        .parent(".at-item") // Add class to parent .at-item
        .toggleClass("active-item")
        .siblings()
        .removeClass("active-item") // Remove class from other .at-item elements
        .find(".at-tab")
        .slideUp()
        .prev()
        .removeClass("active");
    });
  });


</script>
<script>
  $('.modal-toggle').off('click').on('click', function (e) {
    e.preventDefault();
    $('.modal.modal-queze').toggleClass('is-visible');
  });


  jQuery(document).ready(function ($) {
    $(".modal-toggle-consultant , .modal-toggle-consultant-2").off("click").on("click", function (event) {
      event.preventDefault();
      $(".modal-consultant").fadeIn();
      $("#popup-quZ1s8Pceo0DzBuI6MG1").show();

      // Ensure the div and overlay are set to display:block on each click
      $("#popup-quZ1s8Pceo0DzBuI6MG1-div, #popup-quZ1s8Pceo0DzBuI6MG1-overlay").css("display", "block");
    });

    $(".modal-consultant .modal-close").on("click", function () {
      $(".modal-consultant").fadeOut(function () {
        $("#popup-quZ1s8Pceo0DzBuI6MG1").hide();

        // Hide div and overlay when closing the modal
        $("#popup-quZ1s8Pceo0DzBuI6MG1-div, #popup-quZ1s8Pceo0DzBuI6MG1-overlay").css("display", "none");
      });
    });
  });


</script>

</body>

</html>