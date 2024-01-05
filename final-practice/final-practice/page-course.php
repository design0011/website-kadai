<?php get_header(); ?>

  <!-- main -->
  <main>
    <div class="a-mv-container">
      <!-- a-mv-text-wrap -->
      <div class="a-mv-text-wrap"> 
        <h2>Price<br>
          <span>コース・料金</span>
        </h2>
      </div>
      <!-- /a-mv-text-wrap -->
      <!-- a-mv-img-wrap -->
      <div class="a-mv-img-wrap">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/course/SP-Courseprice.png" media="(max-width:767px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/course/Courseprice.png" alt="Course写真">
        </picture>
      </div>
      <!-- /a-mv-img-wrap -->
    </div>
    <!-- breadcrumb -->
    <?php get_template_part('breadcrumb'); ?>
  </main>
  <!-- /main -->

  <!-- course -->
  <section id="course2">
    <!-- course-container -->
    <div class="course-container2">
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
    </div>
    <!-- /course-container -->
  </section>
  <!-- /course -->

  <!-- mt-course -->
  <section id="mt-course">
    <!-- mt-container -->
    <div class="mt-container">
      <!-- mt-text-wrap -->
      <div class="mt-text-wrap">
        <h4 class="mt-title">
          Insurance<br>
          <span>保険診療</span>
        </h4>
        <p class="mt-text">
          健康保険の適用は、慢性化していない、急性のけがの<br>
          みが対象となります。<br>
          「負傷原因が急性または亜急性（急性に準ずる）の外<br>
          傷性の負傷」のみです。
        </p>
        <ul>
          <li><p>骨折・打撲・捻挫・脱臼</p></li>
          <li><p>スポーツ診療</p></li>
          <li><p>交通事故</p></li>
        </ul>
      </div>
      <!-- /mt-text-wrap -->
      <!-- mt-img-wrap -->
      <div class="mt-img-wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/img/course/TOP-insurance2.png" alt="保険診療写真">
      </div>
      <!-- /mt-img-wrap -->
    </div>
    <!-- /mt-container -->

    <!-- mt-container -->
    <div class="mt-container">
      <!-- mt-text-wrap -->
      <div class="mt-text-wrap">
        <h4 class="mt-title">
          Self-pay<br>
          <span>自費診療</span>
        </h4>
        <p class="mt-text">
          慢性的なご症状、日常生活の疲労やご年齢により生じ<br>
          る痛み緩和の施術は健康保険の適用がなく、全額自己<br>
          負担となります。
        </p>
        <ul>
          <li><p>腰痛・肩こり</p></li>
          <li><p>冷え性・だるさ</p></li>
          <li><p>骨盤・背骨矯正</p></li>
        </ul>
        <p>
          <span class="mt-br">初回&ensp;</span>8,800円（税込） / 50分<br>
          <span class="mt-br mt-br-sec">2回目以降&ensp;</span>6,600円（税込） / 30分
        </p>
      </div>
      <!-- /mt-text-wrap -->
      <!-- mt-img-wrap -->
      <div class="mt-img-wrap">  
        <img src="<?php echo get_template_directory_uri(); ?>/img/course/TOP-self2.png" alt="自費診療写真">  
      </div>
      <!-- /mt-img-wrap -->
    </div>
    <!-- /mt-container -->
  </section>
  <!-- /mt-course -->

<?php get_footer(); ?>