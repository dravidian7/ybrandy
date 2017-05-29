<?php
/**
 * Template Name: gg-page-subjects
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
			<div id="content" role="main">
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content grey_glory_content">
								<? include "gg_nav.php"; ?>
                                <h1><?php the_title(); ?></h1>
								<?php the_content(); ?>
								<?php edit_post_link( __( 'Edit', 'simpleton' ), '<span class="edit-link">', '</span>' ); ?>
								<? include "gg_footer.php"; ?>
							</div><!-- .entry-content -->
						</div><!-- #post-## -->
					<?php endwhile; ?>
				</div><!--contentleft-->
				
			</div><!-- #content -->
		</div><!-- #container -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
