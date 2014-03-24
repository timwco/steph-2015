<?php get_header(); ?>

			<div id="content" class="col-lg-9">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<article class="post-wrapper clearfix">
							<div class="row">
								<aside class="post-meta-sidebar col-lg-1">
									<h1><?php the_time('j') ?></h1>
									<h4><?php the_time('M') ?></h4>
								</aside>
								<div class="post-content col-lg-11">
									<?php if ( has_post_thumbnail() ) : ?>
										<a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
									<?php endif; ?>
									<h1 class="post-title">
										<a href="<?php the_permalink() ?>" class="post-title"><?php the_title(); ?></a>
									</h1>
									<div class="post-body"><?php the_excerpt(); ?></div>
									<a href="<?php the_permalink() ?>" class="button readmore">Continue Reading</a>
								</div>
							</div>
						</article>
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
				<div class="post-pagination">
					<ul>
		                <li><?php next_posts_link('Older Posts') ?></li>
		                <li><?php previous_posts_link('Newer Posts') ?></li>
					</ul>
				</div>
			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>

<?php get_footer(); ?>
