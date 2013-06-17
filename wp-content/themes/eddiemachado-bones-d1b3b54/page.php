<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


								<section class="entry-content clearfix" itemprop="articleBody">
									
			
									<div class="main">
										<ul id="og-grid" class="og-grid">
											<!-- Load up a thumbnail and full sized image for every grid entry -->
											<?php 
 		
											$rows = get_field('gallery_grid_photo_elements');
											if($rows)
											{
											 
												foreach($rows as $row)
												{
													echo '<li class="grid-element"><a href="#" data-largesrc="' . $row['gallery_large_photo'] .'" ><img src="' . $row['gallery_thumbnail'] . '" /></a> </li>';
												}
											 
											}

											?>
										</ul>

									</div>

							</section> <!-- end article section -->

							</article> <!-- end article -->

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e("This is the error message in the page.php template.", "bonestheme"); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

				<a href="#container" class="back-to-top">Back to top</a>

			</div> <!-- end #content -->

<?php get_footer(); ?>
