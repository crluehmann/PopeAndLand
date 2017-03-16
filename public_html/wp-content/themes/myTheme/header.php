<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width" />

<title><?php if (is_home () ) { bloginfo('name'); echo ' - ' ; bloginfo('description');}
elseif ( is_category() ) { single_cat_title(); echo ' - ' ; bloginfo('name');}
elseif (is_single() ) { single_post_title(); echo ' - ' ; bloginfo('name');}
elseif (is_page() ) { single_post_title(); echo ' - ' ; bloginfo('name');}
else { wp_title('',true); } ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/print.css" type="text/css" media="print" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/prettyPhoto.css" media="screen" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<meta content="<?php bloginfo('template_url'); ?>" name="the_uri" />	
		
<?php if ( is_singular() && get_option( 'thread_comments' ) )
wp_enqueue_script( 'comment-reply' ); 
wp_head(); 
global $list_pages;
$list_pages=array();

?>


</head>

<body <?php if (function_exists('body_class') ) body_class(); ?>>
	<div id="wrapper" class="full_width">
		<header id="header" role="banner" class="full_width">
			<div class="main">
			<div  id="main_header" class="full_width">
				<h1 id="logo">
								<a  href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
				</h1>
				<nav id="top_menu_mobile" class="full_width center mobile_version" role="navigation">
					<?php
					dropdown_menu( array(
						'theme_location' => 'top-menu', 'menu_class' => 'navs', 'menu_id' => 'page-nav',
					'dropdown_title' => '-- Main Menu --',
						'indent_string' => '- '
					) );
					?>	
				</nav>  
				
				<nav id="top_menu" class="none_mobile" role="navigation">
							
							<?php 
							$walker = new My_Walker();
							$pagesNav = '';
							if (function_exists('wp_nav_menu')) {
								$pagesNav = wp_nav_menu( array( 'theme_location' => 'top-menu', 'menu_class' => 'nav', 'menu_id' => 'page-nav', 'echo' => false,'walker' => $walker, 'fallback_cb' => '' ) );};
							if ($pagesNav == '') { ?>
							<ul class="nav">
								<?php if ( is_home() ) { ?>
									<li class="first"><a href="<?php echo home_url(); ?>">Home</a></li>
								<?php } else { ?>
									<li><a href="<?php echo home_url(); ?>">Home</a></li>
								<?php } ?>
								<?php wp_list_pages('title_li='); ?>
							</ul>
							<?php }
							else echo($pagesNav); 
							?>		
						
				</nav>
			</div>
</div>				
			
		
		</header>
			
			
		<div id="container" class="full_width">
		<!--
			<div class="scollcontrolpossition none_mobile">
				<div class="main">
					<a id="next" class="scrollcontrols fl_left scnext" href="javascript:void(0);">next</a>
					<a id="prev" class="scrollcontrols fl_right scprev" href="javascript:void(0);">prev</a>
				</div>
			</div>
			-->
			<div class="inmain main">
						
							
						