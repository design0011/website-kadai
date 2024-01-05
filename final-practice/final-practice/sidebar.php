<div class="news-info-category">
  <h3>カテゴリ</h3>
  <?php
    $args = array(
      'hide_empty' => 0, // 投稿記事があるカテゴリーのみ表示'1'、ないものも表示'0'
      'title_li' => '',  // リストの外側に表示するタイトルと表示形式（''であれば何も表示しない）
    );
    wp_list_categories( $args ); 
  ?>
</div>