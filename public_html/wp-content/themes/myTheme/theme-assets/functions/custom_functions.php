<?php 
	register_post_type( 'slider', array(
		'label' => __('Slider'),
		'public' => true,
		'show_ui' => true,
		'_builtin' => false, // It's a custom post type, not built in
		'_edit_link' => 'post.php?post=%d',
		'capability_type' => 'post',
		'hierarchical' => false,
		'orderby' => 'menu_order',
		'rewrite' => array("slug" => "slider"), // Permalinks
		'query_var' => "slider",
		'menu_icon'=>get_bloginfo('template_directory').'/images/icon_slideshow.png',
		'menu_position' => 28,
		'supports' => array('title',  'editor', 'thumbnail' ,'page-attributes'),
	));

		flush_rewrite_rules( false );
}
add_action( 'after_setup_theme', 'my_theme_setup' );
function my_theme_setup() {
	add_image_size( 'edit-screen-thumbnail', 100, 100, true );
}
add_filter( 'manage_edit-slider_columns', 'my_columns_filter', 10, 2 );
function my_columns_filter( $columns ) {
 	$column_thumbnail = array( 'thumbnail' => 'Thumbnail' );
	//$column_wordcount = array( 'wordcount' => 'Word count' );
	$columns = array_slice( $columns, 0, 2, true ) + $column_thumbnail + array_slice( $columns, 1, NULL, true );
	//$columns = array_slice( $columns, 0, 3, true ) + $column_wordcount + array_slice( $columns, 3, NULL, true );
	return $columns;
}

add_action( 'manage_posts_custom_column', 'my_column_action', 10, 1 );
function my_column_action( $column ) {
	global $post;
	switch ( $column ) {
		case 'thumbnail':
			echo get_the_post_thumbnail( $post->ID, 'edit-screen-thumbnail' );
			break;
		//case 'wordcount':
			//echo str_word_count( $post->post_content );
			//break;
	}
}
	
function truncate_post($amount, $quote_after = false, $readmore=true) {
    $truncate = get_the_content ();
    $truncate = apply_filters('the_content', $truncate);
    $truncate = preg_replace('@<script[^>]*?>.*?</script>@si', '', $truncate);
    $truncate = preg_replace('@<style[^>]*?>.*?</style>@si', '', $truncate);
    $truncate = strip_tags($truncate);
    $truncate = substr($truncate, 0, strrpos(substr($truncate, 0, $amount), ' '));
    echo $truncate.'...';
	if($readmore==true) {
    echo "<a class='clearfix read-more' href='".get_permalink()."'>Read more.</a>";
	}
    if ($quote_after)
        echo ('"');
}


  function ds_get_ao($the_value) { //Get the value of an admin option
        global $ds_theme_key;
        $the_value_raw = get_option($ds_theme_key . $the_value);

        return $the_value_raw;
    }

    function ds_ao($the_value) { //Print the value of an admin option
        global $ds_theme_key;
        $the_value_raw = get_option($ds_theme_key . $the_value);

        echo $the_value_raw;
    }
	
function ds_get_cf($the_meta_key) { //Get post custom field

	global $post, $ds_custom_field_key;
	
	$raw_meta_key = get_post_meta( $post->ID, $ds_custom_field_key . $the_meta_key . '_value', true );

	return $raw_meta_key;

}

function ds_cf($the_meta_key) { //Print post custom field

	global $post, $ds_custom_field_key;
	
	$raw_meta_key = get_post_meta( $post->ID, $ds_custom_field_key . $the_meta_key . '_value', true );
	
	if ( $the_meta_key == 'price' ) :
	
		echo number_format($raw_meta_key, 0);
	
	else :
	
		echo $raw_meta_key;
	
	endif;

}


  function ds_timthumb_image_url($the_url, $the_width=500, $the_height=250, $the_alt='', $default='/images/default_empty_image_featured.jpg', $the_class='', $no_def = 0) { //Timthumb function
        if (!$the_url) :

            if ($no_def) :

                return false;

            else :

                return get_bloginfo('template_url') . '/theme-assets/php/timthumb.php?src=' . get_bloginfo('template_url') . $default . '&amp;h=' . $the_height . '&amp;w=' . $the_width;

            endif;

        else :

            global $blog_id;

            // is it wp3 multisite?

            if (isset($blog_id) && $blog_id > 0) :

                $url_parts = explode('/files/', $the_url);
                if (isset($url_parts[1])) {
                    $the_url = '/blogs.dir/' . $blog_id . '/files/' . $url_parts[1];
                }

                return get_bloginfo('template_url') . '/theme-assets/php/timthumb.php?src=' . $the_url . '&amp;h=' . $the_height . '&amp;w=' . $the_width;


            else:

                return get_bloginfo('template_url') . '/theme-assets/php/timthumb.php?src=' . $the_url . '&amp;h=' . $the_height . '&amp;w=' . $the_width;

            endif;

        endif;
    }



function ds_timthumb_image( $the_url, $the_width=500, $the_height=250, $the_alt='', $default='/images/default_empty_image_featured.jpg', $the_class='', $no_def = 0 ) { //Timthumb function
	
	if ( !$the_url ) :
	
		if ( $no_def ) :
	
			return false;
		
		else :
		
			echo '<img alt="' . $the_alt . '" src="' . get_bloginfo('template_url') . '/theme-assets/php/timthumb.php?src=' . get_bloginfo('template_url') . $default . '&amp;h=' . $the_height . '&amp;w=' . $the_width . '"  class="' . $the_class . '" width="' . $the_width . '" height="' . $the_height . '" />';
		
		endif;

	else :
	
		global $blog_id;
		
		// is it wp3 multisite?
		
		if (isset($blog_id) && $blog_id > 0) :
		
			$url_parts = explode('/files/', $the_url);
			if (isset($url_parts[1])) {
				$the_url = '/blogs.dir/' . $blog_id . '/files/' . $url_parts[1];
			}

			echo '<img alt="' . $the_alt . '"  src="' . get_bloginfo('template_url') . '/theme-assets/php/timthumb.php?src=' . $the_url . '&amp;h=' . $the_height . '&amp;w=' . $the_width . '"  class="' . $the_class . '"  width="' . $the_width . '" height="' . $the_height . '" />';


            else:

                echo '<img alt="' . $the_alt . '"  src="' . get_bloginfo('template_url') . '/theme-assets/php/timthumb.php?src=' . $the_url . '&amp;h=' . $the_height . '&amp;w=' . $the_width . '"  class="' . $the_class . '"  width="' . $the_width . '" height="' . $the_height . '" />';

            endif;

        endif;
    }
class My_Walker extends Walker_Nav_Menu
?>