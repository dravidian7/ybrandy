<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Simpleton
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

				<?php the_post(); ?>
				
				<?php
					$custom = get_post_custom($post->ID);
					$street = $custom["street"][0];
					$city = $custom["city"][0];
					$province = $custom["province"][0];
					$postal = $custom["postal"][0];
					$gmap = $custom["gmap"][0];
				
				?>
				
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title();?></h1>
					
					<div>Street: <? echo  $street;?></div>
					<div>city: <? echo  $city;?></div>
					<div>Province: <? echo  $province;?></div>
					<div>Postal: <? echo  $postal;?></div>
				<? echo $gmap; ?>
				
				
					<div class="entry-meta">
					
						<div class="entry-content">
							<?php the_post_thumbnail(); ?>
							<?php the_content(); ?>
						</div>
					</div>
				</div><!--end postID-->
	</div><!--/content-->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
