<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="About 当院について">
  <title>SAMURAI整体院-デモサイト-</title>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Noto+Sans+JP&family=Shippori+Mincho&display=swap" rel="stylesheet">

  <!-- slick読み込み -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  
  <?php wp_head(); ?>
</head>

<body>
  <!-- about-header -->
  <header id="about-header">
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
          <li class="a-hnav-item">
            <a href="/">ホーム</a>
          </li>
          <li class="a-hnav-item">
            <a href="<?php echo home_url(); ?>/about">当院について</a>
          </li>
          <li class="a-hnav-item">
            <a href="<?php echo home_url(); ?>/course">コース・料金</a>
          </li>
          <li class="a-hnav-item">
            <a href="<?php echo home_url(); ?>/news">お知らせ</a>
          </li>
          <li class="a-hnav-item">
            <a href="<?php echo home_url(); ?>/voice">お客様の声</a>
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
  <!-- /about-header -->
