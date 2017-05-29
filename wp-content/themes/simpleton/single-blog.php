<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Simpleton
 * @since Twenty Ten 1.0
 * Single Post Template: blog
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

<div id="content_left">

<?php 
if ( have_posts() ) while ( have_posts() ) : the_post();   ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?
						if ( has_post_thumbnail() ) {
							// the current post has a thumbnail
							echo '<div>'.the_post_thumbnail().'</div>';
						}
						the_content('<span class="more">more</span>'); ?>
							
						<?php edit_post_link( __( 'Edit', 'simpleton' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->


<?php endwhile;  ?>
<?php //wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div><!--end left-->
<div id="content_right">
	<?php // get_sidebar(); 
	
	include "sidebar_blog.php"; ?>
		
</div>

			</div><!-- #content -->
		</div><!-- #container -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
