<?php
/**
 * @package WordPress
 * @subpackage myTheme
 * The template for displaying 404 pages (Not Found).
 */
?>
<?php get_header(); ?>
	<article id="content"><div class="submain">

		<h2>Error 404 - Not Found</h2>
		<p>It seems we can't find what you're looking for. Perhaps searching, or one of the links below, can help.</p>
		
		<?php get_search_form(); ?>
		
		<div class="clear"></div>
		
		<h2>Last 20 posts:</h2>
			<ul>
				<?php $archive_query = new WP_Query('showposts=20');
					while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
				<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>
	
		<h2>Most Used Categories:</h2>
			<ul>
				<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
			</ul>
		</div>
	</article>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>