<?php
/**
 * Template Name: bmk-home
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
						<div id="bmk_banner"></div>
							<? include "bmk_nav.php"; ?>
							<div id="bmk_content_fr" class="bmk_content">
								<h1>A documentary about how immigration changes and challenges a cowboy town.</h1>
								<h3>Produced, Directed and Written by Brandy Yanchyk</h3>
								<h5>Director of Photography: <span class="name">Jeff Allen</span></h5>
								<h5>Editor: <span class="name">Sarah Taylor</span></h5>
								<h5>Composer: <span class="name">Mark Zagorsky</span></h5>
								<div id="trailers">
									<h2>View Trailers</h2>
									<div class="trailer"><a href="https://vimeo.com/28109255" class="trailer_launch">English</a></div>
									<div class="trailer"><a href="/brooks_trailer_mandarin.html" class="trailer_launch">Mandarin</a></div>
									<div class="trailer"><a href="/brooks_trailer_tagalog.html" class="trailer_launch">Tagalog</a></div>
								</div>
								<div><h2><img src="<? bloginfo('template_url'); ?>/images/bmk_h1_synopsis.png" /></h2></div>
								<p><strong>Brooks - The City of 100 Hellos</strong> explores how immigrants, refugees and temporary foreign workers from the local meat packing plant are changing and challenging the western cowboy city of Brooks, Alberta, Canada. It also explores the city's 100 year history as it celebrates its centennial anniversary.</p>
                                <h5>Brooks - The City of 100 Hellos" has been featured in these film festivals: </h5>
                                <ul>
                                	<li>Winnipeg Real to Reel Film Festival 2012 </li>
                                    <li>George Lindsey UNA Film Festival 2012 </li>
                                    <li>Ghangzhou International Film Festival 2012 </li>
                                    <li>Lucerne International Film Festival Showcase 2011 </li>
                                    <li>Commffest Global Community Festival 2011</li>
                                </ul>
                                <h5>Brooks - The City of 100 Hellos" has been the winner of the following awards: </h5>
                                <ul>
                                    <li>2012 Royal Reel Award for the Documentary Competition at The Canada 
                                    <li>International Film Festival in Vancouver </li>
                                    <li>Honorable Mention Award: Best Documentary under 60 minutes at the 2011 </li>
                                    <li>Commffest Global Community Festival in Toronto </li>
                                    <li>Honorable Mention Award: Humanitarian Approach at the 8th annual Montana </li>
                                    <li>CINE International Film Festival</li>
								</ul>
							</div>
							<? include "bmk_footer.php"; ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->


<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
