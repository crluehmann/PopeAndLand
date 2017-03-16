<?php
/**
 * @package WordPress
 * @subpackage myTheme
 * The Template for displaying all single posts.
 */
?>
<?php get_header(); ?>
				
					
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<article id="content">				<div class="submain">					<h2 class="page_title"><?php the_title(); ?></h2>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<?php //if (function_exists('myTheme_breadcrumbs')) myTheme_breadcrumbs(); ?>
					
						
						
						<div class="postmeta"><?php the_time( get_option( 'date_format' ) ) ?> - Posted in <?php the_category(', ') ?> <?php edit_post_link(__('- Edit Post','myTheme'), '', ''); ?></div>
						
						<?php $ads_single_top = $options['single-ads-top']; ?>
						<?php if ($ads_single_top != ""){?>
						<div class="ads-2">
							<?php echo stripslashes($ads_single_top); ?>
						</div>
						<?php } ?>
						
						<div class="entry">
							<?php the_content(); ?>
							
						<?php $ads_single_bottom = $options['single-ads-bottom']; ?>
						<?php if ($ads_single_bottom != ""){?>
						<div class="ads-3">
							<?php echo stripslashes($ads_single_bottom); ?>
						</div>
						<?php } ?>
							
						</div>
						<?php wp_link_pages('before=<div class="post-pages">'.__('','myTheme').'&after=</div>&next_or_number=number&pagelink=<span>%</span>');
						?>
						
						<div class="clear"></div>
					
						<p class="postmetadata"><?php the_tags(__('Tags:','myTheme').' ', ', ', '');?></p>
						
					</div>
					
					<div class="post-nav">
					<?php previous_post_link('<div class="alignleft">&laquo; %link</div>'); ?>
					<?php next_post_link('<div class="alignright">%link &raquo;</div>'); ?>
					</div>	
					
				<?php comments_template(); ?>
				
				<?php endwhile;?>				</div>
				</article>

				<?php else: ?>
				<article id="content"><div class="submain">
					<h2 class="center">Not Found</h2>
					<p class="center">Sorry, but you are looking for something that isn't here.</p></div>
				</article>
			<?php endif; ?>
				
				
				
			<?php //get_sidebar(); ?>

<?php get_footer(); ?>
