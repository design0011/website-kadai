<!-- contact -->
<section id="contact">
    <!-- access-container -->
    <div class="access-container">
      <h4>お気軽にご来院ください</h4>
      <!-- access-wrap -->
      <div class="access-wrap">
        <!-- access-address -->
        <div class="access-address">
          <h4>JR「秋葉原駅」より徒歩1分</h4>
          <p>
            〒101-0022<br>
            東京都千代田区神田練塀町300番地<br>
            住友不動産秋葉原駅前ビル 5F
          </p>
          <h4 class="tel-num"><span>tel:</span> 03-1234-5678</h4>
          <table>
            <tr>
              <th>営業時間</th>
              <th>月</th>
              <th>火</th>
              <th>水</th>
              <th>木</th>
              <th>金</th>
              <th>土</th>
              <th>日</th>
            </tr>
            <tr>
              <td>9:00〜12:30</td>
              <td>●</td>
              <td>●</td>
              <td>−</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
            </tr>
            <tr>
              <td>15:30〜20:00</td>
              <td>●</td>
              <td>●</td>
              <td>−</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
              <td>●</td>
            </tr>
          </table>
          <a class="contact-button" href="<?php echo home_url(); ?>/contact">ご予約・お問い合わせはこちらから</a>
        </div>
        <!-- /access-address -->
        <!-- access-map -->
        <div class="access-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.0686781124004!2d139.77207767623182!3d35.69992752894608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188fee13660e23%3A0x77137876edf742ac!2z5L2P5Y-L5LiN5YuV55Sj56eL6JGJ5Y6f6aeF5YmN44OT44Or!5e0!3m2!1sja!2sjp!4v1702514604566!5m2!1sja!2sjp" width="509" height="418" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- /access-map -->
      </div>
      <!-- /access-wrap -->
    </div>
    <!-- /access-container -->
  </section>
  <!-- /contact -->
  <!-- footer -->
  <footer id="footer">
    <!-- inner -->
    <div class="f-inner">
      <!-- flogo -->
      <img src="<?php echo get_template_directory_uri(); ?>/img/Frame 2259.png" alt="logo-topback">
      <!-- /flogo -->
      <!-- hnav -->
      <nav id="fnav">
        <ul class="fnav-list">
          <li class="fnav-item">
            <a href="/">TOP</a>
          </li>
          <li class="fnav-item">
            <a href="<?php echo home_url(); ?>/about">当院について</a>
          </li>
          <li class="fnav-item">
            <a href="<?php echo home_url(); ?>/course">コース・料金</a>
          </li>
          <li class="fnav-item">
            <a href="<?php echo home_url(); ?>/news">お知らせ</a>
          </li>
          <li class="fnav-item">
            <a href="<?php echo home_url(); ?>/voice">お客様の声</a>
          </li>
          <li class="fnav-item">
            <a href="<?php echo home_url(); ?>/contact">ご予約・お問い合わせ</a>
          </li>
        </ul>
      </nav>
      <!-- /fnav -->
    </div>
    <!-- /inner -->
    <!-- copyright -->
    <div class="c-right">
      <p>&copy;2023 SAMURAI整体院</p>
    </div>
  </footer>
  <!-- /footer -->

  <!-- TOPに戻るボタン -->
  <div id="to-pagetop">
    <div class="pagetop-wrap">
      <a href="#" class="pagetop"><img src="<?php echo get_template_directory_uri(); ?>/img/btn_Back.png" alt="pagetop-btn"></a>
    </div>
  </div>
  <!-- /TOPに戻るボタン -->

  <!-- jQueryをCDN経由で読み込む -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- slickをCDN経由で読み込む -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- JavaScript -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

  <?php wp_footer(); ?>

</body>
</html>