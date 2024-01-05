<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="根本的な症状改善をサポートします">
  <title>SAMURAI整体院-デモサイト-</title>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Noto+Sans+JP&family=Shippori+Mincho&display=swap" rel="stylesheet">

  <!-- slick読み込み -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
</head>

<body>
  <!-- header -->
  <header id="header">
    <!-- inner -->
    <div class="inner">
      <!-- hlogo -->
      <a class="hlogo" href="/">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Frame 2259.png" alt="logo-topback">
      </a>
      <!-- /hlogo -->
      <!-- hnav -->
      <nav id="hnav">
        <ul class="hnav-list">
          <li class="hnav-item">
            <a href="/">ホーム</a>
          </li>
          <li class="hnav-item">
            <a href="#about">当院について</a>
          </li>
          <li class="hnav-item">
            <a href="#course">コース・料金</a>
          </li>
          <li class="hnav-item">
            <a href="#news">お知らせ</a>
          </li>
          <li class="hnav-item">
            <a href="#voice">お客様の声</a>
          </li>
          <li class="hnav-item hnav-contact">
            <a href="<?php echo home_url(); ?>/contact">ご予約・お問い合わせ</a>
          </li>
        </ul>
      </nav>
      <!-- /hnav -->
      
      <!-- スマホ用logo -->
      <a class="splogo" href="/">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Frame 2571.png" alt="logo-topback">
      </a>
      <!-- /スマホ用logo -->
      <!-- スマホ用メニューボタン -->
      <img id="sp-menu" src="<?php echo get_template_directory_uri(); ?>/img/SP_MenuDefault.png" alt="メニューを開く" onclick="document.getElementById('sp-nav').style.display='block'">
      <!-- スマホ用メニュー -->
      <nav id="sp-nav">
        <div class="sp-nav-menu-wrap">
          <div class="sp-nav-logo-menu">
            <a id="sp-logo" href="/" onclick="document.getElementById('sp-nav').style.display='none'">
              <img src="<?php echo get_template_directory_uri(); ?>/img/Frame 2571.png" alt="トップページに戻る">
            </a>
            <img id="close" src="<?php echo get_template_directory_uri(); ?>/img/SP_MenuClose.png" alt="メニューを閉じる" onclick="document.getElementById('sp-nav').style.display='none'">
          </div>

          <div class="sp-nav-container">
            <h3>メニュー</h3>
            <a class="menu" href="/" onclick="document.getElementById('sp-nav').style.display='none'">ホーム</a>
            <a class="menu" href="<?php echo home_url(); ?>/about" onclick="document.getElementById('sp-nav').style.display='none'">当院について</a>
            <a class="menu" href="<?php echo home_url(); ?>/course" onclick="document.getElementById('sp-nav').style.display='none'">コース・料金</a>
            <a class="menu" href="<?php echo home_url(); ?>/news" onclick="document.getElementById('sp-nav').style.display='none'">お知らせ</a>
            <a class="menu" href="<?php echo home_url(); ?>/voice" onclick="document.getElementById('sp-nav').style.display='none'">お客様の声</a>
            <a class="menu menu-contact" href="<?php echo home_url(); ?>/contact" onclick="document.getElementById('sp-nav').style.display='none'">ご予約・お問い合わせ</a>
          </div>
        </div>

        <div class="sp-info-wrap">
          <h3>お知らせ</h3>
          <?php
            //取得したい投稿記事などの条件を引数として渡す
            $args = array(
              // 投稿タイプ
              'post_type' => 'post',
              // 1ページに表示する投稿数
              'posts_per_page' => 3, 
            );
            // データの取得
            $posts = get_posts($args);
          ?>
          <!-- ループ処理 -->
          <?php foreach($posts as $post): ?>
          <?php setup_postdata($post); ?>
            <div class="sp-info-text">
              <p><?php echo get_the_date(); ?></p>
              <p><?php the_title(); ?></p>
            </div>
          <?php endforeach; ?>
          <!-- 使用した投稿データをリセット -->
          <?php wp_reset_postdata(); ?>
        </div>

      </nav>
      <!-- /スマホ用メニュー -->
    </div>
    <!-- /inner -->
  </header>
  <!-- /header -->

  <!-- main -->
  <main>
    <div class="mv-container">
      <!-- mv-text-wrap -->
      <div class="mv-text-wrap"> 
        <h2>根本的な症状改善を<br>サポートします</h2>
      </div>
      <!-- /mv-text-wrap -->
      <!-- carousel-mv-img -->
      <div class="carousel">
        <div class="mv-img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/index/SP-TOP-Carouselgroup1.png" media="(max-width:767px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/index/TOP-Carouselgroup1.png" alt="top-carousel1">
          </picture>
        </div>
        <div class="mv-img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/index/SP-TOP-Carouselgroup2.png" media="(max-width:767px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/index/TOP-Carouselgroup2.png" alt="top-carousel2">
          </picture>
        </div>
        <div class="mv-img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/index/SP-TOP-Carouselgroup3.png" media="(max-width:767px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/index/TOP-Carouselgroup3.png" alt="top-carousel3">
          </picture>
        </div>
        <div class="mv-img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/index/SP-TOP-Carouselgroup4.png" media="(max-width:767px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/index/TOP-Carouselgroup4.png" alt="top-carousel4">
          </picture>
        </div>
      </div>
      <!-- /carousel-mv-img -->
    </div>
  </main>
  <!-- /main -->

  <!-- news -->
  <section id="news">
    <div class="info-container">
      <p class="news">News  <span class="info-text">お知らせ</span></p>
      <?php
        //取得したい投稿記事などの条件を引数として渡す
        $args = array(
          // 投稿タイプ
          'post_type' => 'post',
          // 1ページに表示する投稿数
          'posts_per_page' => 1, 
        );
        // データの取得
        $posts = get_posts($args);
      ?>
      <!-- ループ処理 -->
      <?php foreach($posts as $post): ?>
      <?php setup_postdata($post); ?>
      <div class="info-wrap">
        <p class="date"><?php echo get_the_date(); ?>
          <span class="<?php echo get_the_category()[0]->slug; ?>">
            <?php echo get_the_category()[0]->name; ?>
          </span>
        </p>
        <p class="info-nyh"><?php the_title(); ?></p>
      </div>
      <a class="info" href="<?php echo home_url(); ?>/news">→ お知らせ一覧へ</a>
      <?php endforeach; ?>
      <!-- 使用した投稿データをリセット -->
      <?php wp_reset_postdata(); ?>
    </div>
  </section>
  <!-- /news -->

  <!-- concept -->
  <section id="about">
    <!-- concept-container -->
    <div class="concept-container">
      <!-- concept-text-wrap -->
      <div class="concept-text-wrap">
        <h4 class="concept-title">
          Concept<br>
          <span>特長</span>
        </h4>
        <h3 class="concept-message">
          日々変化する<br>
          カラダと心を癒す<br>
          パーソナル<br>
          トレーナーとして
        </h3>
        <p class="concept-text">
          当院では、問診にてお客様の症状や生活スタ<br>
          イル、ご希望を丁寧にお伺いした上で施術<br>
          方針を立てていきます。<br>

          <br>

          また、根本的に症状を改善するために、お客<br>
          様ご自身で行えるケアやストレッチもお伝え<br>
          します。<br>

          <br>

          ご不安な点や疑問点などお気軽にご相談くだ<br>
          さいませ。<br>

          <br>
        </p>
        <a class="button about-button" href="<?php echo home_url(); ?>/about">→ 当院について</a>
      </div>
      <!-- /concept-text-wrap -->
      <!-- concept-img-wrap -->
      <div class="concept-img-wrap">
        <div class="concept-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/Concept-Imagegroup.png" alt="マッサージ写真">
        </div>
      </div>
      <!-- /concept-img-wrap -->
    </div>
    <!-- /concept-container -->
  </section>
  <!-- /concept -->

  <!-- course -->
  <section id="course">
    <!-- course-container -->
    <div class="course-container">
      <!-- course-title-wrap -->
      <div class="course-title-wrap">
        <h4 class="course-title">コース・料金</h4>
        <h4 class="course-message">
          当院では保険診療、自費診療と<br>
          もにご対応しております
        </h4>
      </div>
      <!-- /course-title-wrap -->
      <!-- courses-wrap -->
      <div class="courses-wrap">
        <!-- course1 -->
        <div class="course1">
          <img src="<?php echo get_template_directory_uri(); ?>/img/TOP-insurance1.png" alt="保険診療写真">
          <div class="course1-title-wrap">
            <h4 class="course1-title">保険診療</h4>
            <ul>
              <li><p>骨折・打撲・捻挫・脱臼</p></li>
              <li><p>スポーツ診療</p></li>
              <li><p>交通事故</p></li>
            </ul>
          </div>
        </div>
        <!-- /course1 -->
        <!-- course2 -->
        <div class="course2">
          <img src="<?php echo get_template_directory_uri(); ?>/img/TOP-self1.png" alt="自費診療写真">
          <div class="course2-title-wrap">
            <h4 class="course2-title">自費診療</h4>
            <ul>
              <li><p>腰痛・肩こり</p></li>
              <li><p>冷え性・だるさ</p></li>
              <li><p>骨盤・背骨矯正</p></li>
            </ul>
          </div>
        </div>
        <!-- /course2 -->
      </div>
      <!-- /course-wrap -->
      <a class="button course-button" href="<?php echo home_url(); ?>/course">→ コース・料金詳細へ</a>
    </div>
    <!-- /course-container -->
  </section>
  <!-- /course -->

  <!-- customer -->
  <section id="voice">
    <!-- carousel-bottom-img -->
    <div class="carousel-bottom">
      <div class="bottom-img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/index/SP-Bottom-Carouselgroup1.png" media="(max-width:767px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/index/Bottom-Carouselgroup1.png" alt="bottom-img1">
        </picture>
      </div>
      <div class="bottom-img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/index/SP-Bottom-Carouselgroup2.png" media="(max-width:767px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/index/Bottom-Carouselgroup2.png" alt="bottom-img2">
        </picture>
      </div>
      <div class="bottom-img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/index/SP-Bottom-Carouselgroup3.png" media="(max-width:767px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/index/Bottom-Carouselgroup3.png" alt="bottom-img3">
        </picture>
      </div>
    </div>
    <!-- /carousel-bottom-img -->
    <div class="customer-title">
      <img src="<?php echo get_template_directory_uri(); ?>/img/index/Subtract.png" alt="半楕円">
      <h4>お客様の声</h4>
    </div>
    <!-- customer-container -->
    <div class="customer-container">
      <h4>
        痛みの改善に加えて自分で予防<br>
        もできるようになりました
      </h4>
      <!-- customers-wrap -->
      <div class="customers-wrap">
        <!-- customer1 -->
        <div class="customer1">
          <img src="<?php echo get_template_directory_uri(); ?>/img/TOP-user1.png" alt="お客様写真1">
          <h4>S・K様　30代女性</h4>
          <p>
            1ヶ月で腰の痛みが軽減しまし<br>
            た。自分で自宅でできるケアも<br>
            教えていただき、お任せしてよ<br>
            かったです。
          </p>
        </div>
        <!-- /customer1 -->
        <!-- customer2 -->
        <div class="customer2">
          <img src="<?php echo get_template_directory_uri(); ?>/img/TOP-user2.png" alt="お客様写真2">
          <h4>T・M様　40代男性</h4>
          <p>
            マラソンで右膝が痛むので、施<br>
            術を受けています。なぜ痛みが<br>
            生じるのかを身体の仕組みか<br>
            ら教えていただき、普段の練習<br>
            メニューも工夫できています。
          </p>
        </div>
        <!-- /customer2 -->
        <!-- customer3 -->
        <div class="customer3">
          <img src="<?php echo get_template_directory_uri(); ?>/img/TOP-user3.png" alt="お客様写真3">
          <h4>S・T様　60代女性</h4>
          <p>
            転倒して足を骨折したのをきっ<br>
            かけに、痛みの軽減と筋肉の衰<br>
            えを防ぐための方針を立てて<br>
            いただいています。今は毎日元<br>
            気に近所を散歩できています。
          </p>
        </div>
        <!-- /customer3 -->
      </div>
      <!-- /customer-wrap -->
      <a class="button customer-button" href="<?php echo home_url(); ?>/voice">→ お客様の声一覧へ</a>
    </div>
    <!-- /customer-container -->
  </section>
  <!-- /customer -->

<?php get_footer(); ?>