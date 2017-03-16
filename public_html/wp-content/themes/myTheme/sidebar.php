<?php
/**
 * @package WordPress
 * @subpackage myTheme
 * The template for displaying widget areas.
 */
?>
<div id="sidebar" >
				<ul class="wrap_sidebar">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>
				<?php endif; ?>
				</ul>
		</div>
		<div class="clear"></div>