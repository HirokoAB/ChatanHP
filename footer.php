
    <!-- フッター -->
    <footer class="footer bg-dark" <?php if(is_page('thanks')) echo "id=footer_fix" ?>
    >
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12 footer-left">
            <p class="copyright font-alt">
              北谷町美浜メディアステーション管理事務所 ALL RIGHT RESERVED
            </p>
          </div>
          <div class="col-sm-6 col-xs-12 footer-right">
            <a href="https://www.chatan.jp/">北谷町役場HP</a>
            <a href="https://www.chatan.or.jp/">北谷町観光協会HP</a>
          </div>
        </div>
      </div>
    </footer>

    <!--  
    JavaScripts
    =============================================
    -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/jquery/dist/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/wow/dist/wow.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <!-- <script src="<?php //echo get_template_directory_uri(); ?>/assets/lib/smoothscroll.js"></script> -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
  <?php wp_footer(); ?>
  </body>
</html>