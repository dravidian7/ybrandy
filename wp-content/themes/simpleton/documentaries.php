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
 * Template Name: documentaries
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main" class="clearfix">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( is_front_page() ) { ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } else { ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php } ?>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php edit_post_link( __( 'Edit', 'simpleton' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->


<?php endwhile; ?>

<?
$args = array(
	'category_name' => 'documentaries',
	'posts_per_page' => -1,
	'order' => 'desc'
	); 
query_posts($args);
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<h3 class="entry-title"><a href="<? the_permalink();?>"><?php the_title(); ?></a></h3>
                        
						<?php
						$vimeo = get_post_meta( get_the_ID(), 'vimeo_code', true );
						if( $vimeo != '' ) {
							//$hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$vimeo.php"));
							//echo $hash[0]['thumbnail_medium'];
							echo '<img src="" class="img_vimeo" data-vimeo="'.$vimeo.'"  />';
						} elseif ( has_post_thumbnail() ) {
							echo '<a href="'.get_permalink().'">';
							echo the_post_thumbnail('doc-thumb');
							echo '</a>';
						}
						?>
                        

						
							<?php the_excerpt(); ?>
							<?php edit_post_link( __( 'Edit', 'simpleton' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->


<?php endwhile;  ?>


			</div><!-- #content -->
		</div><!-- #container -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
