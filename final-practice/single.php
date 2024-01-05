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

  <!-- news-topic -->
  <section id="news-topic">
    <div class="news-topic-container">
      <!-- news-topic-wrap -->
      <div class="news-topic-wrap">
        
          <div class="news-topic-detail">
            <div class="news-topic-text">
              <h3><?php the_title(); ?></h3>
              <p><?php echo get_the_date(); ?>
                <span class="<?php echo get_the_category()[0]->slug; ?>">
                  <?php echo get_the_category()[0]->name; ?>
                </span>
              </p>
            </div>
            <div class="news-topic-img">
              <?php the_post_thumbnail(); ?>
            </div>
            <!-- コンテンツ -->
            <div class="article-titles">
              <?php the_content(); ?>
            </div>
            <!-- /コンテンツ -->
          </div>
        
        <!-- pager -->
        <div class="pager">
          <?php previous_post_link('%link', '&lt;&emsp;前の記事へ'); ?>
          <a class="article list" href="<?php echo home_url(); ?>/news"><span class="info-none">お知らせ</span>一覧</a>
          <?php next_post_link('%link', '次の記事へ&emsp;&gt;' ); ?>
        </div>
        <!-- /pager -->
      </div>
      <!-- /news-topic-wrap -->

      <!-- sidebar -->
      <?php get_sidebar(); ?>
      <!-- /sidebar -->
    </div>
  </section>
  <!-- /news-info -->

<?php get_footer(); ?>