<?php /* Template Name:Mold */ ?>
<?php get_header(); ?>
<style>.modal-queze .modal-header .frame-13 .text-wrapper-6 {
    font-size: 26px;
}
.modal-queze .modal-header .frame-13 .text-wrapper {
    font-size: 26px;
    line-height: 24.4px;
}</style>
<div class="overlap-2 mold-banner">
	<div class="overlap-wrapper">
		<div class="overlap-3">
			<div class="container">
				<div class="frame-30">
					<div class="frame-31">
						<p class="is-that-honey-to-do"><?php the_field('banner_heading'); ?></p>
						<div class="div-wrapper">
							<p class="text-wrapper-15"><?php the_field('banner_sub_heading'); ?></p>
						</div>
					</div>
					<div class="frame-32">
						<p class="text-wrapper-16"><?php the_field('banner_content'); ?></p>

					</div>
					<a type="button" class="frame-27 btn modal-toggle-consultant">
						<div class="book-a-professional"><?php the_field('banner_button_text'); ?></div>
						<img class="line-2" src="<?php the_field('banner_button_line'); ?>">
						<img class="frame-26" src="<?php the_field('banner_button_frame'); ?>">
					</a>
				</div>
				<div class="lft-nn">
					<img class="wall-img" src="<?php the_field('banner_wall_image'); ?>">
				</div>
			</div>
		</div>
	</div>
</div>
<!--- start mold top button--->
<div class="modal modal-consultant" style="display:none;">
	<div class="modal-overlay modal-toggle"></div>
	<div class="modal-wrapper modal-transition mold-form-gty">
		<div class="modal-header">
			<button class="modal-close modal-toggle" style="display:none;">
				<svg class="icon-close icon" xmlns="http://www.w3.org/2000/svg" width="35" height="35"
					viewBox="0 0 35 35" fill="none">
					<path
						d="M32.0114 0.000558861C31.4829 0.0130329 30.9808 0.234227 30.6149 0.615793L17.029 14.2017L3.44304 0.615793C3.25643 0.423969 3.03323 0.271542 2.78664 0.167541C2.54006 0.0635399 2.27511 0.0100789 2.0075 0.0103245C1.6098 0.010817 1.22127 0.129854 0.891552 0.352231C0.561833 0.574607 0.30589 0.890225 0.156419 1.25877C0.00694726 1.62731 -0.029267 2.03205 0.0524021 2.42127C0.134071 2.81049 0.329916 3.16654 0.614918 3.44392L14.2009 17.0299L0.614918 30.6158C0.422971 30.8001 0.269724 31.0208 0.164154 31.2651C0.0585832 31.5093 0.00281105 31.7722 0.000103551 32.0383C-0.00260395 32.3044 0.0478073 32.5683 0.148386 32.8147C0.248964 33.061 0.397687 33.2848 0.585845 33.473C0.774003 33.6611 0.997813 33.8099 1.24417 33.9105C1.49052 34.011 1.75447 34.0614 2.02055 34.0587C2.28663 34.056 2.5495 34.0003 2.79376 33.8947C3.03802 33.7891 3.25875 33.6359 3.44304 33.4439L17.029 19.858L30.6149 33.4439C30.7992 33.6359 31.0199 33.7891 31.2642 33.8947C31.5085 34.0003 31.7713 34.056 32.0374 34.0587C32.3035 34.0615 32.5674 34.011 32.8138 33.9105C33.0602 33.8099 33.284 33.6612 33.4721 33.473C33.6603 33.2848 33.809 33.061 33.9096 32.8147C34.0102 32.5683 34.0606 32.3044 34.0579 32.0383C34.0552 31.7722 33.9994 31.5093 33.8938 31.2651C33.7882 31.0208 33.635 30.8001 33.443 30.6158L19.8571 17.0299L33.443 3.44392C33.7341 3.16485 33.934 2.80435 34.0165 2.40968C34.0991 2.01501 34.0604 1.60462 33.9056 1.23231C33.7508 0.859998 33.4871 0.543163 33.1491 0.323355C32.8111 0.103548 32.4145 -0.00897 32.0114 0.000558861Z"
						fill="#E0E0E0" />
				</svg>
			</button>
		</div>
		<div class="modal-body">
			<div class="modal-content">
			<?php the_field('banner_button'); ?>
				<!--iframe src="https://i.pryms.com/widget/form/quZ1s8Pceo0DzBuI6MG1"
					style="display:none;width:100%;height:100%;border:none;border-radius:3px"
					id="popup-quZ1s8Pceo0DzBuI6MG1" data-layout="{'id':'POPUP'}" data-trigger-type="alwaysShow"
					data-trigger-value="" data-activation-type="alwaysActivated" data-activation-value=""
					data-deactivation-type="neverDeactivate" data-deactivation-value="" data-form-name="Mold Top"
					data-height="468" data-layout-iframe-id="popup-quZ1s8Pceo0DzBuI6MG1"
					data-form-id="quZ1s8Pceo0DzBuI6MG1" title="Mold Top">
				</iframe>
				<script src="https://i.pryms.com/js/form_embed.js"></script-->
			</div>
		</div>
	</div>
</div>
<!--- end mold top button--->
<div class="mold-only">
	<div class="container">
		<div class="row-d">
			<div class="mold-left">
				<div class="frame-4">
					<div class="div-wrapper">
						<div class="text-wrapper"><?php the_field('mold_scale_heading'); ?></div>
					</div>
					<p class="see-why"><?php the_field('mold_scale_sub_heading'); ?></p>
				</div>
				<?php
				$myField = get_field('mold_scale_content', false, false); ?>
				<p class="text-main"><?php echo $myField; ?></p>
			</div>
			<div class="mold-right">
				<div class="mold-wrap">
					<p><?php the_field('mold_scale_right_heading'); ?></p>
					<div class="graf-img">
						<img src="<?php the_field('mold_scale_right_image'); ?>" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="red-grp">
			<div class="rg-left">
				<h4><?php the_field('mold_scale_ignoring_heading'); ?></h4>
			</div>
			<div class="rg-right">
				<p><?php the_field('mold_scale_ignoring_content'); ?></p>
			</div>
		</div>
	</div>
</div>
<div class="home-risk">
	<div class="container">
		<div class="hom-risk-wrap">
			<div class="mold-risk-warp">
				<h2><?php the_field('home_risk_heading'); ?></h2>
				<p class="take-test"><?php the_field('home_risk_content'); ?></p>
				<div class="rsk-btn">
						<a class="frame-27 btn modal-toggle">
							<p class="take-the-quiz-now-to-new"><?php the_field('home_risk_button_text'); ?></p>
							<img class="line-new" src="<?php the_field('home_risk_button_line'); ?>">
							<img class="img-new" src="<?php the_field('home_risk_button_frame'); ?>">
						</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!---Modal Start>-->
<div class="modal modal-queze">
	<div class="modal-overlay modal-toggle"></div>
	<div class="modal-wrapper modal-transition">
		<div class="modal-header">
			<button class="modal-close modal-toggle">

				<svg class="icon-close icon" xmlns="http://www.w3.org/2000/svg" width="35" height="35"
					viewBox="0 0 35 35" fill="none">
					<path
						d="M32.0114 0.000558861C31.4829 0.0130329 30.9808 0.234227 30.6149 0.615793L17.029 14.2017L3.44304 0.615793C3.25643 0.423969 3.03323 0.271542 2.78664 0.167541C2.54006 0.0635399 2.27511 0.0100789 2.0075 0.0103245C1.6098 0.010817 1.22127 0.129854 0.891552 0.352231C0.561833 0.574607 0.30589 0.890225 0.156419 1.25877C0.00694726 1.62731 -0.029267 2.03205 0.0524021 2.42127C0.134071 2.81049 0.329916 3.16654 0.614918 3.44392L14.2009 17.0299L0.614918 30.6158C0.422971 30.8001 0.269724 31.0208 0.164154 31.2651C0.0585832 31.5093 0.00281105 31.7722 0.000103551 32.0383C-0.00260395 32.3044 0.0478073 32.5683 0.148386 32.8147C0.248964 33.061 0.397687 33.2848 0.585845 33.473C0.774003 33.6611 0.997813 33.8099 1.24417 33.9105C1.49052 34.011 1.75447 34.0614 2.02055 34.0587C2.28663 34.056 2.5495 34.0003 2.79376 33.8947C3.03802 33.7891 3.25875 33.6359 3.44304 33.4439L17.029 19.858L30.6149 33.4439C30.7992 33.6359 31.0199 33.7891 31.2642 33.8947C31.5085 34.0003 31.7713 34.056 32.0374 34.0587C32.3035 34.0615 32.5674 34.011 32.8138 33.9105C33.0602 33.8099 33.284 33.6612 33.4721 33.473C33.6603 33.2848 33.809 33.061 33.9096 32.8147C34.0102 32.5683 34.0606 32.3044 34.0579 32.0383C34.0552 31.7722 33.9994 31.5093 33.8938 31.2651C33.7882 31.0208 33.635 30.8001 33.443 30.6158L19.8571 17.0299L33.443 3.44392C33.7341 3.16485 33.934 2.80435 34.0165 2.40968C34.0991 2.01501 34.0604 1.60462 33.9056 1.23231C33.7508 0.859998 33.4871 0.543163 33.1491 0.323355C32.8111 0.103548 32.4145 -0.00897 32.0114 0.000558861Z"
						fill="#E0E0E0" />
				</svg>
			</button>
			<div class="frame-13">
				<div class="text-wrapper-6"><?php the_field('home_risk_popup_heading'); ?></div>
				<div class="div-wrapper">
					<p class="text-wrapper"><?php the_field('home_risk_popup_bg_color_heading'); ?></p>
				</div>
			</div>
		</div>
		<div class="modal-body">
			<div class="modal-content">
			<?php the_field('home_risk_button_iframe'); ?>
			<!--iframe src="https://i.pryms.com/widget/quiz/nur144HE2y9oAL835Hvf" style="border:none;width:100%;" scrolling="no" id="nur144HE2y9oAL835Hvf" title="Mold Quiz"></iframe>
			<script src="https://i.pryms.com/js/form_embed.js"></script-->
			</div>
		</div>
	</div>
</div>
<!---Modal End>-->

<script>document.addEventListener("DOMContentLoaded", function () {
    const modal = document.querySelector(".modal-queze");
    const modalToggleButtons = document.querySelectorAll(".modal-toggle");
    const quizIframe = document.querySelector("#nur144HE2y9oAL835Hvf"); // Replace with the correct iframe ID

    // Store original iframe src
    const quizSrc = quizIframe.src;

    modalToggleButtons.forEach(button => {
        button.addEventListener("click", function () {
            if (modal.classList.contains("open")) {
                // Modal is closing, reset the quiz
                resetQuiz();
            } else {
                // Modal is opening, ensure quiz is fresh
                loadNewQuiz();
            }
            modal.classList.toggle("open");
        });
    });

    function resetQuiz() {
        quizIframe.src = ""; // Clear iframe
        setTimeout(() => {
            quizIframe.src = quizSrc; // Reload quiz with fresh state
        }, 500); // Small delay to ensure reset
    }

    function loadNewQuiz() {
        quizIframe.src = quizSrc; // Ensure quiz is always fresh when opening
    }
});
</script>
<div class="expert-sec">
	<div class="container">
		<div class="frame-13">
			<div class="text-wrapper-6"><?php the_field('expertise_section_heading'); ?></div>
			<div class="div-wrapper">
				<p class="text-wrapper"><?php the_field('expertise_section_sub_heading'); ?></p>
			</div>
		</div>
		<h4 class="sb-head"><?php the_field('expertise_section_content'); ?></h4>

		<div class="black-badge">
			<ul>
				<?php
				$sec5_custm_img = get_field('expertise_section_list');
				foreach ($sec5_custm_img as $sec5_custm_img_imgsval) {
					?>
					<li><img src="<?php echo $sec5_custm_img_imgsval['list_image']; ?>"
							alt=""><?php echo $sec5_custm_img_imgsval['list_content']; ?></li>
				<?php } ?>
			</ul>
			<h3><?php the_field('expertise_section_list_bottom_heading'); ?></h3>
			<p><?php the_field('list_bottom_content'); ?></p>
			<div class="consle-btn">
				<?php
				$expertise_btn = get_field('expertise_section_button');
				if ($expertise_btn): ?>
					<a type="button" class="frame-27 btn modal-toggle-consultant-2">
						<div class="book-a-professional"><?php echo ($expertise_btn['button_link_text']); ?></div>
						<img class="line-2" src="<?php echo $expertise_btn['button_line']; ?>">
						<img class="frame-26" src="<?php echo $expertise_btn['button_frame']; ?>">
					</a>
					<div id="popup-containerr" style="display:none;">
						<?php echo ($expertise_btn['button_link']); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<div class="frame-6 tesimonial frames-background">
	<div class="container">
		<?php
		$args = array(
			'post_type' => 'testimonial',
			'posts_per_page' => 3,
			'order' => 'ASC',
			'category_name' => 'mold-page',
		);
		$loop = new WP_Query($args);
		if ($loop->have_posts()):
			$review_counter = 2;
			while ($loop->have_posts()):
				$loop->the_post(); ?>
				<div class="frame-20">
					<div class="testimonial-sec-yt">
						<div class="frame-21">
							<?php
							if (have_rows('review_star_images')):
								while (have_rows('review_star_images')):
									the_row(); ?>
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
<div class="faq-sc">
	<div class="container">
		<div class="faq-wrap">
			<div class="frame-13">
				<div class="text-wrapper-6"><?php the_field('mold_faq_heading'); ?></div>
				<div class="div-wrapper">
					<p class="text-wrapper"><?php the_field('mold_faq_color_bg_heading'); ?></p>
				</div>
			</div>
			<h3 class="head-sub"><?php the_field('mold_faq_sub_heading'); ?></h3>
			<div class="accorian-main">
				<div class="accordion">
					<?php
					$faq_sec = get_field('mold_faqs');
					if ($faq_sec) {
						$i = 0;
						foreach ($faq_sec as $faq_secval) {
							$activeClasstitle = ($i === 0) ? 'active-item' : '';
							$activeClass = ($i === 0) ? 'active' : ''; // Add 'active' class only for the first item
							?>
							<div class="at-item <?php echo $activeClasstitle; ?>">
								<div class="at-title <?php echo $activeClass; ?>">
									<h2><?php echo $faq_secval['mold_faqs_heading']; ?></h2>
								</div>
								<div class="at-tab" style="<?php echo ($i === 0) ? 'display: block;' : 'display: none;'; ?>">
									<?php echo $faq_secval['mold_faqs_content']; ?>
								</div>
							</div>
							<?php
							$i++;
						}
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>

<!--- start mold bottom button--->
<div class="modal modal-consultant-2" style="display:none;">
	<div class="modal-overlay modal-toggle"></div>
	<div class="modal-wrapper modal-transition">
		<div class="modal-header">
			<button class="modal-close modal-toggle">
				<svg class="icon-close icon" xmlns="http://www.w3.org/2000/svg" width="35" height="35"
					viewBox="0 0 35 35" fill="none">
					<path
						d="M32.0114 0.000558861C31.4829 0.0130329 30.9808 0.234227 30.6149 0.615793L17.029 14.2017L3.44304 0.615793C3.25643 0.423969 3.03323 0.271542 2.78664 0.167541C2.54006 0.0635399 2.27511 0.0100789 2.0075 0.0103245C1.6098 0.010817 1.22127 0.129854 0.891552 0.352231C0.561833 0.574607 0.30589 0.890225 0.156419 1.25877C0.00694726 1.62731 -0.029267 2.03205 0.0524021 2.42127C0.134071 2.81049 0.329916 3.16654 0.614918 3.44392L14.2009 17.0299L0.614918 30.6158C0.422971 30.8001 0.269724 31.0208 0.164154 31.2651C0.0585832 31.5093 0.00281105 31.7722 0.000103551 32.0383C-0.00260395 32.3044 0.0478073 32.5683 0.148386 32.8147C0.248964 33.061 0.397687 33.2848 0.585845 33.473C0.774003 33.6611 0.997813 33.8099 1.24417 33.9105C1.49052 34.011 1.75447 34.0614 2.02055 34.0587C2.28663 34.056 2.5495 34.0003 2.79376 33.8947C3.03802 33.7891 3.25875 33.6359 3.44304 33.4439L17.029 19.858L30.6149 33.4439C30.7992 33.6359 31.0199 33.7891 31.2642 33.8947C31.5085 34.0003 31.7713 34.056 32.0374 34.0587C32.3035 34.0615 32.5674 34.011 32.8138 33.9105C33.0602 33.8099 33.284 33.6612 33.4721 33.473C33.6603 33.2848 33.809 33.061 33.9096 32.8147C34.0102 32.5683 34.0606 32.3044 34.0579 32.0383C34.0552 31.7722 33.9994 31.5093 33.8938 31.2651C33.7882 31.0208 33.635 30.8001 33.443 30.6158L19.8571 17.0299L33.443 3.44392C33.7341 3.16485 33.934 2.80435 34.0165 2.40968C34.0991 2.01501 34.0604 1.60462 33.9056 1.23231C33.7508 0.859998 33.4871 0.543163 33.1491 0.323355C32.8111 0.103548 32.4145 -0.00897 32.0114 0.000558861Z"
						fill="#E0E0E0" />
				</svg>
			</button>
		</div>
		<div class="modal-body">
			<div class="modal-content">
			<iframe
			  src="https://i.pryms.com/widget/form/FMC2TTjW6C9g1HZ5Ph1a"
			  style="display:none;width:100%;height:100%;border:none;border-radius:3px"
			  id="popup-FMC2TTjW6C9g1HZ5Ph1a" 
			  data-layout="{'id':'POPUP'}"
			  data-trigger-type="alwaysShow"
			  data-trigger-value=""
			  data-activation-type="alwaysActivated"
			  data-activation-value=""
			  data-deactivation-type="neverDeactivate"
			  data-deactivation-value=""
			  data-form-name="Mold - Bottom"
			  data-height="636"
			  data-layout-iframe-id="popup-FMC2TTjW6C9g1HZ5Ph1a"
			  data-form-id="FMC2TTjW6C9g1HZ5Ph1a"
			  title="Mold - Bottom"
				  >
			</iframe>
			<script src="https://i.pryms.com/js/form_embed.js"></script>

			</div>
		</div>
	</div>
</div>
<!--- end mold bottom button--->
<?php get_footer(); ?>