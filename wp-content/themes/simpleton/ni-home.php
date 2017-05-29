<?php
/**
 * Template Name: ni-home
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

get_header(); ?>

		<div id="container" class="one-column">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<div id="ni_banner"></div>
							<? include "ni_nav.php"; ?>
							<div id="ni_content_fr" class="ni_content">
								<h1>A documentary about Canada's quest to get new immigrants in touch with nature.</h1>
								<h3>Produced, Directed and Written by Brandy Yanchyk</h3>
								<h5>Director of Photography: <span class="name">Jeff Allen</span></h5>
								<h5>Editor: <span class="name">Sarah Taylor</span></h5>
								<h5>Composer: <span class="name">Mark Zagorsky</span></h5>
								<div id="trailers">
									<h2>View Trailers</h2>
									<div class="trailer"><a href="http://vimeo.com/37314173" target="_blank" title="Nature's Invitation Trailer">English</a></div>
									<!--<div class="trailer"><a href="#" class="trailer_launch">Mandarin</a></div>
									<div class="trailer"><a href="#" class="trailer_launch">Tagalog</a></div>-->
								</div>
								<div><h2>Synopsis</h2></div>
								<p><strong>Nature's Invitation</strong> is a documentary about Canada's quest to get new immigrants in touch with nature. It also explores the consequences of of a life devoid of nature.</p>
                                
							</div>
                            <div class="ni_footer_item">
                                <div><strong>Languages</strong>:</div>
                                <div>English<!--, Mandarin &amp; Tagalog--></div>
                                <div><strong>Running Time</strong>:</div>
                                <div>46:30 minutes</div>
                            </div>
							<? include "ni_footer.php"; ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->


<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
