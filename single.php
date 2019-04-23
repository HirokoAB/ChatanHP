<?php get_header(); ?>
    <main class="single">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="post-thumbnail">
                <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('large'); ?>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dori-.jpg" alt="">
                <?php endif; ?>
            </div>
            <div class="time">
                <time datetime="<?php the_time('Y-m-d'); ?>"
                    ><?php the_time('Y.m.d'); ?>
                </time>
            </div>
            <div class="content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>