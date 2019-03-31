<?php get_header(); ?>
    <div class="row multi-columns-row post-columns">
      <?php get_template_part('loop', 'blog'); ?>
    </div>
    <?php if (is_paged()) :?>
			<div class="btn_fix">  
				<button class="pre">前へ</button>  
				<button class="next">次へ</button>
			</div>
    <?php else: ?>
      <button class="next">次へ</button>
    <?php endif; ?>
<?php get_footer(); ?>