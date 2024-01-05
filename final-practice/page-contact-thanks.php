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

  <!-- thanks -->
  <section id="thanks-page">
    <div class="thanks-container">
      <div class="reserve-thanks">
        <h3>お問い合わせ内容を送信しました</h3>
        <p>ありがとうございます。２営業日以内にご返信いたします。</p>
      </div>
      <div class="home-back">
        <a href="/">戻る</a>
      </div>
    </div>
  </section>
  <!-- /thanks -->

  <?php get_footer(); ?>