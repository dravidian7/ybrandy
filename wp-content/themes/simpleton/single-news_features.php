<?php
/**
 * The Template for displaying all single posts for documentaries.
 *
 * @package WordPress
 * @subpackage Simpleton
 * @since Twenty Ten 1.0
 * Single Post Template: news_features
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1 class="entry-title"><?php the_title(); ?></h1>

				<div class="entry-content">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'simpleton' ), 'after' => '</div>' ) ); ?>
				</div><!-- .entry-content -->
				
				<?  
					$meta = get_post_meta($post->ID, 'Link',true);
					if($meta!=NULL){
						if(sizeof($link = explode(";", $meta))>1){ ?>
							<div class=doc_meta>
								<h4>Links</h4>
								<a href="<? echo $link[1]; ?>" target="_blank"><? echo $link[0]; ?></a>
							</div>
						<? }
						else{?>
							<div class=doc_meta>
								<a href="<? echo $meta; ?>" target="_blank" class="link">Link</a>
							</div>
						<?	 } 
					}
				?>
				
				
				<div class="entry-utility">
					<?php edit_post_link( __( 'Edit', 'simpleton' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .entry-utility -->
			</div><!-- #post-## -->
<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
