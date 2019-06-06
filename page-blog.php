<?php get_header(); ?>

<div class="blog-container">

<?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
                'posts_per_page'   => 5,
                'paged' => $paged,
                'orderby'          => 'date',
                'order'            => 'DESC',
                'post_type'        => 'post',
                'post_status'      => 'publish',
                'suppress_filters' => true
            );

            $blogposts = new WP_Query($args);

            while($blogposts->have_posts()) {
                $blogposts->the_post();

            ?>

                  <div class="container blog-indi-container">
                  <div class="row">
                
                    <div class="col-md-4">
                      <div class="post mb-20">
                          <div class="post-thumbnail">
                              <a href="<?php the_permalink() ?>">
                              <?php if (has_post_thumbnail()): ?>

                                  <?php the_post_thumbnail('medium'); ?>

                              <?php else: ?>
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dori-.jpg" alt="">
                              <?php endif; ?>
                              </a>
                            </div>
                    </div>
            </div>

                  <div class="col-md-8">

                      <div class="post-header font-alt">
                            <h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

                            <div class="post-meta">
                                <p>
                                    <?php the_time("Y/m/d"); ?>
                                </p>
                              </div>
                        </div>
                        <hr class="blog-hori">
                        <div class="post-entry">
                            <p>
                            <?php the_excerpt() ?>
                            </p>
                        </div>
                        <div class="post-more">
                            <a class="more-link" href="<?php the_permalink() ?>">続きを読む
                            </a>
                        </div>
                      </div>

                  </div>
                  </div>
                </div>
            <?php }
            
            wp_reset_query(); 

            ?>



    
    <?php if (is_paged()) :?>

      <div class="btn_fix-cont">
        <div class="btn_fix text-center">  
            <button class="next btn btn-secondary">次へ</button>    
        </div>
      </div>

    <?php else: ?>

    <div class="btn-pagi-cont">
        <div class="btn-pagi text-center">
            <button class="pre btn btn-secondary">前へ</button>  
            <button class="next btn btn-secondary">次へ</button>
        </div>
    </div>

    <?php endif; ?>

    </div>

<?php get_footer(); ?>