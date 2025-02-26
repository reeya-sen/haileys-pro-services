<?php /* Template Name:Genesis */ ?>
<?php get_header('genesis'); ?>
<div class="roofing-LCP"> 
		<section class="fst-sec">	
			<div class="container">
			 <div class="logo">
				<a class="brand" href="<?php home_url();?>"><img src="<?php the_field('genesis_logo'); ?>" /></a>
			  </div>
			 <div class="frame-2">
				<div class="frame-3">
				  <h1 class="the-roof-that"><?php the_field('genesis_heading'); ?></h1>
				  <p class="text-wrapper"><?php the_field('genesis_content'); ?></p>
				</div>
				<?php 
				$link = get_field('genesis_banner_button');
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
				<a href="<?php echo esc_url( $link_url ); ?>" class="frame-4 btn">
				  <div class="design-it-your-way-wrapper"><p class="text-wrapper-2"><?php echo esc_html( $link_title ); ?></p></div>
				  <img class="rectangle-2" src="<?php the_field('genesis_banner_button_image'); ?>" />
				</a>
				<?php endif; ?>
			  </div>
			  <div class="border-thr"></div>
			  <div class="border-four"></div>
			  <div class="border-fiv"></div>
			  <div class="border-sx"></div>
			</div> 
			<img class="vector-2" src="<?php the_field('genesis_banner_vector_image'); ?>" />
			  <!--div class="div"></div-->
			  <div class="shap-btm"></div>
			  <div class="border-one"></div>
			  <div class="border-tw"></div>
        </section>
	    <section class="scnd">
			<div class="container">
				<div class="row-roof">
					 <div class="overlap-group-wrapper">
						<div class="overlap-2">
						  <div class="overlap-3">
							<div class="key-features-wrapper">
								<h3 class="key-features"><?php the_field('key_feature_heading'); ?></h3>
							  </div>
							    <?php
                        if (have_rows('key_feature_content')):
                            while (have_rows('key_feature_content')) : the_row(); ?>
							<div class="frame-9">
							  <img class="img-2" src="<?php echo get_sub_field('key_feature_content_image') ?>" />
							  <div class="frame-10">
								<h4 class="text-wrapper-5"><?php echo get_sub_field('key_feature_content_heading') ?></h4>
								<p class="text-wrapper-6"><?php echo get_sub_field('key_feature_content_text') ?></p>
							  </div>
							</div>
							<?php
                            endwhile;
                        endif;
                        ?>
						  </div>
						</div>
					  </div>
					  <div class="frame-5">
						<div class="frame-6">
						  <h2 class="your-perfect-roof"><?php the_field('key_feature_right_content_heading'); ?></h2>
						  <p class="p"><?php the_field('key_feature_right_content_sub_heading'); ?></p>
						  <p class="text-wrapper-3"><?php the_field('key_feature_right_content'); ?></p>
						</div>
						<?php 
						$link = get_field('key_feature_right_content_button');
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
						<a href="<?php echo esc_url( $link_url ); ?>" class="frame-4 btn">
						  <div class="design-it-your-way-wrapper"><p class="text-wrapper-2"><?php echo esc_html( $link_title ); ?></p></div>
						  <img class="rectangle-2" src="<?php the_field('key_feature_right_content_button_image'); ?>" />
						</a>
						<?php endif; ?>
					  </div>
				  </div>
				  <img class="rectangle" src="<?php the_field('key_feature_right_content_bg_image'); ?>" />
			</div> 
		</section>
		<section class="trd">
			<div class="container">
				<div class="group"></div>
				  <img class="img" src="<?php the_field('built_image_btm'); ?>" />
				  <div class="frame-7">
					<div class="frame-8">
					  <h2 class="built-to-last-in-any"><?php the_field('built_main_heading'); ?></h2>
					  <p class="text-wrapper-4"><?php the_field('built_content'); ?></p>
					</div>
					<?php 
						$link = get_field('built_button_text');
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
					<a href="<?php echo esc_url( $link_url ); ?>" class="frame-4 brn-bth btn">
					  <img class="rectangle-2 lef-rnt" src="<?php the_field('built_left_button_img'); ?>" />
					  <div class="test-my-roof-s-wrapper"><div class="text-wrapper-2"><?php echo esc_html( $link_title ); ?></div></div>
					  <img class="rectangle-2 right-rnt" src="<?php the_field('built_right_button_img'); ?>" />
					</a>
					<?php endif; ?>
				  </div>
			</div>
		</section>
		<section class="frth">
			<div class="frame"><img class="mask-group" src="<?php the_field('expert_services_bg_image'); ?>" /></div>
			<div class="container">
				  <div class="frame-13">
					<div class="frame-14">
					  <h2 class="expert-roofing"><?php the_field('expert_services_heading'); ?></h2>
					  <p class="text-wrapper-7"><?php the_field('expert_services_content'); ?></p>
					</div>
					<div class="frame-15">
					  <h3 class="text-wrapper-8"><?php the_field('expert_services_countries_heading'); ?></h3>
					  <div class="frame-16">
					    <?php if (have_rows('expert_services_countries')):
                            while (have_rows('expert_services_countries')) : the_row(); ?>
						<a href="<?php echo get_sub_field('expert_services_countries_link') ?>" class="frame-17 btn">
						  <div class="text-wrapper-9"><?php echo get_sub_field('expert_services_countries_title') ?></div>
						  <img class="img-3" src="<?php echo get_sub_field('expert_services_countries_image') ?>" />
						</a>
						<?php
                            endwhile;
                        endif;
                        ?>
					  </div>
					</div>
					<div class="frame-15">
					  <h3 class="text-wrapper-8"><?php the_field('expert_services_cities_heading'); ?></h3>
					  <div class="frame-19">
					    <?php if (have_rows('expert_services_cities')):
                            while (have_rows('expert_services_cities')) : the_row(); ?>
						<div class="frame-20">
						  <img class="img-3" src="<?php echo get_sub_field('expert_services_cities_image') ?>" />
						  <div class="text-wrapper-10"><?php echo get_sub_field('expert_services_cities_title') ?></div>
						</div>
						<?php
                            endwhile;
                        endif;
                        ?>
					  </div>
					</div>
				  </div>
			</div>
		</section>
		<section class="frm contact-form">
			
			<div class="container">
			  <img class="mask-group-2" src="<?php the_field('form_background_image'); ?>" />
			  <?php the_field('form_code'); ?>
              <!-- <div class="frame-21"> -->
				<!-- <img class="rectangle-3" src="<?php //the_field('form_left_image'); ?>" /> -->
                
                <!-- <div class="frame-22">
				  <div class="frame-23">
					<img class="male-user" src="<?php echo get_stylesheet_directory_uri();?>/assets-genesis/images/icons8-male-user-1.svg" />
					<div class="enter-your-name">
						<input type="text" id="fname" name="fname" placeholder="ENTER YOUR NAME">
					</div>
				  </div>
				  <div class="frame-23">
					<div class="text-wrapper-11"> <input type="email" id="email" name="email" placeholder="ENTER YOUR EMAIL"></div>
				  </div>
				  <div class="frame-23">
					<div class="text-wrapper-11"> <input type="phone" id="phone" name="phone" placeholder="PHONE NUMBER"> </div>
				  </div>
				  <div class="start-now-btn">
				  <a href="#" class="frame-4 btn">
					<div class="start-your-custom-wrapper"><p class="text-wrapper-2">START YOUR CUSTOM JOURNEY NOW</p></div>
					<img class="rectangle-2" src="<?php echo get_stylesheet_directory_uri();?>/assets-genesis/images/rectangle-9-3.svg" />
				  </a>
				  </div>
				</div> -->
				<?php //echo do_shortcode('[contact-form-7 id="88f8207" title="Contact form 1"]'); ?>
			<!-- <img class="rectangle-3" src="<?php //the_field('form_right_image'); ?>" /> -->
			  <!-- </div> -->
		  </div>
		</section>
    <?php get_footer('genesis'); ?>