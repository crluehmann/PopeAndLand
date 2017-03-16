<?php
/**
 * @package WordPress
 * @subpackage myTheme
 * The template for displaying search form.
 */
?>
<div id="search">
	<form method="get" id="searchform" action="<?php echo home_url(); ?>">
		<div class="fl_left wrap_input"><input type="text" class="field" name="s" id="searchh"  value="Search in this site..." onfocus="if (this.value == 'Search in this site...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search in this site...';}" /></div>
		<input class="submit btn" type="image" src="<?php echo get_template_directory_uri(); ?>/images/icon_search.png" value="Go" />
	</form>
</div>