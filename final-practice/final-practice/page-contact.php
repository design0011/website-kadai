<?php get_header(); ?>

  <!-- main -->
  <main>
    <div class="a-mv-container">
      <!-- a-mv-text-wrap -->
      <div class="a-mv-text-wrap"> 
        <h2>Contact<br>
          <span>ご予約・お問い合わせ</span>
        </h2>
      </div>
      <!-- /a-mv-text-wrap -->
      <!-- a-mv-img-wrap -->
      <div class="a-mv-img-wrap">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/contact/SP-Reserve.png" media="(max-width:767px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/contact/Reserve.png" alt="voice写真">
        </picture>
      </div>
      <!-- /a-mv-img-wrap -->
    </div>
    <!-- breadcrumb -->
    <?php get_template_part('breadcrumb'); ?>
  </main>
  <!-- /main -->

  <!-- reserve -->
  <section id="reserve-section">
    <div class="reserve-container">
      <div class="reserve-title">
        <h3>お電話でのご予約・お問い合わせ</h3>
        <p>
          〒101-0022 東京都千代田区神田練塀町300番地<br>
          住友不動産秋葉原駅前ビル 5F
        </p>
        <h3 class="tel"><span>tel:</span> 03-1234-5678</h3>
        <h3 class="contact-title">ご予約・お問い合わせフォーム</h3>
        <p class="contact-text">※ 2営業日以内にご返信いたします。</p>
      </div>

      <!-- コンタクトフォーム -->
      <?php the_content(); ?>
    </div>
  </section>
  <!-- /reserve -->

<?php get_footer(); ?>