<section class="cop-text"> 
			<div class="container">
			  <div class="frame-24">
				<p class="text-wrapper-12"><?php the_field('copyright_text', 'option'); ?></p>
				<div class="footer-logo-icn">
					<a href="<?php echo esc_attr(get_field('footer_logo_link', 'option')); ?>" target="_blank">
					  <img class="without_hvr" alt="hcp-logo" src="<?php the_field('footer_logo', 'option'); ?>">
					  <img class="with_hvr" alt="hcp-logo" src="<?php the_field('footer_hover_logo', 'option'); ?>">
					</a>
				  </div>
			  </div>
			</div>
		</section>
    </div>
  </body>
</html>
