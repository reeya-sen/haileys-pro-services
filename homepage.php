<?php /* Template Name:Home */ ?>
<?php get_header(); ?>
<style>
	/* The Modal (background) */
	.new-modal .modal-content {
    width: 51%;
    overflow: hidden;
    z-index: 99999;
    position: relative;
    padding: 30px;
}
.new-modal span#closeModal {
    display: block;
    text-align: right;
    font-size: 30px;
    font-weight: 600;
}
.new-modal iframe {
    padding: 20px !important;

    width: 100% !important;

}
.new-modal .handyman-LCP .frame-24 iframe {
    margin: 0 !important;
    width: 100% !important;
}
.modal {
  display: none; /* Hidden by default */
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0, 0, 0);
  background-color: rgba(0, 0, 0, 0.4);
}
button.frame-new.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    padding: 0px 20px 0px 32px;
    position: relative;
    flex: 0 0 auto;
    border-radius: 12px;
    overflow: hidden;
    border-color: transparent;
    box-shadow: 0px 24px 52px #fad7458c, 0px 6px 0px #c89f37, inset 0px 8px 12px #ffdc48;
    border-image: linear-gradient(to bottom, rgb(255, 230.62, 128.94), rgba(255, 254.22, 250.92, 0)) 1;
    background: linear-gradient(180deg, rgb(250, 215, 69) 0%, rgb(230, 175, 55) 50%, rgb(250, 215, 69) 100%);
    transition: all .4s;
    width: auto;
    border: none;
}
/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  max-width: 1000px;
}
/* Close Button (cross icon) */
.close-btn {
  color: #aaa;
  font-size: 28px;
  font-weight: bold;
  position: absolute;
  top: 10px;
  right: 25px;
  cursor: pointer;
}
.close-btn:hover,
.close-btn:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
<div class="overlap-2">
	<div class="overlap-wrapper">
		<div class="overlap-3">
			<div class="container">
				<div class="frame-30">
					<div class="frame-31">
						<p class="is-that-honey-to-do"><?php the_field('to_do_list'); ?></p>
						<div class="div-wrapper">
							<p class="text-wrapper-15"><?php the_field('time_to_call'); ?></p>
						</div>
					</div>
					<div class="frame-32">
						<p class="text-wrapper-16 banner-para">
							<?php the_field('sub_content'); ?>
						</p>
						<!-- <p class="here-s-an-expanded">
							<span class="text-wrapper-17"><?php // the_field('here_wrapper_1_text'); 
															?></span>
							<span class="text-wrapper-18"><?php // the_field('here_wrapper_2_text'); 
															?></span>
							<span class="text-wrapper-17"><?php // the_field('here_wrapper_3_text'); 
															?></span>
						</p> -->
					</div>
					
					
						<button class="frame-new btn">
							<div class="book-a-professional">Book A professional</div>
							<img class="line-2" src="<?php the_field('professional_button_image'); ?>">
							<img class="frame-26" src="<?php the_field('professional_button_frame'); ?>">
						</button>
					
				</div>
				<div class="lft-nn">
					<img class="element-4" src="<?php the_field('man_image'); ?>">
					<!-- <div class="right-cont">
						<img class="vector" src="<?php // the_field('right_content_image'); 
													?>">
						<div class="text-wrapper-23"><?php // the_field('right_text'); 
														?></div>
						<div class="text-wrapper-24"><?php // the_field('right_vs_text'); 
														?></div>
						<div class="professional"><?php // the_field('comparison_text'); 
													?></div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>

<!-- diy-vs start -->
<section class="diy-vs">
	<div class="container">
		<div class="diy-heading">

			<?php if (have_rows('dy_comparison_content')): ?>
				<?php while (have_rows('dy_comparison_content')): the_row();

					// Get sub field values.
					$first_comparison = get_sub_field('first_comparison');
					$second_comparison = get_sub_field('second_comparison');
					$image = get_sub_field('image');
				?>
					<div class="right-conts">
						<img class="vector-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vector (1).svg">
						<div class="div"><?php echo $first_comparison; ?></div>
						<div class="vs">vs.</div>
						<div class="professionals"><?php echo $second_comparison; ?></div>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
	
	<div class="container container-border">
		<?php if (have_rows('stopping__details')): ?>
			<?php while (have_rows('stopping__details')): the_row();

				// Get sub field values.
				$heading = get_sub_field('heading_');
				$sub_heading = get_sub_field('sub-heading');
				$description_ = get_sub_field('description_');
				$image = get_sub_field('image');
				$download_button_title = get_field('download_button_title');
			?>
				<div class="diy-vs-grid">
					<div class="div-content">
						<div class="frame-4">
							<div class="div-wrapper">
								<div class="text-wrapper"><?php echo $heading; ?></div>
							</div>
							<p class="see-why"><?php echo $sub_heading; ?></p>
							<p class="might"><?php echo $description_; ?></p>
						</div>
						<div class="btn-flex-bar">

							<?php
							// Get the sales file URL from ACF
							$sales_file = get_field('guideline_pdf');
							$file_url = $sales_file['url']; // Get the file URL
							$file_name = $sales_file['title']; // Get the file name
							if ($file_name) {
							?>
								
						<button class="frame-new frame-new-2 frame-27 btn">
						<div class="book-a-professional">Download our guide Today!</div>
									<!-- HTML structure with dynamic paths -->
									<img class="line-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/line-1-4.svg" alt="Line 2">
									<img class="frame-26" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pdf.svg" alt="Frame 26">
								</button>
							<?php } 
							
							else{ ?>
							
							<a href="images/Handyman-pdf.pdf" target="_blank" class="frame-27 btn">
									<div class="book-a-professional"><?php echo $download_button_title; ?></div>
									<!-- HTML structure with dynamic paths -->
									<img class="line-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/line-1-4.svg" alt="Line 2">
									<img class="frame-26" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pdf.svg" alt="Frame 26">
								</a>
							<?php }
							?>

							<!-- <a href="images/Handyman-pdf.pdf" target="_blank" class="frame-27 btn">
						<div class="book-a-professional">Download our guide Today!</div>
						<img class="line-2" src="https://service.fromdusttoglory.com/wp-content/uploads/2025/01/line-1-4.svg">
						<img class="frame-26" src="https://service.fromdusttoglory.com/wp-content/uploads/2025/02/pdf.svg">
					</a> -->
							<p><?php the_field('guessing_thought'); ?></p>
						</div>


					</div>
					<div class="div-right">
						<?php if ($image): ?>
							<img src="<?php echo $image; ?>" />
						<?php endif; ?>
						<!-- <img class="" src="https://service.fromdusttoglory.com/wp-content/uploads/2025/02/floating.png"> -->
					</div>
				</div>

			<?php endwhile; ?>
		<?php endif; ?>
	</div>

</section>

<!-- diy-vs end -->
<!-- <div class="frame-2 frames-background">
		<div class="container">
			<div class="frame-3">
			  <div class="frame-4">
				<div class="div-wrapper"><div class="text-wrapper"><?php the_field('guessing_heading'); ?></div></div>
				<p class="see-why"><?php the_field('guessing_sub_heading'); ?></p>
			  </div>
			  <p class="DIY-might-seem-like"><?php the_field('guessing_content'); ?></p>
			</div>
		</div>
	  </div> -->

<!-- <div class="slider desktop-slide frames-background">
		<div class="container">
			<ul class="frame-5" id="tabs-nav">
			<?php
			if (have_rows('tabs_content')) :
				$tab_counter = 1;
				while (have_rows('tabs_content')) : the_row(); ?>
					<li class="component-2">
						<a href="#tab<?php echo $tab_counter; ?>"> 
							<div class="time"><?php echo get_sub_field('tab_heading'); ?></div>
							<div class="icons-sand-timer">
								<img class="img" src="<?php echo esc_url(get_sub_field('tab_image')); ?>" alt="<?php echo esc_attr(get_sub_field('tab_heading')); ?>">
							</div>
						</a>
					</li>
				<?php
					$tab_counter++;
				endwhile;
			endif;
				?>
			</ul>
			<div class="frame-wrapper" id="tabs-content">
			<?php if (have_rows('tabs_main_content')) :
				$content_counter = 1;
				while (have_rows('tabs_main_content')) : the_row(); ?>
				<div class="slide-tab tab-content" id="tab<?php echo $content_counter; ?>">
					<div class="frame-7">
                <?php
					$left = get_sub_field('left_content');
					if ($left): ?>
                        <div class="frame-8">
                            <div class="text-wrapper-3"><?php echo esc_html($left['main_heading']); ?></div>
                        </div>
                        <?php

						$diy_list = $left['diy_list'] ?? [];
						if ($diy_list):
							foreach ($diy_list as $nested_row):
								$cancel_icon = $nested_row['cancel_icon'] ?? ''; // Nested icon
								$cancel_content = $nested_row['cancel_content'] ?? ''; // Nested content
						?>
                                    <div class="frame-9">
                                        <img class="img-2" src="<?php echo esc_url($cancel_icon); ?>" alt="Cancel Icon">
                                        <p class="p div-2"><?php echo $cancel_content; ?></p>
                                    </div>
                                <?php endforeach;
						endif;
								?>
                    <?php endif; ?>
            </div>
            <div class="overlap-group-wrapper">
			
                <div class="overlap-group">
                    <?php
					$center = get_sub_field('center_content');
					if ($center): ?>
                            <p class="how-much-time-can"><?php echo ($center['center_content']); ?></p>
                            <div class="rectangle"></div>
							<div class="overlap-group-bgimage"><img class="img" src="<?php echo esc_url($center['center_content_image']); ?>"></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="frame-10">
                <?php
					$right = get_sub_field('right_content');
					if ($right): ?>
                        <div class="frame-11">
                            <div class="text-wrapper-5"><?php echo esc_html($right['professional_heading']); ?></div>
                        </div>
						<?php
						$right_content = $right['professional_content_list'] ?? [];
						if ($right_content):
							foreach ($right_content as $nested_roww):
								$check_icon = $nested_roww['professional_check_image'] ?? ''; // Nested icon
								$check_content = $nested_roww['professional_content'] ?? ''; // Nested content
						?>
                                    <div class="frame-9">
                                        <img class="img-2" src="<?php echo esc_url($check_icon); ?>" alt="Check Icon">
                                        <p class="p div-2"><?php echo $check_content; ?></p>
                                    </div>
                                <?php endforeach;
						endif;
								?>
								<?php endif; ?>
						</div>
					</div>
						<?php
						$content_counter++;
					endwhile;
				endif;
						?>
			</div>
		</div>
	</div> -->


<!-- <div class="slider mobile-slide frames-background">
		<div class="container">
			<div class="accordion">
				<?php
				if (have_rows('tabs_mobile_content')) :
					while (have_rows('tabs_mobile_content')) : the_row(); ?>
                <div class="accordion-item">
                    <div class="accordion-titel component-2">
                        <div class="time">
                            <?php echo get_sub_field('accordion_title') ?>
                        </div>
                        <div class="icons-sand-timer"><img class="img" src="<?php echo get_sub_field('accordion_image') ?>"></div>
                    </div>
                    <div class="accordion-contant">
                        <div class="slide-tab">
                        <?php
						$mobleft = get_sub_field('accordion_content_left');
						if ($mobleft): ?>
                            <div class="frame-7">
								<div class="frame-8">
									<div class="text-wrapper-3">
										<?php echo esc_html($mobleft['accordion_content_list_heading']); ?>
									</div>
								</div>
								<?php
								$mobdiy_list = $mobleft['accordion_content_list_content'] ?? [];
								if ($mobdiy_list):
									foreach ($mobdiy_list as $nested_row_mob):
										$cancel_icon_mob = $nested_row_mob['accordion_content_list_content_img'] ?? ''; // Nested icon
										$cancel_content_mob = $nested_row_mob['accordion_content_list_text'] ?? ''; // Nested content
								?>
									<div class="frame-9">
										<img class="img-2" src="<?php echo esc_url($cancel_icon_mob); ?>">
										<p class="p">
											<?php echo $cancel_content_mob; ?>
										</p>
									</div>
								<?php endforeach;
								endif;
								?>
                            </div>
                            <?php endif; ?>
							<div class="overlap-group-wrapper">
								<div class="overlap-group">
									<?php
									$mobcenter = get_sub_field('accordion_content_center');
									if ($mobcenter): ?>
										<p class="how-much-time-can">
											<?php echo esc_html($mobcenter['accordion_content_center_text']); ?>
										</p>
										<div class="rectangle"></div>
										<div class="overlap-group-bgimage"><img class="img" src="<?php echo esc_url($mobcenter['accordion_content_center_image']); ?>"></div>
										<?php endif; ?>
								</div>
							</div>
							<div class="frame-10">
								<?php
								$mobright = get_sub_field('accordion_content_right');
								if ($mobright): ?>
									<div class="frame-11">
										<div class="text-wrapper-5">
											<?php echo esc_html($mobright['accordion_content_right_heading']); ?>
										</div>
									</div>
									<?php
									$right_content_mob = $mobright['accordion_content_right_list'] ?? [];
									if ($right_content_mob):
										foreach ($right_content_mob as $nested_roww_mob):
											$check_icon_mob = $nested_roww_mob['accordion_right_list_image'] ?? ''; // Nested icon
											$check_content_mob = $nested_roww_mob['accordion_right_list_text'] ?? ''; // Nested content
									?>
										<div class="frame-9">
											<img class="img-2" src="<?php echo esc_url($check_icon_mob); ?>">
											<p class="p">
												<?php echo $check_content_mob; ?>
											</p>
										</div>
									<?php endforeach;
									endif;
									?>
                        	<?php endif; ?>
							</div>
                        </div>
                    </div>
                </div>
                <?php
					endwhile;
				endif;
				?>
            </div>
        </div>
    </div> -->

<div class="frame-12 small-fixes">
	<div class="container">
		<div class="frame-13">
			<div class="div-wrapper">
				<p class="text-wrapper"><?php the_field('small_fixes_heading'); ?></p>
			</div>
			<div class="text-wrapper-6"><?php the_field('small_fixes_sub_heading'); ?></div>
		</div>
		<div class="frame-14">
			<?php if (have_rows('small_fixes_repeated_items')):
				while (have_rows('small_fixes_repeated_items')) : the_row(); ?>
					<div class="frame-15">
						<div class="group-wrapper">
							<div class="group">
								<img class="mask-group" src="<?php echo get_sub_field('small_fixes_item_bg_img') ?>">
							</div>
						</div>
						<img class="img-3" src="<?php echo get_sub_field('small_fixes_item_heading_image') ?>">
						<div class="text-wrapper-7"><?php echo get_sub_field('small_fixes_item_heading') ?></div>
						<div class="frame-16">
							<?php
							if (have_rows('small_fixes_items_list')):
								while (have_rows('small_fixes_items_list')) : the_row(); ?>
									<div class="frame-17">
										<img class="check-mark" src="<?php echo get_sub_field('small_fixes_item_list_image') ?>">
										<p class="text-wrapper-8"><?php echo get_sub_field('small_fixes_item_list_text') ?></p>
									</div>
							<?php
								endwhile;
							endif;
							?>
						</div>
					</div>
			<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</div>

<div class="frame-18 frames-background">
	<div class="container">
		<div class="frame-19">
			<div class="div-wrapper">
				<div class="text-wrapper"><?php the_field('testimonial_heading'); ?></div>
			</div>
			<p class="text-wrapper-9"><?php the_field('testimonial_sub-heading'); ?></p>
		</div>
		<div class="frame-14">
			<?php
			$images = get_field('testimonial_images');

			if ($images): ?>
				<?php foreach ($images as $image): ?>
					<div class="image-wrapper">
						<img class="image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
					</div>
				<?php endforeach; ?>
			<?php endif; ?>

			<!-- <div class="image-wrapper"><img class="image" src="<?php // the_field('testimonial_image'); 
																	?>"></div> -->
		</div>
	</div>
</div>

<div class="frame-6 tesimonial frames-background">
	<div class="container">
		<?php
		$args = array(
			'post_type' => 'testimonial',
			'posts_per_page' => 3,
			'order'          => 'ASC',
			'category_name'  => 'home-page',
		);
		$loop = new WP_Query($args);
		if ($loop->have_posts()) :
			$review_counter = 2;
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
				src="https://i.pryms.com/widget/form/09FaYU0IfrhXcdz1XZoy"
				style="width:100%;height:100%;border:none;border-radius:3px"
				id="inline-09FaYU0IfrhXcdz1XZoy"
				data-layout="{'id':'INLINE'}"
				data-trigger-type="alwaysShow"
				data-trigger-value=""
				data-activation-type="alwaysActivated"
				data-activation-value=""
				data-deactivation-type="neverDeactivate"
				data-deactivation-value=""
				data-form-name="Hailey Pro"
				data-height="432"
				data-layout-iframe-id="inline-09FaYU0IfrhXcdz1XZoy"
				data-form-id="09FaYU0IfrhXcdz1XZoy"
				title="Hailey Pro">
			</iframe>
			<script src="https://i.pryms.com/js/form_embed.js"></script>
			<?php // echo do_shortcode('[contact-form-7 id="c3a6b53" title="Contact form 1"]'); 
			?>
		</div>
	</div>

	
	<div class="modal new-modal" id="myModal-2">
	<div class="modal-content">
		<span class="close" id="closeModal-2">&times;</span>
		<iframe
  src="https://i.pryms.com/widget/form/hIzEUV4eLtay3avFcJGw"
  style="width:100%;height:100%;border:none;border-radius:3px"
  id="inline-hIzEUV4eLtay3avFcJGw" 
  data-layout="{'id':'INLINE'}"
  data-trigger-type="alwaysShow"
  data-trigger-value=""
  data-activation-type="alwaysActivated"
  data-activation-value=""
  data-deactivation-type="neverDeactivate"
  data-deactivation-value=""
  data-form-name="Handyman - PDF Form"
  data-height="410"
  data-layout-iframe-id="inline-hIzEUV4eLtay3avFcJGw"
  data-form-id="hIzEUV4eLtay3avFcJGw"
  title="Handyman - PDF Form"
      >
</iframe>
<script src="https://i.pryms.com/js/form_embed.js"></script>
	</div>
</div>
<script>
	document.addEventListener("DOMContentLoaded", function() {
		// Get elements
		const frame27 = document.querySelector(".frame-new-2");
		const modal = document.getElementById("myModal-2");
		const closeModalButton = document.getElementById("closeModal-2");

		// Show modal when .frame-27 is clicked
		frame27.addEventListener("click", function() {
			modal.style.display = "block";
		});

		// Hide modal when the close button is clicked
		closeModalButton.addEventListener("click", function() {
			modal.style.display = "none";
		});

		// Hide modal when clicking outside of it
		window.addEventListener("click", function(event) {
			if (event.target === modal) {
				modal.style.display = "none";
			}
		});
	});
</script>
<script>window.addEventListener("message", function(event) {
    if (event.data === "formSubmitted") {
        let currentUrl = new URL(window.location.href);
        currentUrl.searchParams.set("PDF", "Yes"); // Add the parameter
        window.history.pushState({}, "", currentUrl); // Update the URL without reloading

        window.location.href = "/thank-you/" + "?PDF=Yes"; // Redirect to the Thank You page with parameter
    }
});
</script>
	<div class="modal new-modal top-form" id="myModal">
    <div class="modal-content">
      <span class="close" id="closeModal">&times;</span>
      <iframe
  src="https://i.pryms.com/widget/form/cfVUNI77NwzBXGO32vKa"
  style="width:100%;height:100%;border:none;border-radius:3px"
  id="inline-cfVUNI77NwzBXGO32vKa" 
  data-layout="{'id':'INLINE'}"
  data-trigger-type="alwaysShow"
  data-trigger-value=""
  data-activation-type="alwaysActivated"
  data-activation-value=""
  data-deactivation-type="neverDeactivate"
  data-deactivation-value=""
  data-form-name="Handyman - Top"
  data-height="741"
  data-layout-iframe-id="inline-cfVUNI77NwzBXGO32vKa"
  data-form-id="cfVUNI77NwzBXGO32vKa"
  title="Handyman - Top"
      >
</iframe>
<script src="https://i.pryms.com/js/form_embed.js"></script>
    </div>
  </div>
<script>
  document.addEventListener("DOMContentLoaded", function() {
  // Get elements
  const frame27 = document.querySelector(".frame-new");
  const modal = document.getElementById("myModal");
  const closeModalButton = document.getElementById("closeModal");

  // Show modal when .frame-27 is clicked
  frame27.addEventListener("click", function() {
    modal.style.display = "block";
  });

  // Hide modal when the close button is clicked
  closeModalButton.addEventListener("click", function() {
    modal.style.display = "none";
  });

  // Hide modal when clicking outside of it
  window.addEventListener("click", function(event) {
    if (event.target === modal) {
      modal.style.display = "none";
    }
  });
});

</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<?php get_footer(); ?>