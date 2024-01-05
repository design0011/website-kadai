<?php get_header(); ?>

  <!-- main -->
  <main>
    <div class="a-mv-container">
      <!-- a-mv-text-wrap -->
      <div class="a-mv-text-wrap"> 
        <h2>Voice<br>
          <span>お客様の声</span>
        </h2>
      </div>
      <!-- /a-mv-text-wrap -->
      <!-- a-mv-img-wrap -->
      <div class="a-mv-img-wrap">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/voice/SP_Voice1.png" media="(max-width:767px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/voice/Voice1.png" alt="voice写真">
        </picture>
      </div>
      <!-- /a-mv-img-wrap -->
    </div>
    <!-- breadcrumb -->
    <?php get_template_part('breadcrumb'); ?>
  </main>
  <!-- /main -->

  <?php
  //取得したい投稿記事などの条件を引数として渡す
  $args = array(
    // 投稿タイプ
    'post_type' => 'voice',
    // 1ページに表示する投稿数
    'posts_per_page' => 5,
    // ページごとのパラメーター
    'paged' => $paged,
  );
  // データの取得
  $posts = get_posts($args);
  ?>
  <!-- voice -->
  <section id="voice-list">
    <div class="voice-container">
      <!-- ループ処理 -->
      <?php foreach ($posts as $post) : ?>
      <?php setup_postdata($post); ?>
      <div class="voice-wrap">
        <div class="voice-img">
          <?php the_post_thumbnail(); ?>
        </div>
        <div class="voice-text">
          <h3><?php the_title(); ?></h3>
          <p>
            <?php the_content(); ?>
          </p>
        </div>
      </div>
      <?php endforeach; ?>
      <!-- 使用した投稿データをリセット -->
      <?php wp_reset_postdata(); ?>
    </div>
    <!-- pager -->
    <?php
      the_posts_pagination(
        array(
          'prev_next' => false,
          'mid_size' => 2,
        )
      );
    ?>
  </section>
  <!-- /news-info -->

<?php get_footer(); ?>