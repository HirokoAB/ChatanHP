
<!DOCTYPE html>
<html lang="en">
<head>
	<title>archive</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/reset.css">
</head>
<body>



<div id="blog_archive" >
	<!-- 表示件数を指定するための配列 -->
	<?php $args =  array('posts_per_page' => 5 );?>
	<!-- postsの中に表示件数で指定した数の投稿を代入 -->	　　
	<?php $posts = get_posts($args);?>



	<?php if (have_posts()): ?>
		<div class="container">
			<div class="forfix">
				<?php foreach ( $posts as $post ): ?>
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
					<p class="article"><?php setup_postdata( $post );?></p>
					<!-- 記事の詳細へ -->
					<a href="<?php the_permalink();?>">
						<p>続きを読む</p>
					</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	<button>次へ</button>
<?php endif; ?>
	












</div>

































	
</body>
</html>
 No newline at end of file
