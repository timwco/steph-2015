<?php get_header(); ?>

			<div id="content" class="col-lg-9">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<article class="post-wrapper clearfix">
							<div class="row">
								<aside class="post-meta-sidebar col-lg-1">
									<h5><?php the_time('j') ?></h5>
									<h6><?php the_time('M') ?></h6>
								</aside>
								<div class="post-content col-lg-11">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail() ?>
									<?php endif; ?>
									<?php steph_meta_data(); ?>
									<h1 class="post-title"><?php the_title(); ?></h1>
									<div class="post-body"><?php the_content(); ?></div>
								</div>
							</div>
						</article>

						<div class="commentsHolder"><?php comments_template(); ?></div>

					<?php endwhile; ?>
				<?php else : ?>
					<article class="post-wrapper clearfix">
						<div class="row">
							<div class="post-content col-lg-11">
								<div class="post-body">Sorry, nothing to see here. Please check back later.</div>
							</div>
						</div>
					</article>
				<?php endif; ?>
			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>

<?php get_footer(); ?>
