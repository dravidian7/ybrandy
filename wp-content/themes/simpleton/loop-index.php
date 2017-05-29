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
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main" class="clearfix">
				<div id="content_left">
					<div id="slider">
						<?
							query_posts('p=62');
								if ( have_posts() ) while ( have_posts() ) : the_post(); 
								the_content();
								endwhile;
						?>
					</div> <!--end slider-->
				</div> <!--end left-->
				<div id="content_right">
				<?
				$args = array(
					'category_name' => 'welcome',
					'showposts' => 1
					); 
				query_posts($args);
				?>
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					
									<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<div class="entry-content">
											<?php the_content(); ?>
											<?php edit_post_link( __( 'Edit', 'simpleton' ), '<span class="edit-link">', '</span>' ); ?>
										</div><!-- .entry-content -->
									</div><!-- #post-## -->
					
					
					<?php endwhile; ?>
				</div><!--end right-->
			</div><!-- #content -->
		</div><!-- #container -->

<?php // get_sidebar(); ?>
<?php //get_footer(); ?>
