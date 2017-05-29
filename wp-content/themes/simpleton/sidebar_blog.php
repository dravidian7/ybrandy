<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Simpleton
 * @since Twenty Ten 1.0
 */
?>

		<div id="primary" class="widget-area" role="complementary">
			<ul class="xoxo">

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
		<h2>Previous Blogs</h2>
	
			<?
				$args = array(
					'category_name' => 'blog',
					'showposts' => -1
					); 
				query_posts($args);
				?>
				
				<?php 
				if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div class="blog_post">
					<div><a href="<? the_permalink(); ?>"><?php the_title(); ?></a></div>
					<div class="posted"><span class="">&nbsp;Posted <? the_time('jS F Y'); ?></span></div>
				</div>
				<?php endwhile; ?>			

		<?php endif; // end primary widget area ?>
			</ul>
		<div class="tags">
			<h2>Tags</h2>
				<?php 
				$args = array(
				'smallest'  => 8, 
				'largest'   => 22,
				'unit'      => 'pt', 
				'number'    => 45,  
				'format'    => 'flat',
				'orderby'   => 'name', 
				'order'     => 'ASC',
				'link'      => 'view', 
				'taxonomy'  => 'post_tag', 
				'echo'      => true );
				wp_tag_cloud( $args ); 
				?> 
		</div>
	</div><!-- #primary .widget-area -->

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		

<?php endif; ?>


