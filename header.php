<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/globals.css?ver=<?php echo time(); ?>">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/styleguide.css?ver=<?php echo time(); ?>">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css?ver=<?php echo time(); ?>">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/mold-responsive.css?ver=<?php echo time(); ?>">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/custom.css?ver=<?php echo time(); ?>">
  <!-- <link rel="stylesheet" href="<?php // echo get_stylesheet_directory_uri();
                                    ?>/assets/css/chimeny-responsive.css?ver=<?php // echo time();
                                                                              ?>"> -->
  <?php wp_head(); ?>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-M6KQL827');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6KQL827"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <?php wp_body_open(); ?>
  <div class="handyman-LCP">
    <header>
      <div class="container">
        <a href="<?php echo home_url(); ?>" class="brand-name">
          <?php echo get_custom_logo_with_class(); ?>
        </a>

        <div class="frame-33">
          <div class="frame-13">
            <!-- <?php
                  if (have_rows('header_social_icons', 'options')):
                    while (have_rows('header_social_icons', 'options')) : the_row();
                  ?>
               <a href="<?php the_sub_field('social_link'); ?>" > <img class="img-3" src="<?php the_sub_field('social_icon'); ?>"></a>
               <?php
                    endwhile;
                  endif;
                ?> -->
            <a href="<?php the_field('address_link', 'options'); ?>" class="frame-34" target="_blank">
              <img class="img-3" src="<?php the_field('address_icon', 'options'); ?>">
              <div class="frame-35">
                <div class="text-wrapper-19"><?php the_field('address_title', 'options'); ?></div>
                <p class="text-wrapper-20"><?php the_field('address_content', 'options'); ?></p>
              </div>
            </a>

          </div>
          <?php



          if (is_page_template('gutter.php')) {
            $link = get_field('gutter_page_phone_number_link', 'option'); // Fixed the correct field name
            if ($link):
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
              <a href="<?php echo esc_url($link_url); ?>" class="frame-34">
                <img class="img-3" src="<?php the_field('gutter_page_phone_number_icon', 'option'); ?>">
                <div class="frame-36">
                  <div class="text-wrapper-21"><?php the_field('gutter_page_phone_number_title', 'option'); ?></div>
                  <div class="text-wrapper-22"><?php echo esc_html($link_title); ?></div>
                </div>
              </a>
            <?php endif;
          } elseif (is_page_template('mold.php')) { // Fixed else if condition
            $link = get_field('mold_page_phone_number_link', 'option'); // Fixed correct field name
            if ($link):
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
              <a href="<?php echo esc_url($link_url); ?>" class="frame-34">
                <img class="img-3" src="<?php the_field('mold_page_phone_number_icon', 'option'); ?>">
                <div class="frame-36">
                  <div class="text-wrapper-21"><?php the_field('mold_page_phone_number_title', 'option'); ?></div>
                  <div class="text-wrapper-22"><?php echo esc_html($link_title); ?></div>
                </div>
              </a>
            <?php endif;
          } elseif (is_page_template('homepage.php')) { // Fixed else if condition
            $link = get_field('handyman_page_phone_number_link_copy', 'option'); // Fixed correct field name
            if ($link):
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
              <a href="<?php echo esc_url($link_url); ?>" class="frame-34">
                <img class="img-3" src="<?php the_field('handyman_page_phone_number_icon', 'option'); ?>">
                <div class="frame-36">
                  <div class="text-wrapper-21"><?php the_field('handyman_page_phone_number_title_copy', 'option'); ?></div>
                  <div class="text-wrapper-22"><?php echo esc_html($link_title); ?></div>
                </div>
              </a>
            <?php endif;
          } else {
            $link = get_field('email_link', 'option');
            if ($link):
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
              <a href="<?php echo esc_url($link_url); ?>" class="frame-34">
                <img class="img-3" src="<?php the_field('email_icon', 'option'); ?>">
                <div class="frame-36">
                  <div class="text-wrapper-21"><?php the_field('email_title', 'option'); ?></div>
                  <div class="text-wrapper-22"><?php echo esc_html($link_title); ?></div>
                </div>
              </a>
          <?php endif;
          }
          ?>
          <script>
            // jQuery('.modal-toggle-consultant').on('click', function(e) {
            //   e.preventDefault();
            // jQuery('.modal.modal-consultant').toggleClass('is-visible');
            // });
          </script>

        </div>
      </div>
    </header>