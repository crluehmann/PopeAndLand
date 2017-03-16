<?php
/**
 * @package WordPress
 * @subpackage myTheme
 * The template for displaying Search Results pages.
 */
?>
<?php get_header(); ?>
				
					
					
				
	
				<?php if (have_posts()) : ?>
				
					<article id="content">					<div class="submain">						<h2 class="page_title"><?php printf( ( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>'); ?></h2>
					<?php while (have_posts()) : the_post(); ?>
							
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
						
							<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
											
							<div class="postmeta"><?php the_time( get_option( 'date_format' ) ) ?> - Posted in <?php the_category(', ') ?> - <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Permalink</a></div>
							
							<?php if(has_post_thumbnail()){ ?>
							<div class="thumb">
								<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail('thumb-100'); ?>
								</a>
							</div>
							<?php } ?>
							
							<div class="entry">
								<?php the_excerpt(); ?>
							</div>
							<?php wp_link_pages('before=<div class="post-pages">'.__('','myTheme').'&after=</div>&next_or_number=number&pagelink=<span>%</span>');
							?>
					
							<div class="clear"></div>
				
						</div>
				
					<?php endwhile; ?>

					<div class="navigation">
						<?php if(!function_exists('wp_pagenavi') || wp_pagenavi() ): ?>
						<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
						<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
						<?php endif ?>
					</div>					</div>
				</article>
				<?php else : ?>
					<article id="content"><div class="submain">
					<h2 class="center">Not Found</h2>
					<p class="center">Sorry, but you are looking for something that isn't here.</p></div>
					</article>	
				<?php endif; ?>


			<?php //get_sidebar(); ?>

<?php get_footer(); ?>