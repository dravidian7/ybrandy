<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Simpleton
 * @since Twenty Ten 1.0
 * Template Name: blog
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main" class="clearfix">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); $title=get_the_title($post->ID) ; endwhile; ?>

<div id="content_left">
<h1><? echo $title; ?></h1>
<?
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
	'category_name' => 'blog',
	'paged' => $paged,
	'posts_per_page' => 2,
	); 
query_posts($args);
?>

<?php 
global $more;
if ( have_posts() ) while ( have_posts() ) : the_post();  $more = 0; ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<h3 class="entry-title"><a href="<? the_permalink();?>"><?php the_title(); ?></a></h3>
						<?
						if ( has_post_thumbnail() ) {
							// the current post has a thumbnail
							echo '<div>'.the_post_thumbnail().'</div>';
						}
						the_content('<span class="more">... More</span>'); ?>
						
						<div><?php the_tags('Tags: ', ', ', '<br />'); ?> </div>
							
						<?php edit_post_link( __( 'Edit', 'simpleton' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->


<?php endwhile;  ?>
<? kriesi_pagination();?>
<?php //wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div><!--end left-->
<div id="content_right">
	<?php // get_sidebar(); 
	
	include "sidebar_blog.php"; ?>
		
</div>
			</div><!-- #content -->
		</div><!-- #container -->


<?php get_footer(); ?>
