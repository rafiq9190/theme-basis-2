<?php get_header(); ?>

<?php dynamic_sidebar('home-banner'); ?>
<?php dynamic_sidebar('home-services'); ?>
		<!-- Intro -->
		
		<section id="main">
			<div class="container">
				<div class="row">
					<div class="col-12">

						<!-- Portfolio -->
						<section>
							<header class="major">
								<h2>My Portfolio</h2>
							</header>
							<div class="row">
								<?php
								$project_args=array(
									'post_type' => 'project',
									'posts_per_page' => 6
								);
								$project_posts = new WP_Query($project_args);
								if ($project_posts->have_posts()) {
									while ($project_posts->have_posts()) {
										$project_posts->the_post();

								?>
								<div class="col-4 col-6-medium col-12-small">
									<section class="box">
										<a href="<?php the_permalink(); ?>" class="image featured"><img src="<?php the_post_thumbnail_url('featured-image'); ?>" alt="" /></a>
										<header>
											<h3><?php the_title(); ?></h3>
										</header>
										<?php the_excerpt(); ?>
										<footer>
											<ul class="actions">
												<li><a href="<?php the_permalink(); ?>" class="button alt">Find out more</a></li>
											</ul>
										</footer>
									</section>
								</div>
								<?php
									}
									wp_reset_postdata();
								} else {
									echo '<p>No posts found.</p>';
								}
								?>
								
							</div>
						</section>

					</div>
					<div class="col-12">

						<!-- Blog -->
						<section>
							<header class="major">
								<h2>The Blog</h2>
							</header>
							<div class="row">
								<?php
								$blog_args = array(
									'post_type' => 'post',
									'posts_per_page' => 2
								);
								$blog_posts = new WP_Query($blog_args);
								if ($blog_posts->have_posts()) {
									while ($blog_posts->have_posts()) {
										$blog_posts->the_post();
								?>
								<div class="col-6 col-12-small">
									<section class="box">
										<a href="<?php the_permalink(); ?>" class="image featured">
											<?php if (has_post_thumbnail()) {
												the_post_thumbnail('featured-image');
											} else { ?>
												<img src="images/pic08.jpg" alt="" />
											<?php } ?>
										</a>
										<header>
											<h3><?php the_title(); ?></h3>
											<p>Posted <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></p>
										</header>
										<p><?php the_excerpt(); ?></p>
										<footer>
											<ul class="actions">
												<li><a href="<?php the_permalink(); ?>" class="button icon solid fa-file-alt">Continue Reading</a></li>
												<li><a href="<?php comments_link(); ?>" class="button alt icon solid fa-comment"><?php comments_number('0 comments', '1 comment', '% comments'); ?></a></li>
											</ul>
										</footer>
									</section>
								</div>
								<?php
									}
									wp_reset_postdata();
								} else {
									echo '<p>No posts found.</p>';
								}
								?>
						</section>

					</div>
				</div>
			</div>
		</section>
        <?php get_footer(); ?>