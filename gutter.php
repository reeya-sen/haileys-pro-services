<?php /* Template Name:Gutter */ ?>
<?php get_header(); ?>

<div class="frame-new gutters-main">
  <div class="overlap-new">
    <div class="div-new">
      <h1 class="text-wrapper-new"><?php the_field('banner_heading'); ?></h1>
      <p class="p-new"><?php the_field('banner_content'); ?></p>
      <?php
      $link = get_field('button_text');
      if ($link):
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
      ?>
        <a class="frame-27 btn modal-toggle">
          <p class="take-the-quiz-now-to-new"><?php echo esc_html($link_title); ?></p>
          <img class="line-new" src="<?php the_field('button_line_image'); ?>" />
          <img class="img-new" src="<?php the_field('button_frame_image'); ?>" />
        </a>
      <?php endif; ?>
    </div>
    <div class="group-new">
      <div class="overlap-group-new">
        <img class="mask-group-new" src="<?php the_field('top_image_1'); ?>" />
        <img class="mask-group-2-new" src="<?php the_field('top_image_2'); ?>" />
      </div>
      <div class="overlap-2-new">
        <img class="mask-group-3-new" src="<?php the_field('top_image_3'); ?>" />
        <img class="mask-group-4-new" src="<?php the_field('top_image_4'); ?>" />
      </div>
    </div>
  </div>
</div>
 <!-- modal and popup's start  -->
  <div class="modal modal-queze gutter_page_modal top-form">
    <div class="modal-overlay modal-toggle"></div>
    <div class="modal-wrapper modal-transition">
      <div class="modal-header">
        <button class="modal-close modal-toggle">
          <svg class="icon-close icon" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
            <path d="M32.0114 0.000558861C31.4829 0.0130329 30.9808 0.234227 30.6149 0.615793L17.029 14.2017L3.44304 0.615793C3.25643 0.423969 3.03323 0.271542 2.78664 0.167541C2.54006 0.0635399 2.27511 0.0100789 2.0075 0.0103245C1.6098 0.010817 1.22127 0.129854 0.891552 0.352231C0.561833 0.574607 0.30589 0.890225 0.156419 1.25877C0.00694726 1.62731 -0.029267 2.03205 0.0524021 2.42127C0.134071 2.81049 0.329916 3.16654 0.614918 3.44392L14.2009 17.0299L0.614918 30.6158C0.422971 30.8001 0.269724 31.0208 0.164154 31.2651C0.0585832 31.5093 0.00281105 31.7722 0.000103551 32.0383C-0.00260395 32.3044 0.0478073 32.5683 0.148386 32.8147C0.248964 33.061 0.397687 33.2848 0.585845 33.473C0.774003 33.6611 0.997813 33.8099 1.24417 33.9105C1.49052 34.011 1.75447 34.0614 2.02055 34.0587C2.28663 34.056 2.5495 34.0003 2.79376 33.8947C3.03802 33.7891 3.25875 33.6359 3.44304 33.4439L17.029 19.858L30.6149 33.4439C30.7992 33.6359 31.0199 33.7891 31.2642 33.8947C31.5085 34.0003 31.7713 34.056 32.0374 34.0587C32.3035 34.0615 32.5674 34.011 32.8138 33.9105C33.0602 33.8099 33.284 33.6612 33.4721 33.473C33.6603 33.2848 33.809 33.061 33.9096 32.8147C34.0102 32.5683 34.0606 32.3044 34.0579 32.0383C34.0552 31.7722 33.9994 31.5093 33.8938 31.2651C33.7882 31.0208 33.635 30.8001 33.443 30.6158L19.8571 17.0299L33.443 3.44392C33.7341 3.16485 33.934 2.80435 34.0165 2.40968C34.0991 2.01501 34.0604 1.60462 33.9056 1.23231C33.7508 0.859998 33.4871 0.543163 33.1491 0.323355C32.8111 0.103548 32.4145 -0.00897 32.0114 0.000558861Z" fill="#E0E0E0"></path>
          </svg>
        </button>
      </div>
      <div class="modal-body">
        <div class="modal-content">
          <iframe src="https://i.pryms.com/widget/quiz/OYwnQI2sO1gWy9VjpZkr" style="border: none; width: 100%; overflow: hidden; height: 489px;" scrolling="no" id="OYwnQI2sO1gWy9VjpZkr" title="Gutters Quiz"></iframe>
          <script src="https://i.pryms.com/js/form_embed.js"></script>
        </div>
      </div>
    </div>
  </div>
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const modal = document.querySelector(".modal-queze");
    const modalToggleButtons = document.querySelectorAll(".modal-toggle");
    const quizContainer = document.querySelector(".modal-content");
    const quizSrc = "https://i.pryms.com/widget/quiz/OYwnQI2sO1gWy9VjpZkr"; // Store quiz URL

    modalToggleButtons.forEach(button => {
      button.addEventListener("click", function () {
        if (modal.classList.contains("open")) {
          // Closing modal
          modal.classList.remove("open");
          setTimeout(() => {
            const existingIframe = document.getElementById("OYwnQI2sO1gWy9VjpZkr");
            if (existingIframe) {
              existingIframe.remove(); // Remove existing iframe
            }
          }, 300);
        } else {
          // Opening modal
          modal.classList.add("open");
          setTimeout(() => {
            const existingIframe = document.getElementById("OYwnQI2sO1gWy9VjpZkr");
            if (!existingIframe) {
              const newIframe = document.createElement("iframe");
              newIframe.src = quizSrc; // Set fresh quiz URL
              newIframe.style = "border: none; width: 100%; overflow: hidden; height: 489px;";
              newIframe.id = "OYwnQI2sO1gWy9VjpZkr";
              newIframe.title = "Gutters Quiz";
              quizContainer.appendChild(newIframe);
            }
          }, 300);
        }
      });
    });
  });
</script>

  <!-- how-card-modal end -->
<!-- before after sider start -->
<section class="slider-after">
  <div class="slider-con">
    <div class="container">
      <div class="heading-bar">
        <div class="div-wrapper">
          <div class="text-wrapper">
            <h2><?php the_field('before_&_after_heading'); ?></h2>
          </div>
        </div>
        <h3><?php the_field('before_&_after_content'); ?></h3>
      </div>
      <div class="slider-after-center">
        <div class="owl-carousel owl-before">
          <?php
          if (have_rows('before_&_after_slider')):
            while (have_rows('before_&_after_slider')) : the_row(); ?>
              <div>
                <figure class="before-after-slider" data-action="before-after-slider">
                  <div class="before-after-slider__before-image" data-action="before-image">
                    <img src="<?php echo get_sub_field('before_image') ?>" alt="before" />
                  </div>
                  <div class="before-after-slider__after-image">
                    <img src="<?php echo get_sub_field('after_image') ?>" alt="after" />
                  </div>
                  <div class="before-after-slider__resizer">
                    <div class="arrows-bar" style="display:none;">
                      <img src="<?php echo get_sub_field('slide_arrow') ?>">
                    </div>
                    <div class="arrows-bar">
                      <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM1 9H2L2 7H1L1 9Z" fill="#18212E"></path>
                      </svg>

                      <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.70711 8.70711C9.09763 8.31658 9.09763 7.68342 8.70711 7.29289L2.34315 0.928932C1.95262 0.538408 1.31946 0.538408 0.928932 0.928932C0.538408 1.31946 0.538408 1.95262 0.928932 2.34315L6.58579 8L0.928932 13.6569C0.538408 14.0474 0.538408 14.6805 0.928932 15.0711C1.31946 15.4616 1.95262 15.4616 2.34315 15.0711L8.70711 8.70711ZM7 9H8V7H7V9Z" fill="#18212E"></path>
                      </svg>
                    </div>
                  </div>
                </figure>
              </div>
          <?php
            endwhile;
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
  <!-- before after sider end -->
  <div class="frame-6 tesimonial frames-background">
    <div class="container">
      <?php
      $args = array(
        'post_type' => 'testimonial',
        'posts_per_page' => 3,
        'order'          => 'ASC',
        'category_name'  => 'gutter-page',
      );
      $loop = new WP_Query($args);

      if ($loop->have_posts()) :
        $review_counter = 2; // Initialize a counter for unique tab IDs
        while ($loop->have_posts()) : $loop->the_post(); ?>
          <div class="frame-20">
            <div class="testimonial-sec-yt">
              <div class="frame-21">
                <?php
                if (have_rows('review_star_images')):
                  while (have_rows('review_star_images')) : the_row(); ?>
                    <img class="star" src="<?php echo get_sub_field('review_star') ?>">
                <?php
                  endwhile;
                endif;
                ?>
              </div>
              <p class="i-can-t-believe-the"><?php echo get_the_excerpt(); ?></p>
            </div>
            <div class="frame-22">
              <div class="profile-avatar">
                <div class="overlap-group-<?php echo $review_counter; ?>">
                  <div class="text-wrapper-10"><?php the_field('profile_avatar'); ?></div>
                </div>
              </div>
              <div class="text-wrapper-7"><?php the_title(); ?></div>
            </div>
          </div>
      <?php
          $review_counter++;
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </div>
  </div>
  <div class="frame-24">
    <div class="container">
      <div class="frame-13">
        <div class="div-wrapper">
          <div class="text-wrapper"><?php the_field('form_heading', 'option'); ?></div>
        </div>
        <div class="text-wrapper-6"><?php the_field('form_sub_heading', 'option'); ?></div>
      </div>
      <p class="text-wrapper-12"><?php the_field('form_content', 'option'); ?></p>
      <div class="form-main">
        <iframe
          src="https://i.pryms.com/widget/form/iz9SQ69GhcXyCRxLj0Ze"
          style="width:100%;height:100%;border:none;border-radius:0px"
          id="inline-iz9SQ69GhcXyCRxLj0Ze"
          data-layout="{'id':'INLINE'}"
          data-trigger-type="alwaysShow"
          data-trigger-value=""
          data-activation-type="alwaysActivated"
          data-activation-value=""
          data-deactivation-type="neverDeactivate"
          data-deactivation-value=""
          data-form-name="Gutter LCP"
          data-height="410"
          data-layout-iframe-id="inline-iz9SQ69GhcXyCRxLj0Ze"
          data-form-id="iz9SQ69GhcXyCRxLj0Ze"
          title="Gutter LCP">
        </iframe>
        <script src="https://i.pryms.com/js/form_embed.js"></script>
        <?php // echo do_shortcode('[contact-form-7 id="c3a6b53" title="Contact form 1"]'); 
        ?>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>