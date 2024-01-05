<?php get_header(); ?>

  <!-- main -->
  <main>
    <div class="a-mv-container">
      <!-- a-mv-text-wrap -->
      <div class="a-mv-text-wrap"> 
        <h2>Information<br>
          <span>お知らせ</span>
        </h2>
      </div>
      <!-- /a-mv-text-wrap -->
      <!-- a-mv-img-wrap -->
      <div class="a-mv-img-wrap">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/news/SP-News.png" media="(max-width:767px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/news/News.png" alt="News写真">
        </picture>
      </div>
      <!-- /a-mv-img-wrap -->
    </div>
    <!-- breadcrumb -->
    <?php get_template_part('breadcrumb'); ?>
  </main>
  <!-- /main -->

  <!-- news-info -->
  <section id="news-info">
    <div class="news-info-container">
      <!-- news-info-wrap -->
      <div class="news-info-wrap">
        <!-- 投稿記事一覧 -->
        <?php
          //取得したい投稿記事などの条件を引数として渡す
          $args = array(
            // 投稿タイプ
            'post_type' => 'post',
            // 1ページに表示する投稿数
            'posts_per_page' => 10,
            // ページごとのパラメーター
            'paged' => $paged, 
          );
          // データの取得
          $posts = get_posts($args);
        ?>
        <!-- ループ処理 -->
        <?php foreach($posts as $post): ?>
        <?php setup_postdata($post); ?>
        <!-- news-info-list -->
        <div class="news-info-list">
          <div class="news-info-img">
            <!-- 画像（サムネイル）表示 -->
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="news-info-text">
            <h3>
              <a href="<?php echo get_permalink(); ?>">
                <!--  投稿記事タイトル表示 -->
                <?php the_title(); ?>
              </a>
            </h3>
            <p>
              <!-- 日付を出力 -->
              <?php echo get_the_date(); ?>
              <!-- カテゴリーを出力 -->
              <span class="<?php echo get_the_category()[0]->slug; ?>">
                <?php echo get_the_category()[0]->name; ?>
              </span>
            </p>
          </div>
        </div>
        <!-- /news-info-list -->
        <?php endforeach; ?>
        <!-- 使用した投稿データをリセット -->
        <?php wp_reset_postdata(); ?>

        <!-- pager -->
        <?php
          the_posts_pagination(
            array(
              'prev_next' => false,
              'mid_size' => 2,
            )
          );
        ?>
      </div>
      <!-- /news-info-wrap -->
      
      <!-- sidebar -->
      <?php get_sidebar(); ?>
      <!-- /sidebar -->
    </div>
  </section>
  <!-- /news-info --> 

<?php get_footer(); ?>