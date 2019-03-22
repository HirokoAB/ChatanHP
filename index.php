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
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">
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
  </head>

  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <!-- ローディング画面の表示 -->
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>

      <!-- 画面上部ヘッダーの表示 -->
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


      <div class="main">
        <!-- レンタル会議室ここから -->
        <section class="module pb-0" id="meets">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">レンタル会議室</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
          </div>
          <!-- イメージ画像 -->
          <ul class="works-grid works-grid-gut works-grid-3 works-hover-w" id="works-grid">
            <!-- １枚目 -->
            <li class="work-item illustration webdesign"><a href="portfolio-single-1.html">
              <div class="work-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/IT.JPG" alt="Portfolio Item"/></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">Corporate Identity</h3>
                <div class="work-descr">Illustration</div>
              </div></a>
            </li>
            <!-- ２枚目 -->
            <li class="work-item marketing photography"><a href="portfolio-single-1.html">
              <div class="work-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/meeting-roomA.JPG" alt="Portfolio Item"/></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">Bag MockUp</h3>
                <div class="work-descr">Marketing</div>
              </div></a>
            </li>
            <!-- ３枚目 -->
            <li class="work-item illustration photography"><a href="portfolio-single-1.html">
              <div class="work-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/meeting-roomB.JPG" alt="Portfolio Item"/></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">Disk Cover</h3>
                <div class="work-descr">Illustration</div>
              </div></a>
            </li>

          </ul>
        </section>


        <!-- レンタルオフィスここから -->
        <section class="module pb-0" id="works">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">レンタルオフィス</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
          </div>
          <!-- イメージ画像 -->
          <ul class="works-grid works-grid-gut works-grid-3 works-hover-w" id="works-grid">
            <!-- １枚目 -->
            <li class="work-item illustration webdesign"><a href="portfolio-single-1.html">
                <div class="work-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/office-roomA.JPG" alt="Portfolio Item"/></div>
                <div class="work-caption font-alt">
                  <h3 class="work-title">Corporate Identity</h3>
                  <div class="work-descr">Illustration</div>
                </div></a></li>
            <!-- ２枚目 -->
            <li class="work-item marketing photography"><a href="portfolio-single-1.html">
                <div class="work-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/office-roomB.JPG" alt="Portfolio Item"/></div>
                <div class="work-caption font-alt">
                  <h3 class="work-title">Bag MockUp</h3>
                  <div class="work-descr">Marketing</div>
                </div></a></li>
            <!-- ３枚目 -->
            <li class="work-item illustration photography"><a href="portfolio-single-1.html">
                <div class="work-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/office-roomC.JPG" alt="Portfolio Item"/></div>
                <div class="work-caption font-alt">
                  <h3 class="work-title">Disk Cover</h3>
                  <div class="work-descr">Illustration</div>
                </div></a></li>
          </ul>
        </section>


        <!-- レンタル機材セクション -->
        <section class="module" id="rental">
          <h2>レンタル機材</h2>
          <h3>ご予約は本日より７営業日先から受付をおこない、向こう3ヶ月までご予約できます。</h3>
          <ul class="works-grid works-grid-gut works-grid-3 works-hover-w" id="works-grid work-item">
            <li class="work-item"><a href="portfolio-single-1.html">
              <div class="work-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/binden.jpg" alt="Rental Item"/></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">1日料金：2,600円</h3>
                <h4 class="work-descr">詳細はこちらから</h4>
              </div></a>
              <span>ビンデン三脚</span>
            </li>
            <li class="work-item"><a href="portfolio-single-1.html">
              <div class="work-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/manfurotto.jpg" alt="Rental Item"/></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">1日料金：500円</h3>
                <h4 class="work-descr">詳細はこちらから</h4>
              </div></a>
              <span>マンフロット三脚</span>
            </li>
            <li class="work-item"><a href="portfolio-single-1.html">
              <div class="work-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/dori-.jpg" alt="Rental Item"/></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">1日料金：500円</h3>
                <h4 class="work-descr">詳細はこちらから</h4>
              </div></a>
              <span>ドリー</span>
            </li>
            <li class="work-item"><a href="portfolio-single-1.html">
              <div class="work-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/lighting-kit.jpg" alt="Rental Item"/></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">1日料金：2,200円</h3>
                <h4 class="work-descr">詳細はこちらから</h4>
              </div></a>
            <span>ライティングキット</span>
            </li>
          </ul>
        </section>


        <!-- レンタルスタジオ -->
        <section class="module" id="studio">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/studio_slide/studio-1.jpg" alt="">
              </div>
              <div class="col-sm-6">
                <div class="container table">
                  <h2>レンタルスタジオ</h2>
                  <p>広さ：６０坪</p>
                  <table width="100%">
                    <tr>
                      <td></td>
                      <td>9-19時/時間</td>
                      <td>19-9時/時間</td>
                      <td>1日/24時間</td>
                    </tr>
                    <tr>
                      <td>スタジオ</td>
                      <td>¥4,400</td>
                      <td>¥5,700</td>
                      <td>¥104,500</td>
                    </tr>
                    <tr>
                      <td>照明設備</td>
                      <td>¥5,400</td>
                      <td>¥7,000</td>
                      <td>¥129,400</td>
                    </tr>
                    <tr>
                      <td>音響設備</td>
                      <td></td>
                      <td></td>
                      <td>¥6,300</td>
                    </tr>
                  </table>
                  <p class="link"><a href="">スタジオ</a>照明設備/図面<a href="">PDFダウンロード</a></p>
                </div>
              </div>
            </div>
          </div>
        </section>


        <!-- メディアステーションのブログ -->
        <section class="module" id="news">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">メディアステーションのブログ</h2>
                <div class="module-subtitle font-serif">当ステーションの新鮮な情報を掲載していきます。<br>パソコン講座の案内、撮影機材に関すること、その他 日常の出来事など。お楽しみに！</div>
              </div>
            </div>
            <!-- イメージ画像 -->
            <div class="row multi-columns-row post-columns">
              <!-- １記事目 -->
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-20">
                  <div class="post-thumbnail"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/post-1.jpg" alt="Blog-post Thumbnail"/></a></div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">タイトル</a></h2>
                    <div class="post-meta"><p>2019/03/17</p>
                    </div>
                  </div>
                  <div class="post-entry">
                    <p>記事の抜粋がここに表示されます。記事の抜粋がここに表示されます。記事の抜粋がここに表示されます。記事の抜粋がここに表示されます。記事の抜粋がここに表示されます。</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">続きを読む</a></div>
                </div>
              </div>
              <!-- ２記事目 -->
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-20">
                  <div class="post-thumbnail"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/post-2.jpg" alt="Blog-post Thumbnail"/></a></div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">タイトル</a></h2>
                    <div class="post-meta"><p>2019/03/17</p>
                    </div>
                  </div>
                  <div class="post-entry">
                    <p>記事の抜粋がここに表示されます。記事の抜粋がここに表示されます。記事の抜粋がここに表示されます。記事の抜粋がここに表示されます。記事の抜粋がここに表示されます。</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">続きを読む</a></div>
                </div>
              </div>
              <!-- ３記事目 -->
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-20">
                  <div class="post-thumbnail"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/post-3.jpg" alt="Blog-post Thumbnail"/></a></div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">タイトル</a></h2>
                    <div class="post-meta"><p>2019/03/17</p>
                    </div>
                  </div>
                  <div class="post-entry">
                    <p>記事の抜粋がここに表示されます。記事の抜粋がここに表示されます。記事の抜粋がここに表示されます。記事の抜粋がここに表示されます。記事の抜粋がここに表示されます。</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">続きを読む</a></div>
                </div>
              </div>
            </div>
            <div class="btn">
              <button>記事一覧</button>
            </div>
          </div>
        </section>

        <!-- googleマップ -->
        <section class="module" id="map">
          <div class="container">
            <div class="row">
              <h2 class="module-title font-alt">アクセス</h2>
              <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3576.3207843680784!2d127.75571131557224!3d26.31611028338815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e513051b6aba63%3A0x758d0e90af22e324!2z5YyX6LC355S6576O5rWc44Oh44OH44Kj44Ki44K544OG44O844K344On44Oz!5e0!3m2!1sja!2sjp!4v1553078249420" width="768" height="576" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </section>

        <!-- コンタクトフォーム -->
        <section class="module" id="contact">
          <div class="container">
            <!-- タイトルテキスト部分 -->
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">お問い合わせ</h2>
                <p>北谷町美浜メディアステーション管理事務所</p>
                <p>電話：098-926-5140（平日9時～17時）</p>
                <p>FAX：098-926-5140</p>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <!-- 入力フォーム部分 -->
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <form id="contactForm" role="form" method="post" action="php/contact.php">
                  <!-- 名前入力フォーム -->
                  <div class="form-group">
                    <label class="sr-only" for="name">お名前</label>
                    <input class="form-control" type="text" id="name" name="name" placeholder="お名前" required="required" data-validation-required-message="Please enter your name."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <!-- E-mail 入力フォーム -->
                  <div class="form-group">
                    <label class="sr-only" for="email">メールアドレス</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="メールアドレス" required="required"  data-validation-required-message="Please enter your email address."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <!-- 内容入力フォーム -->
                  <div class="form-group">
                    <textarea class="form-control" rows="7" id="message" name="message" placeholder="お問い合わせ内容" required="required" data-validation-required-message="Please enter your message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">送信</button>
                  </div>
                </form>
                <div class="ajax-response font-alt" id="contactFormResponse"></div>
              </div>
            </div>
          </div>
        </section>


        <!-- フッター -->
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt"><a href="">北谷町美浜メディアステーション管理事務所 ALL RIGHT RESERVED</p></a>
              </div>
              <div class="col-sm-6">
                <a href="">北谷町役場HP</a>
                <a href="">北谷町観光協会HP</a>
              </div>
            </div>
          </div>
        </footer>

      </div>
    </main>

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
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/smoothscroll.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
  </body>
</html>