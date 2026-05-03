<?php get_header(); ?>
<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-8 col-12-medium">
                                <?php 
                                if(have_posts()){
                                    while(have_posts()){
                                        the_post();
                                        ?>
                    <!-- Content -->
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
                                 <?php }
                                    }
                                 ?>

							</div>
							<?php get_sidebar(); ?>
						</div>
					</div>
				</section>
                 <?php get_footer(); ?> 