<?php
/**
 * Template Name: oil-subjects
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
// bloginfo('template_url')
get_header(); ?>

		<div id="container">
			<div id="content" role="main">
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content">
								<div id="oil_banner"></div>
								<? include "oil_nav.php"; ?>
								<?php the_content(); ?>
                                
								<?php edit_post_link( __( 'Edit', 'simpleton' ), '<span class="edit-link">', '</span>' ); ?>
								<? include "oil_footer.php"; ?>
							</div><!-- .entry-content -->
						</div><!-- #post-## -->
					<?php endwhile; ?>
				</div><!--contentleft-->
				
			</div><!-- #content -->
		</div><!-- #container -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
