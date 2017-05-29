<?php
/**
 * Template Name: fer-home
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Simpleton
 * @since Twenty Ten 1.0
 */

get_header();?>
<link href="<?php echo get_template_directory_uri() ?>/fer.css" rel="stylesheet" type="text/css">

		<div id="container" class="one-column" style="position:relative">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content fer">
                        <div class="navbar">
                            <nav> 
                            <a href="#top">home</a>  |  <a href="#overview">detailed overview</a>  | <a href="#characters">characters </a> | <a href="#crew">crew bios</a> 
                            </nav>
                        </div>
                        <? the_content(); ?>
						<footer>
							<div class="footertext">&copy; 2015 BRANDY Y PRODUCTIONS INC.</div> 
						</footer>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->
<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->


<?php get_footer(); ?>
