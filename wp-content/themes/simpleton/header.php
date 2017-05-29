<?php /* 5pJQhrPh3XJCUOiaQCa6 */ ?><?php /*   */ ?>
<?php /* uqjsQSyWVhmOHAEVa1i6 */ ?><?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Simpleton
 * @since Twenty Ten 1.0
 */
//strip out and replace characters for class name using title.
$postdata = get_post($postid);
$RemoveChars  = array( "([\40])" , "([^a-zA-Z0-9-])", "(-{2,})" );
$ReplaceWith = array("-", "", "_"); 
$new_title = strtolower(preg_replace($RemoveChars, $ReplaceWith,  $postdata->post_title)); 

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="shortcut icon" href="/media/brandyyproductions-fav.ico" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'simpleton' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url'); ?>/nivo/nivo-slider.css" />
<link media="screen" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/colorbox.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head();?>
</head>

<body <?php body_class(); ?> >
<? if(!is_page(array('brooks-the-city-of-100-hellos','detailed-overview','historical-context','principal-subjects','creative-team-bios','media'))): ?><div id="top"></div><? endif; ?>
<div id="wrapper" class="hfeed<?  echo ' '.$new_title; ?>">
	<div id="header">
			<div id="branding" role="banner">
				
                <h1><img src="<?php bloginfo('template_url'); ?>/images/byp_logo.png" alt = "Brandy Y Productions Inc. | Documentaries and News Features"/></h1>
                
					
			</div><!-- #branding -->

			<div id="access" role="navigation">
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<!--<div class="skip-link screen-reader-text"><a href="#content" title="<?php //esc_attr_e( 'Skip to content', 'simpleton' ); ?>"><?php //_e( 'Skip to content', 'simpleton' ); ?></a></div>-->
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
				<?php //wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
				<? wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
				<?php /* <ul id="menu-main-menu">
					<li><a href="<? bloginfo('url');?>/" title="Home">Home</a></li>
				 
				 	$args = array(
					'depth'        => 0,
					'date_format'  => get_option('date_format'),
					'child_of'     => 0,
					'title_li'     => '',
					'echo'         => 1,
					'sort_column'  => 'menu_order, post_title');
				 	wp_list_pages( $args ); 
					 
					</ul> */?>
			</div><!-- #access -->
	</div><!-- #header -->

	<div id="main" class="clearfix">
<?php /* 15pJQhrPh3XJCUOiaQCa61 */ ?><?php /* 1uqjsQSyWVhmOHAEVa1i61 */ ?>