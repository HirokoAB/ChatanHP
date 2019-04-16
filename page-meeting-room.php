<?php get_header(); ?>

<section class="meeting-room">
  <h1>レンタル会議室</h1>
  <h2>1時間あたり1,200円からご案内しています。</h2>
  <div class="it-room" id="room-it">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/IT.JPG" alt="IT-room">
    <div class="text">
      <p class="it">IT研修室</p>
      <p>広さ：55㎡</p>
      <p>利用推奨人数：30名程度</p>
      <P>町内料金/時間：¥1,200</P>
      <p>町内料金/時間：¥1,800</p>
    </div>
  </div>
  <div class="it-room" id="room-a">
    <div class="text">
      <p class="it">会議室A</p>
      <p>広さ：33㎡</p>
      <p>利用推奨人数：20名程度</p>
      <P>町内料金/時間：¥1,000</P>
      <p>町内料金/時間：¥1,500</p>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/meeting-roomA.JPG" alt="meeting-roomA">
  </div>
  <div class="it-room" id="room-b">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/meeting-roomB.JPG" alt="meeting-roomB">
    <div class="text">
      <p class="it">会議室B</p>
      <p>広さ：28㎡</p>
      <p>利用推奨人数：10名程度</p>
      <P>町内料金/時間：¥800</P>
      <p>町内料金/時間：¥1,200</p>
    </div>
  </div>
</section>

<?php get_footer(); ?>
