<?php get_header(); ?>
      <div class="main">
        <!-- レンタルスタジオ -->
        <section class="module studio" id="studio">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-xs-12">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/studio_slide/studio-1.jpg" alt="">
              </div>
              <div class="col-md-6 col-xs-12">
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
                  <p class="link">
                    <a href="">スタジオ 照明設備 /</a>
                    <a href=""> 図面PDFダウンロード</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- レンタル会議室ここから -->
        <section class="module meeting">
          <div class="container">
            <div class="row text-center">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">レンタル会議室</h2>
                  <h5>1時間あたり1,200円からご案内しています。</h5>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
          </div>
          <ul class="works-grid works-grid-gut works-grid-3 works-hover-w">
            <li class="work-item illustration webdesign">
              <div class="work-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/IT.JPG" alt="Portfolio Item"/></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">IT研修室</h3>
                <div class="work-descr">広さ55㎡</div>
                <div class="work-descrs">利用推奨人数：30名程度</div>
                <div class="detail-btn">
                  <a href="<?php echo get_permalink( RENTAL_MEETING ); ?>/#room-it">詳細はこちら</a>
                </div>
              </div>
            </li>
            <li class="work-item marketing photography">
              <div class="work-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/meeting-roomA.JPG" alt="Portfolio Item"/></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">会議室A</h3>
                <div class="work-descr">広さ33㎡</div>
                <div class="work-descrs">利用推奨人数：20名程度</div>
                <div class="detail-btn">
                  <a href="<?php echo get_permalink( RENTAL_MEETING ); ?>/#room-a">詳細はこちら</a>
                </div>
              </div>
            </li>
            <li class="work-item illustration photography">
              <div class="work-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/meeting-roomB.JPG" alt="Portfolio Item"/></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">会議室B</h3>
                <div class="work-descr">広さ28㎡</div>
                <div class="work-descrs">利用推奨人数：10名程度</div>
                <div class="detail-btn">
                  <a href="<?php echo get_permalink( RENTAL_MEETING ); ?>/#room-b">詳細はこちら</a>
                </div>
              </div>
            </li>
          </ul>
        </section>

        <!-- レンタルオフィス -->
        <section class="module office-top">
          <div class="container">
            <div class="row text-center">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">レンタルオフィス</h2>
                  <h5>レンタルオフィスは北谷町役場商工観光課より公募という形で募集をおこないます</h5>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
          </div>
          <ul class="works-grid works-grid-gut works-grid-3 works-hover-w">
            <li class="work-item illustration webdesign">
              <div class="work-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/office-roomA.JPG" alt="Portfolio Item"/>
              </div>
              <div class="work-caption font-alt">
                <h3 class="work-title">事務室A</h3>
                <div class="work-descr">広さ : 25㎡</div>
                <div class="detail-btn">
                  <a href="<?php echo get_permalink( RENTAL_OFFICE ); ?>/#office-a">詳細はこちら</a>
                </div>
              </div>
            </li>
            <li class="work-item illustration webdesign">
              <div class="work-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/office-roomB.JPG" alt="Portfolio Item"/>
              </div>
              <div class="work-caption font-alt">
                <h3 class="work-title">事務室B</h3>
                <div class="work-descr">広さ25㎡</div>
                <div class="detail-btn">
                  <a href="<?php echo get_permalink( RENTAL_OFFICE ); ?>/#office-b">詳細はこちら</a>
                </div>
              </div>
            </li>
            <li class="work-item illustration photography">
              <div class="work-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/office-roomC.JPG" alt="Portfolio Item"/>
              </div>
              <div class="work-caption font-alt">
                <h3 class="work-title">事務室C</h3>
                <div class="work-descr">広さ25㎡</div>
                <div class="detail-btn">
                  <a href="<?php echo get_permalink( RENTAL_OFFICE ); ?>/#office-c">詳細はこちら</a>
                </div>
              </div>
            </li>
          </ul>
        </section>

        <!-- レンタル機材セクション -->
        <section class="module equipment-top" id="rental">
          <div class="container">
            <div class="row text-center">
              <div class="col-sm-12">
                <h2 class="module-title">レンタル機材</h2>
                <h5>ご予約は本日より７営業日先から受付をおこない、向こう3ヶ月までご予約できます。</h5>
                <div class="module-subtitle font-serif"></div>
              </div>
              
              <ul class="works-grid-4 works-hover-w" id="work-item">
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
            </div>
          </div>

          

        </section>

        <!-- メディアステーションのブログ -->
        <section class="module news-top" id="news">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">メディアステーションのブログ</h2>
                <div class="module-subtitle font-serif">当ステーションの新鮮な情報を掲載していきます。<br>パソコン講座の案内、撮影機材に関すること、その他 日常の出来事など。お楽しみに！</div>
              </div>
            </div>
            <div class="row multi-columns-row post-columns">
              <?php query_posts('posts_per_page=3'); ?>
                <?php get_template_part('loop', 'blog'); ?>
            </div>
            <div class="list-btn">
              <a href="<?php echo get_permalink( BLOG ); ?>">記事一覧</a>
            </div>
          </div>
        </section>

        <!-- googleマップ -->
        <section class="module map" id="map">
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
        <section class="module contact-top" id="contact">
          <div class="container">
            <!-- タイトルテキスト部分 -->
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 class="module-title font-alt">お問い合わせ</h2>
                <div class="description col-sm-8 col-sm-offset-2">
                  <p>北谷町美浜メディアステーション管理事務所</p>
                  <p>電話：098-926-5140（平日9時～17時）</p>
                  <p>FAX：098-926-5140</p>
                </div>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <?php echo get_template_part('form', 'local'); ?>
            <?php //echo get_template_part('form', 'production'); ?>
            </div>
        </section>

<?php get_footer(); ?>