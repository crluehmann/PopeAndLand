<?php get_header(); 
global $list_pages;
?>

	<article id="content" class="fullwidth">
		<div id="section-<?php echo $list_pages[0]; ?>" class="first section full_width">
		<?php
			//print_r($list_pages);
			if (( is_home())||(is_front_page() )) {
				 include TEMPLATEPATH . '/includes/slider.php';
			}
			?>
			<div class="full_width" id="services_box"><?php include TEMPLATEPATH . '/includes/icons_section.php'; ?></div>
		</div>
		<?php 
		$detect = new Mobile_Detect();
			if ((!$detect->isMobile())) {
			
		for($i=0;$i<=count($list_pages);$i++) {
			if($i>0) {?>
				<div id="section-<?php echo $list_pages[$i]; ?>" class="none_mobile section full_width">
					<?php 
					$args = array('post_type' => 'page',
					'post__in' => array($list_pages[$i]),
					'showposts' => 1);
					$feature_banner = new WP_Query();								
					$feature_banner->query($args);
				

					if ( $feature_banner->have_posts() ) : while ( $feature_banner->have_posts() ) : $feature_banner->the_post(); ?>
					<div class="thumb">

								<?php the_post_thumbnail(''); ?>

					</div>
					<div class="submain">
					<h2 class="page_title"><?php the_title(); ?></h2>
					<?php the_content(); ?>
					</div>

<?php endwhile;endif; ?>
				</div>
			<?php }
			
		}
		}
		?>
		
	</article>



<?php get_footer(); ?>
