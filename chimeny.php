<?php /* Template Name:Chimney */ ?>
<?php get_header(); ?>

<style>
	/* The Modal (background) */
	.new-modal .modal-content {
    width: 100%;
    overflow: hidden;
    z-index: 99999;
    position: relative;
    padding: 0 10PX;
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
		display: none;
		/* Hidden by default */
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
	.new-modal .modal-content {
margin: 9% auto 0;
}
</style>



<div class="overlap-2 chimney-banner">
	<div class="overlap-wrapper">
		<div class="overlap-3">
			<div class="container">
				<div class="frame-30">
					<div class="frame-31">
						<p class="is-that-honey-to-do"><?php the_field('chimney_banner_heading'); ?></p>
					</div>
					<div class="frame-32">
						<p class="text-wrapper-16"><?php the_field('chimney_banner_sub_heading'); ?></p>
						<p class="normal-para"><?php the_field('chimney_banner_content'); ?></p>
					</div>
					<div class="sch-btn">
						<button class="frame-new btn">
							<div class="book-a-professional"><?php the_field('chimney_banner_button_text'); ?></div>
							<img class="line-2" src="<?php the_field('chimney_banner_button_line'); ?>">
							<img class="frame-26" src="<?php the_field('chimney_banner_button_frame'); ?>">

						</button>
						<p class="file-text"><?php the_field('chimney_banner_button_heading'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal new-modal top-form" id="myModal">
	<div class="modal-content">
		<span class="close" id="closeModal">&times;</span>
		<?php //the_field('chimney_banner_button_iframe'); ?>
		<iframe
			src="https://i.pryms.com/widget/form/5e749bJbu24WdV2p2T49"
			style="width:100%;height:100%;border:none;border-radius:3px"
			id="inline-5e749bJbu24WdV2p2T49"
			data-layout="{'id':'INLINE'}"
			data-trigger-type="alwaysShow"
			data-trigger-value=""
			data-activation-type="alwaysActivated"
			data-activation-value=""
			data-deactivation-type="neverDeactivate"
			data-deactivation-value=""
			data-form-name="Chimney - Top"
			data-height="741"
			data-layout-iframe-id="inline-5e749bJbu24WdV2p2T49"
			data-form-id="5e749bJbu24WdV2p2T49"
			title="Chimney - Top">
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
<div class="main-bg-sc">
	<div class="difference-sec">
		<div class="container">
			<div class="frame-13">
				<div class="div-wrapper">
					<p class="text-wrapper"><?php the_field('difference_expertise_heading'); ?></p>
				</div>
			</div>
			<div class="diff">
				<div class="diff-left">
					<div class="makes-row">
						<h3><?php the_field('difference_expertise_sub_heading'); ?></h3>
						<?php the_field('difference_expertise_content'); ?>
					</div>
				</div>
				<div class="diff-right">
					<img src="<?php the_field('difference_expertise_image'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="difference-sec condition-sec">
		<div class="container">
			<div class="frame-13">
				<div class="div-wrapper">
					<p class="text-wrapper"><?php the_field('condition_main_heading'); ?></p>
				</div>
			</div>
			<div class="diff">
				<div class="diff-right">
					<img src="<?php the_field('condition_image'); ?>" alt="">
				</div>
				<div class="diff-left">
					<div class="makes-row">
						<h3><?php the_field('condition_heading'); ?></h3>
						<?php the_field('condition_content'); ?>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="reguler-cards">
		<div class="container">
			<div class="frame-13">
				<div class="div-wrapper">
					<p class="text-wrapper"><?php the_field('chimney_maintenance_heading'); ?></p>
				</div>
			</div>
			<p class="small-head"><?php the_field('chimney_maintenance_content'); ?></p>
			<div class="sub-cards-rwo">
				<?php
				$chimney_maintenance = get_field('chimney_maintenance_cards');
				foreach ($chimney_maintenance as $chimney_maintenance_val) {
				?>
					<div class="card-main">
						<div class="icon-div">
							<?php echo $chimney_maintenance_val['chimney_maintenance_svg']; ?>
						</div>
						<h3><?php echo $chimney_maintenance_val['chimney_maintenance_title']; ?></h3>
						<?php echo $chimney_maintenance_val['chimney_maintenance_content']; ?>
					</div>
				<?php } ?>
			</div>
			<p class="btom-para"><?php the_field('chimney_maintenance_bottom_content'); ?>
			<p>
		</div>
	</div>
</div>
<div class="frame-6 tesimonial chimney-testi">
	<div class="container">
		<div class="frame-13">
			<div class="div-wrapper">
				<p class="text-wrapper"><?php the_field('homeowners_heading'); ?></p>
			</div>
		</div>
		<?php
		$args = array(
			'post_type' => 'testimonial',
			'posts_per_page' => 3,
			'order'          => 'ASC',
			'category_name'  => 'chimney-page',
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
<div class="difference-sec customize-sec">
	<div class="container">
		<div class="frame-13">
			<div class="div-wrapper">
				<p class="text-wrapper"><?php the_field('chimney_service_main_heading'); ?></p>
			</div>
		</div>
		<div class="diff">
			<div class="diff-right">
				<img src="<?php the_field('chimney_service_image'); ?>" alt="">
			</div>
			<div class="diff-left">
				<div class="makes-row">
					<h3><?php the_field('chimney_service_heading'); ?></h3>
					<?php the_field('chimney_service_content'); ?>
				</div>
				<div class="sch-btn">
					<?php
					$expertise_btn = get_field('chimney_service_button');
					if ($expertise_btn): ?>
					<button class="frame-new frame-new-2 btn">
						<!-- <a href="<?php //echo esc_url($expertise_btn['chimney_service_button_link']['url']); ?>" class="frame-27 btn sch-btn"> -->
							<div class="book-a-professional"><?php echo esc_html($expertise_btn['chimney_service_button_link']['title']); ?></div>
							<img class="line-2" src="<?php echo $expertise_btn['chimney_service_button_line']; ?>">
							<img class="frame-26" src="<?php echo $expertise_btn['chimney_service_button_frame']; ?>">
						<!-- </a> -->
						</button>
						<p class="file-text"><?php echo $expertise_btn['chimney_service_button_text']; ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="faq-sc faq-chimeny">
	<div class="container">
		<div class="faq-wrap">
			<div class="frame-13">
				<div class="div-wrapper">
					<p class="text-wrapper"><?php the_field('got_questions_heading'); ?></p>
				</div>
				<div class="text-wrapper-6"><?php the_field('got_questions_bg_colored_heading'); ?></div>
			</div>
			<!--h3 class="head-sub">Mold FAQs</h3-->
			<div class="accorian-main">
				<div class="accordion">
					<?php
					$faq_sec = get_field('got_questions_list');
					if ($faq_sec) {
						$i = 0;
						foreach ($faq_sec as $faq_secval) {
							$activeClasstitle = ($i === 0) ? 'active-item' : '';
							$activeClass = ($i === 0) ? 'active' : ''; // Add 'active' class only for the first item
					?>
							<div class="at-item <?php echo $activeClasstitle; ?>">
								<div class="at-title <?php echo $activeClass; ?>">
									<h2><?php echo $faq_secval['got_questions_list_heading']; ?></h2>
								</div>
								<div class="at-tab" style="<?php echo ($i === 0) ? 'display: block;' : 'display: none;'; ?>">
									<?php echo $faq_secval['got_questions_list_content']; ?>
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

<div class="need-help">
	<div class="container">
		<div class="need-row">
			<div class="need-left">
				<div class="need-icon">
					<?php the_field('need_help_svg'); ?>
				</div>
				<h2><?php the_field('need_help_heading'); ?></h2>
				<h4><?php the_field('need_help_sub_heading'); ?></h4>
				<?php the_field('need_help_content'); ?>
				<div class="need-btn">
					<!-- <button class="frame-new emergency-btn btn 12"> -->
					<!-- <button class="frame-new emergency-btn btn 12">
						<?php if (have_rows('need_help_button')) {
							while (have_rows('need_help_button')) {
								the_row();
								$image = get_sub_field('button_frame');
								$image1 = get_sub_field('button_line');
								$link = get_sub_field('button_link');
						?>
								<div class="book-a-professional"><?php echo esc_attr($link['title']); ?></div>
								<img class="line-2" src="<?php echo $image1; ?>">
								<img class="frame-26" src="<?php echo $image; ?>">
						<?php }
						} ?>

					</button> -->
					<?php if (have_rows('need_help_button')) : 
						while (have_rows('need_help_button')) : the_row();
							$image = get_sub_field('button_frame');
							$image1 = get_sub_field('button_line');
							$link = get_sub_field('button_link');
							if ($link): // Ensure there's a valid link
					?>
							<a href="<?php echo esc_url($link['url']); ?>" class="frame-27 btn"> 
								<div class="book-a-professional"><?php echo esc_html($link['title']); ?></div>
								<?php if ($image1): ?>
									<img class="line-2" src="<?php echo esc_url($image1); ?>" alt="">
								<?php endif; ?>
								<?php if ($image): ?>
									<img class="frame-26" src="<?php echo esc_url($image); ?>" alt="">
								<?php endif; ?>
							</a>
					<?php 
							endif;
						endwhile;
					endif;
					?>

				</div>
			</div>
			<div class="need-right">
				<img src="<?php the_field('need_help_image'); ?>" alt="">
			</div>
		</div>
	</div>
</div>

<div class="frame-24">
	<div class="container">
		<div class="frame-13">
			<div class="div-wrapper">
				<div class="text-wrapper"><?php the_field('form_bg_colored_heading'); ?></div>
			</div>
			<div class="text-wrapper-6"><?php the_field('form_heading'); ?></div>
		</div>
		<p class="text-wrapper-12"><?php the_field('form_sub_heading'); ?></p>
		<p class="text-wrapper-para"><?php the_field('form_content'); ?></p>
		<div class="form-main">
		<?php the_field('form_content_iframe'); ?>
			<!--iframe
				src="https://i.pryms.com/widget/form/0pcHCe5jc8xnAPDZUQwV"
				style="width:100%;height:100%;border:none;border-radius:3px"
				id="inline-0pcHCe5jc8xnAPDZUQwV"
				data-layout="{'id':'INLINE'}"
				data-trigger-type="alwaysShow"
				data-trigger-value=""
				data-activation-type="alwaysActivated"
				data-activation-value=""
				data-deactivation-type="neverDeactivate"
				data-deactivation-value=""
				data-form-name="Chimney"
				data-height="410"
				data-layout-iframe-id="inline-0pcHCe5jc8xnAPDZUQwV"
				data-form-id="0pcHCe5jc8xnAPDZUQwV"
				title="Chimney">
			</iframe>
			<script src="https://i.pryms.com/js/form_embed.js"></script-->
		</div>
	</div>
</div>
<script>
	document.addEventListener("DOMContentLoaded", function() {
		// Get elements
		const frame27 = document.querySelector(".frame-new-2");
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
<div class="modal new-modal" id="myModalnew">
	<div class="modal-content">
		<span class="close" id="closeModal">&times;</span>
		<iframe
			src="https://i.pryms.com/widget/form/VLcKNfvrlSGHW5W9aC4i"
			style="width:100%;height:100%;border:none;border-radius:3px"
			id="inline-VLcKNfvrlSGHW5W9aC4i"
			data-layout="{'id':'INLINE'}"
			data-trigger-type="alwaysShow"
			data-trigger-value=""
			data-activation-type="alwaysActivated"
			data-activation-value=""
			data-deactivation-type="neverDeactivate"
			data-deactivation-value=""
			data-form-name="Chimney LCP - Emergency"
			data-height="585"
			data-layout-iframe-id="inline-VLcKNfvrlSGHW5W9aC4i"
			data-form-id="VLcKNfvrlSGHW5W9aC4i"
			title="Chimney LCP - Emergency">
		</iframe>
		<script src="https://i.pryms.com/js/form_embed.js"></script>
	</div>
</div>
<script>
	document.addEventListener("DOMContentLoaded", function() {
		// Get elements
		const frame27 = document.querySelector(".emergency-btn");
		const modal = document.getElementById("myModalnew");
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
<?php get_footer(); ?>