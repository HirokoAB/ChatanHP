<?php if ( have_posts() ) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <div class="col-sm-6 col-md-4 col-lg-4">
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
            <div class="post-header font-alt">
                <h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                <div class="post-meta">
                <p>
                    <?php the_time("Y/m/d"); ?>
                </p>
                </div>
            </div>
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
    <?php endwhile; ?>
<?php endif; ?>