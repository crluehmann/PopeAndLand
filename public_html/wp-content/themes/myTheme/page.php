<?php
/**
 * @package WordPress
 * @subpackage myTheme
 * The template for displaying all pages.
 */
?>
<?php get_header(); ?>
				

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<article class="clearfix" id="content">
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<?php //if (function_exists('myTheme_breadcrumbs')) myTheme_breadcrumbs(); ?>
					
					
						<div class="entry">
							<?php the_content(); ?>
							<?php //edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
						
					</div>
					</div>
					<?php //comments_template(); ?>
					
				  <?php endwhile; ?>
				  </article>
				  <?php endif; ?>
				  
				

			<?php //get_sidebar(); ?>
			
<?php get_footer(); ?>