<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>北谷メディアセンター</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="<?php echo get_template_directory_uri(); ?>/assets/css/colors/default.css" rel="stylesheet">
    <?php wp_head(); ?>
  </head>

  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <!-- ローディング画面の表示 -->
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>

      <!-- ナビゲーション -->
      <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
          <!-- タイトルテキストの記述 -->
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">北谷町メディアセンター</a>

          </div>
          <!-- サブメニューの記述 -->
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <!-- HOMEドロップダウンメニュー -->
              <li class="dropdown"><a href="#meets">レンタル会議室</a>
              </li>
              <!-- HEADERSドロップダウンメニュー -->
              <li class="dropdown"><a href="#works">レンタルオフィス</a>
              </li>
              <!-- PAGESドロップダウンメニュー -->
              <li class="dropdown"><a href="#rental">レンタル機材</a>
              </li>
              <!-- PORTFOLIOドロップダウンメニュー -->
              <li class="dropdown"><a href="#studio">レンタルスタジオ</a>
              </li>
              <!-- BLOGドロップダウンメニュー -->
              <li class="dropdown"><a href="#news">ブログ</a>
              </li>
              <!-- FEATURESドロップダウンメニュー -->
              <li class="dropdown"><a href="#contact">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <?php if (is_home()): ?>
      <!-- トップイメージ画面部分（スライダー表示） -->
      <section class="home-section home-parallax home-fade home-full-height" id="home">
        <div class="hero-slider">
          <ul class="slides">
            <!-- スライダー１枚目 -->
            <li class="bg-dark-30 bg-dark" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/top_slide/img1.JPG);">
              <div class="titan-caption">
                <div class="caption-content">
                  <div class="font-alt mb-40 titan-title-size-4">記憶や想いを”カタチ”にする施設</div>
                </div>
              </div>
            </li>
            <!-- スライダー２枚目 -->
            <li class="bg-dark-30 bg-dark" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/top_slide/img2.JPG);">
              <div class="titan-caption">
                <div class="caption-content">
                  <div class="font-alt mb-40 titan-title-size-4">記憶や想いを”カタチ”にする施設</div>
                </div>
              </div>
            </li>
            <!-- スライダー３枚目 -->
            <li class="bg-dark-30 bg-dark" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/top_slide/img3.JPG);">
              <div class="titan-caption">
                <div class="caption-content">
                  <div class="font-alt mb-40 titan-title-size-4">記憶や想いを”カタチ”にする施設</div>
                </div>
              </div>
            </li>
            <!-- スライダー４枚目 -->
            <li class="bg-dark-30 bg-dark" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/top_slide/img4.JPG);">
              <div class="titan-caption">
                <div class="caption-content">
                  <div class="font-alt mb-40 titan-title-size-4">記憶や想いを”カタチ”にする施設</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <?php else: ?>
        トップページ以外
      <?php endif; ?>
