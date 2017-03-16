<?php
/**
 * @package WordPress
 * @subpackage myTheme
 * The template for displaying all pages.
 */
?>
<?php get_header(); ?>
				

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<article class="clearfix" id="content">				<div class="thumb">								<?php the_post_thumbnail(''); ?>					</div>					<div class="submain">					<h2 class="page_title"><?php the_title(); ?></h2>
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