<?php
/**
 * The Template for displaying all single posts for documentaries.
 *
 * @package WordPress
 * @subpackage Simpleton
 * @since Twenty Ten 1.0
 * Single Post Template: documentary_posts
 */

get_header(); ?>

		<div id="container" class="documentary_single">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="content_left">
		<?php 
		$args = array(
		'width' => null,
		'height' => null,
		'css' => '',
		'parent_id' => '',
		'post_id' => '',
		'filename' => '',
		'return_html' => true
		);
		echo wp_get_post_image('width=450&css=alignleft&parent_id='.$post->ID);

		?>

		</div>
		<div id="content_right">
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1 class="entry-title"><?php the_title(); ?></h1>

				<div class="entry-content">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'simpleton' ), 'after' => '</div>' ) ); ?>
				</div><!-- .entry-content -->
				
				<?  $kit = get_post_meta($post->ID, 'Press_Kit',true); 
					if($kit):?>
					<div class=doc_meta>
						<h4>Download Press Kit</h4>
						<a href="<? echo $kit; ?>"><? the_title(); ?></a>
					</div>
				<? endif; ?>
				
				<?  
					$meta = get_post_meta($post->ID, 'Link',false);
					//echo '<pre>'.print_r($meta).'</pre>';
					if($meta!=NULL){
						echo '<h4 style="margin-bottom:0">Links</h4>';
						$count = 1;
						foreach($meta as $m){					
							if(sizeof($link = explode(";", $m))>1){ ?>
								<div class=doc_meta>
									<a href="<? echo $link[1]; ?>" target="_blank"><? echo $link[0]; ?></a>
								</div>
							<? }
							else{?>
								<div class=doc_meta>
									<a href="<? echo $m; ?>" target="_blank">Link <? echo $count; ?></a>
								</div>
							<?	 } 
							$count++;
						}
					}
				?>
				
				
				<div class="entry-utility">
					<?php edit_post_link( __( 'Edit', 'simpleton' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .entry-utility -->
			</div><!-- #post-## -->
		</div>
<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
