<?php get_header(); ?>

<?php if(have_posts()): the_post(); ?>
<article <?php post_class(); ?>>
  <!--投稿日・著者を表示-->
  <div class="kiji-info">
    <!--投稿日を取得-->
    <span class="kiji-date">
      <i class="fas fa-pencil-alt"></i>
      <time
      datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
      <?php echo get_the_date(); ?>
      </time>
    </span>
    <!--カテゴリ取得-->
    <?php if(has_category() ): ?>
    <span class="cat-data">
      <?php echo get_the_category_list( ' ' ); ?>
    </span>
    <?php endif; ?>
  </div>
  <!--タイトル-->
  <h1><?php the_title(); ?></h1>
  <!--アイキャッチ取得-->
  <?php if( has_post_thumbnail() ): ?>
  <div class="kiji-img">
    <?php the_post_thumbnail( 'large' ); ?>
  </div>
  <?php endif; ?>
  <!--本文取得-->
  <?php the_content(); ?>
  <!--タグ-->
  <div class="">
    <?php the_tags('<ul><li>タグ： </li><li>','</li><li>','</li></ul>'
  ); ?>
  </div>
</article>
<?php endif; ?>

    
<?php get_footer(); ?>