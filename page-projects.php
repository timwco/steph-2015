<?php get_header(); ?>

      <div id="content" class="col-lg-9">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <article class="post-wrapper clearfix">
              <div class="row">
                <div class="post-content col-lg-11">
                  <h1 class="post-title"><?php the_title(); ?></h1>
                  <div class="post-body">
                    <?php the_content(); ?>
                    <div class="portfolioWrapper">
                      <?php 
                        $loop = new WP_Query( array( 'post_type' => 'projects', 'posts_per_page' => 150, 'orderby' => 'menu_order', 'order' => 'DESC' )); 
                      ?>
                      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="itemBlock">
                          <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'project-image' ); ?></a>
                          <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                        </div>
                      <?php endwhile; ?> 
                    </div>
                  </div>
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
      </div>

      <?php get_sidebar(); ?>

    </div>
  </div>

<?php get_footer(); ?>
