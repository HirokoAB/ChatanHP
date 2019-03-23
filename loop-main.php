<?php get_header(); ?><body>

<div id="blog_archive" >
	<!-- 表示件数を指定するための配列 -->
	<?php $args =  array('posts_per_page' => 5 );?>
	<!-- postsの中に表示件数で指定した数の投稿を代入 -->	　　
	<?php $posts = get_posts($args);?>
	<?php if (have_posts()): ?>
		<div class="container">
				<?php foreach ( $posts as $post ): ?>
        <?php setup_postdata($post);?>  
        <div class="forfix">  
					<?php if (has_post_thumbnail()): ?>
						<?php the_post_thumbnail('thumbnail'); ?>
					<?php else: ?>
						<img src="https://placehold.jp/150x150.png" alt="" height="150", width="150">
					<?php endif; ?>

					<div class="article_fix">
					<!-- タイトル -->
					<h2><?php the_title();?></h2>
					<!-- 投稿日時 -->
					<h3><?php the_time('Y年m月d日');?></h3>
					<hr>
					<!-- 記事データの取得 -->
					<p class="article"><?php the_excerpt(); ?></p>
					<!-- 記事の詳細へ -->
					<a href="<?php the_permalink();?>">
						<p class="continue">続きを読む</p>
					</a>
					</div>
          </div>
				<?php endforeach; ?>
		</div>

  <!-- 記事一覧の１ページ目以降か否かを判定してボタンを追加 -->
          <?php if (is_paged()) :?>
          <div class="btn_fix">  
          <button class="pre">前へ</button>  
          <button class="next">次へ</button>
          </div>
          <?php else: ?>
          <button class="next">次へ</button>
          <?php endif; ?>



  <!-- 記事の投稿件数を取得してボタンの表示を切り替え -->
  <!-- <?php $count_posts = wp_count_posts();?>  --><!-- 記事の数を取得 -->
  <!-- <?php $postnum = $count_posts->publish;?>  --><!-- 変数に格納 -->
  <!-- 
  <?php if( $postnum > 5  ):?>
  <div class="btn_fix">  
  <button class="pre">前へ</button>  
  <button class="next">次へ</button>
  </div>
  <?php else:?>
  <button class="next">次へ</button>
  <?php endif; ?>
 -->
  </div>

<?php endif; ?>

</div>	
</body>

<?php get_footer(); ?>
