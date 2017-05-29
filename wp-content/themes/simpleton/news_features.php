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
 * Template Name: news_features
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main" class="news_feature_list clearfix">

<?php /*if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

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


<?php endwhile; */?>

<div class="first news_col">
<?
$args = array(
	'category_name' => 'television',
	'posts_per_page' => -1,
	); 
query_posts($args);
echo '<h2>Television</h2>';
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h5><?php the_time('jS F Y') ?> - <? echo get_post_meta($post->ID, 'date_info',true); ?></h5>
			<h4 class="entry-title"><?php the_title(); ?></h4>
			<div class="entry-content">
				<?php the_content(); ?>
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
								<a href="<? echo $meta; ?>" target="_blank">Link</a>
							</div>
						<?	 } 
					}
				?>
				<?php edit_post_link( __( 'Edit', 'simpleton' ), '<span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-content -->
	</div><!-- #post-## -->
<?php endwhile;  ?>
</div>
<div class="second news_col">
<?
$args = array(
	'category_name' => 'radio',
	'posts_per_page' => -1,
	); 
query_posts($args);
echo '<h2>Radio</h2>';
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h5><?php the_time('jS F Y') ?> - <? echo get_post_meta($post->ID, 'date_info',true); ?></h5>
			<h4 class="entry-title"><?php the_title(); ?></h4>
			<div class="entry-content">
				<?php the_content(); ?>
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
								<a href="<? echo $meta; ?>" target="_blank">Link</a>
							</div>
						<?	 } 
					}
				?>
				<?php edit_post_link( __( 'Edit', 'simpleton' ), '<span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-content -->
	</div><!-- #post-## -->
<?php endwhile;  ?>
</div>
<div class="third news_col">
<?
$args = array(
	'category_name' => 'online',
	'posts_per_page' => -1,
	); 
query_posts($args);
echo '<h2>Online</h2>';
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h5><?php the_time('jS F Y') ?> - <? echo get_post_meta($post->ID, 'date_info',true); ?></h5>
			<h4 class="entry-title"><?php the_title(); ?></h4>
			<div class="entry-content">
				<?php the_content(); ?>
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
								<a href="<? echo $meta; ?>" target="_blank">Link</a>
							</div>
						<?	 } 
					}
				?>
				<?php edit_post_link( __( 'Edit', 'simpleton' ), '<span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-content -->
	</div><!-- #post-## -->
<?php endwhile;  ?>
</div>

			</div><!-- #content -->
		</div><!-- #container -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
