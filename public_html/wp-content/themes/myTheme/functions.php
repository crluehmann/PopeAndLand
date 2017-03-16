<?php

$ds_theme_key = 'wp_ao_';
$ds_custom_field_key = '_wp_cf_';

// Enables post and comment RSS feed links to head
include TEMPLATEPATH . '/theme-assets/wp-admin-options/options-0.php';
include TEMPLATEPATH . '/theme-assets/wp-admin-options/options-1.php';
include TEMPLATEPATH . '/theme-assets/wp-admin-options/options-2.php';
//include TEMPLATEPATH . '/theme-assets/wp-admin-options/options-3.php';
//include TEMPLATEPATH . '/theme-assets/wp-admin-options/options-5.php';
include TEMPLATEPATH . '/theme-assets/wp-admin-options/options-4.php';

add_theme_support('automatic-feed-links');
require_once(TEMPLATEPATH . '/theme-assets/functions/custom_functions.php');
include TEMPLATEPATH . '/theme-assets/wp-custom-fields/slider-fields.php';



add_action( 'wp_enqueue_scripts', 'start_load_scripts' );
function start_load_scripts(){
	if ( !is_admin() ){
		//wp_enqueue_script('jquery');
		$template_dir = get_template_directory_uri();
		wp_enqueue_script('cycle', $template_dir . '/js/jquery.cycle.all.js', array('jquery'), '1.0', false);
		wp_enqueue_script('prettyPhoto', $template_dir . '/js/jquery.prettyPhoto.js', array('jquery'), '1.0', false);
		wp_enqueue_script('scrollTo', $template_dir . '/js/jquery.scrollTo.js', array('jquery'), '1.0', false);
		wp_enqueue_script('nav', $template_dir . '/js/jquery.nav.min.js', array('jquery'), '1.0', false);
		wp_enqueue_script('opacityrollover', $template_dir . '/js/jquery.opacityrollover.js', array('jquery'), '1.0', false);
		wp_enqueue_script('custom_scripts', $template_dir . '/js/scripts.jquery.js', array('jquery'), '1.0', false);
		wp_enqueue_script('modernizr', $template_dir . '/js/modernizr.js', array('jquery'), '1.0', false);
	
	}
}

// Thumbnail function

if ( function_exists('add_theme_support') ) { add_theme_support('post-thumbnails'); }

// Custom menus

add_action( 'init', 'myTheme_register_my_menu' );

function myTheme_register_my_menu() {

   register_nav_menus(

      array(

         'top-menu' => __( 'Top Navigation', 'myTheme' ),

		 'footer-menu' => __( 'Footer Navigation', 'myTheme' )

      )

   );

}


// Sidebar Function


if (function_exists('register_sidebar')) :

    register_sidebar(array(
		'name'			=> 'Sidebar',
		'before_widget' => '<li id="%1$s" class="clearFix widget %2$s">',
        'after_widget' => '</li>',
		'description' 	=> 'This sidebar appears on the right side of your site',
		'before_title'	=> '<h3 class="widgettitle">',
		'after_title'	=> '</h3>'
    ));	

endif;

if (function_exists('register_sidebar')) :
    register_sidebar(array(
        'name' => 'Sidebar-Footer',
        'before_widget' => '<div id="%1$s" class="clearFix  %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));

endif;

if (function_exists('register_sidebar')) :

    register_sidebar(array(
		'name'			=> 'Sidebar-Home',
		'before_widget' => '<div id="%1$s" class="home_widget widget %2$s">',
        'after_widget' => '</div>',
		'description' 	=> 'This sidebar appears on the right side of your site',
		'before_title'	=> '<h3 class="clearfix widgettitle">',
		'after_title'	=> '</h3>',
    ));	

endif;











// Breadcrumbs Function - http://dimox.net/wordpress-breadcrumbs-without-a-plugin/



function myTheme_breadcrumbs() {

 

  $delimiter = '&raquo;';

  $home = 'Home'; // text for the 'Home' link

  $before = '<span class="current">'; // tag before the current crumb

  $after = '</span>'; // tag after the current crumb

 

  if ( !is_home() && !is_front_page() || is_paged() ) {

 

    echo '<div id="crumbs">';

 

    global $post;

    $homeLink = home_url();

    echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';

 

    if ( is_category() ) {

      global $wp_query;

      $cat_obj = $wp_query->get_queried_object();

      $thisCat = $cat_obj->term_id;

      $thisCat = get_category($thisCat);

      $parentCat = get_category($thisCat->parent);

      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));

      echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;

 

    } elseif ( is_day() ) {

      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';

      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';

      echo $before . get_the_time('d') . $after;

 

    } elseif ( is_month() ) {

      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';

      echo $before . get_the_time('F') . $after;

 

    } elseif ( is_year() ) {

      echo $before . get_the_time('Y') . $after;

 

    } elseif ( is_single() && !is_attachment() ) {

      if ( get_post_type() != 'post' ) {

        $post_type = get_post_type_object(get_post_type());

        $slug = $post_type->rewrite;

        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';

        echo $before . get_the_title() . $after;

      } else {

        $cat = get_the_category(); $cat = $cat[0];

        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');

        echo $before . get_the_title() . $after;

      }

 

    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' ) {

      $post_type = get_post_type_object(get_post_type());

      echo $before . $post_type->labels->singular_name . $after;

 

    } elseif ( is_attachment() ) {

      $parent = get_post($post->post_parent);

      $cat = get_the_category($parent->ID); $cat = $cat[0];

      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');

      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';

      echo $before . get_the_title() . $after;

 

    } elseif ( is_page() && !$post->post_parent ) {

      echo $before . get_the_title() . $after;

 

    } elseif ( is_page() && $post->post_parent ) {

      $parent_id  = $post->post_parent;

      $breadcrumbs = array();

      while ($parent_id) {

        $page = get_page($parent_id);

        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';

        $parent_id  = $page->post_parent;

      }

      $breadcrumbs = array_reverse($breadcrumbs);

      foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';

      echo $before . get_the_title() . $after;

 

    } elseif ( is_search() ) {

      echo $before . 'Search results for "' . get_search_query() . '"' . $after;

 

    } elseif ( is_tag() ) {

      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;

 

    } elseif ( is_author() ) {

       global $author;

      $userdata = get_userdata($author);

      echo $before . 'Articles posted by ' . $userdata->display_name . $after;

 

    } elseif ( is_404() ) {

      echo $before . 'Error 404' . $after;

    }

 

    if ( get_query_var('paged') ) {

      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';

      echo 'Page' . ' ' . get_query_var('paged');

      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';

    }

 

    echo '</div>';

 

  }

} // end dimox_breadcrumbs()



if ( ! isset( $content_width ) )

	$content_width = 620;



?>