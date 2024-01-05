<?php get_header(); ?>

  <!-- main -->
  <main>
    <div class="a-mv-container">
      <!-- a-mv-text-wrap -->
      <div class="a-mv-text-wrap"> 
        <h2>About<br>
          <span>当院について</span>
        </h2>
      </div>
      <!-- /a-mv-text-wrap -->
      <!-- a-mv-img-wrap -->
      <div class="a-mv-img-wrap">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/img/about/SP-About.png" media="(max-width:767px)">
          <img src="<?php echo get_template_directory_uri(); ?>/img/about/About.png" alt="About写真">
        </picture>
      </div>
      <!-- /a-mv-img-wrap -->
    </div>
    <!-- breadcrumb -->
    <?php get_template_part('breadcrumb'); ?>
  </main>
  <!-- /main -->

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

  <!-- flow -->
  <section id="flow">
    <!-- flow-container -->
    <div class="flow-container">
      <!-- flow-text-wrap -->
      <div class="flow-text-wrap">
        <h4 class="flow-title">
          Flow<br>
          <span>施術の流れ</span>
        </h4>
        <ol class="flow-text">
          <li><p> 受付</p></li>
          <li><p> 問診票のご記入</p></li>
          <li><p> カウンセリング</p></li>
          <li><p> 施術</p></li>
          <li><p> アフターカウンセリング</p></li>
        </ol>
      </div>
      <!-- /flow-text-wrap -->
      <!-- flow-img-wrap -->
      <div class="flow-img-wrap">
        <div class="flow-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/about/Flow-Imagegroup.png" alt="Flow写真">
        </div>
      </div>
      <!-- /flow-img-wrap -->
    </div>
    <!-- /flow-container -->
  </section>
  <!-- /flow -->

  <!-- root -->
  <section id="root">
    <!-- root-container -->
    <div class="root-container">
      <div class="root-title">
        <h4>根本改善のポイント</h4>
      </div>
      <h4>
        お体の状態や生活習慣、ご要望を丁寧にお伺いします。<br>
        <span class="root-br">ご自身でできるケアなども含めて施術方針をお作りします。</span>
      </h4>
      <!-- roots-wrap -->
      <div class="roots-wrap">
        <!-- root1 -->
        <div class="root1">
          <img src="<?php echo get_template_directory_uri(); ?>/img/about/Point1.png" alt="ポイント写真1">
          <h4>丁寧なカウンセリング</h4>
        </div>
        <!-- /root1 -->
        <!-- root2 -->
        <div class="root2">
          <img src="<?php echo get_template_directory_uri(); ?>/img/about/Point2.png" alt="ポイント写真2">
          <h4>徹底的分析</h4>
        </div>
        <!-- /root2 -->
        <!-- root3 -->
        <div class="root3">
          <img src="<?php echo get_template_directory_uri(); ?>/img/about/Point3.png" alt="ポイント写真3">
          <h4>施術計画のご提案</h4>
        </div>
        <!-- /root3 -->
      </div>
      <!-- /roots-wrap -->
    </div>
    <!-- /root-container -->
  </section>
  <!-- /root -->

<?php get_footer(); ?>