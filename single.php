<?php get_header(); ?>


<?php if(have_posts()): the_post(); ?>

  <article> <!-- <?php post_class( ); ?> -->

      <div class ="article_container"> 
        <!--投稿日・著者を表示-->
        <div>
            <!--カテゴリ取得-->
            <?php if(has_category() ): ?>
              <span class="cat-data">
                <?php echo the_category(''); ?>
              </span>
            <?php endif; ?>
        </div>
        <!--アイキャッチ取得-->
        <?php if( has_post_thumbnail() ): ?>
          <div class="article_img">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?> 
        <div class= "article_title">       
          <!--タイトルを取得-->
          <h1><?php the_title(); ?></h1>
          <!--投稿日を取得-->
          <span class="article_date">
            <i class="fas fa-pencil-alt"></i>
              <time
            datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
              <?php echo get_the_date(); ?>
            </time>
          </span>
        </div>
        <!--本文取得-->
        <div class="article_content">
          <?php the_content(); ?>
        </div>

  <?php else: ?>

    <p>投稿はありません</p>

<?php endif; ?>


<div class="nav-below">
  <span class="pre">
    <?php previous_post_link('%link','< 前へ'); ?>
  </span>
  <span class="next">  
    <?php next_post_link('%link','次へ >'); ?>
  </span>
</div>
</div>
 
<div class="article_archive">
  <p class="latest_title">最新の投稿</p>
  <div class="article_loop">
    <?php $paged = get_query_var('paged'); ?>
    <?php query_posts("posts_per_page=3&paged+$paged"); ?>
    <?php get_template_part('loop', 'blog'); ?>
  </div> 

  <div class="list-btn">
    <a href="<?php echo get_permalink( BLOG ); ?>">記事一覧</a>
  </div>

</div>

</article>  

    
<?php get_footer(); ?>