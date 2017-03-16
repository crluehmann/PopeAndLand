
<div id="banner" class="full_width">
        	<?php

          $args = array('post_type' => 'slider',
										'orderby ' => 'menu_order',
										'order'=>'ASC');
		$feature_banner = new WP_Query();								
		$feature_banner->query($args);
        ?>
          <div id="slideshow-wrapper" class="full_width">
               
                  <?php if ( $feature_banner->have_posts() ) : ?>
					 <ul id="home-slider">
                    <?php while ( $feature_banner->have_posts() ) : $feature_banner->the_post(); ?>
                          
                        <li class="slide-item">
							<?php if(ds_get_cf('video_code')) {
								ds_cf('video_code');
							}
							else { ?>
							<img src="<?php echo ds_timthumb_image_url( wp_get_attachment_url( get_post_thumbnail_id() ), 957, 489, get_the_title(),'/images/banner-sample-image-default.jpg', 'banner_img');?>" alt="<?php echo get_the_title();?>"/>

							<?php } ?>
						
							<div class="scaption">
								<?php the_content(); ?>
							</div>
                        </li>

                    <?php endwhile; ?>
					 </ul>
					 <a class="controls snext" href="javascript:void(0);">next</a>
					 <a class="controls sprev" href="javascript:void(0);">prev</a>
					  <div class="center full_width" id="wrap_nav"><div class="full_width line_space"></div>
					  <?php ds_ao('rollover_list'); ?>
					  </div>
					<script type="text/javascript">

	jQuery(document).ready(function(){
		
		jQuery('#home-slider').cycle({
		fx:     'fade',
		next:     '.snext',
		prev:     '.sprev',
		speed:  2000,
		timeout: 5000
		});
	
	});
</script>
                <?php endif; ?>
               
          </div>
        
</div>
