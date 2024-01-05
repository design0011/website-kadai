$(function(){
  
  // トップカルーセル
  $('.carousel').slick({
    autoplay: true,
    dots: true,
    infinite: true,
    autoplaySpeed: 3000,
    speed: 2000,
    arrows: false,
  });

  // ボトムカルーセル
  $('.carousel-bottom').slick({
    autoplay: true,
    dots: false,
    infinite: true,
    autoplaySpeed: 3000,
    speed: 2000,
    arrows: false,
  });

  // 400pxを境にTOPに戻るボタンの表示・非表示を切り替える  
  $(window).scroll(function () {
    if ($(this).scrollTop() > 400) {
      $('.pagetop').fadeIn();
    } else {
      $('.pagetop').fadeOut();
    }
  });

  // 400pxを境にヘッダーの表示・非表示を切り替える  
  $(window).scroll(function () {
    if ($(this).scrollTop() < 400) {
      $('#header').fadeIn();
    } else {
      $('#header').fadeOut();
    }
  });

  // お問い合わせフォームの入力チェック
  function inputCheck() {
    // エラーのチェック結果
    let result;
  
    // エラーメッセージのテキスト
    let message = '';

    // エラーがなければfalse、エラーがあればtrue
    let error = false;

    // 氏名のチェック
    if ($('#name').val() == '') {
      // エラーあり
      $('#name').css('background-color', '#f79999');
      error = true;
      message += 'お名前を入力してください。\n';
    } else {
      // エラーなし
      $('#name').css('background-color', '#fafafa');
    }

    // フリガナのチェック
    if ($('#hurigana').val() == '') {
      // エラーあり
      $('#hurigana').css('background-color', '#f79999');
      error = true;
      message += 'フリガナを入力してください。\n';
    } else {
      // エラーなし
      $('#hurigana').css('background-color', '#fafafa');
    }

    // 電話番号のチェック
    if ($('#phone').val() == '' ||
        $('#phone').val().indexOf('-') == -1) {
      // エラーあり
      $('#phone').css('background-color', '#f79999');
      error = true;
      message += '電話番号が未入力、または「-」が含まれていません。\n';
    } else {
      // エラーなし
      $('#phone').css('background-color', '#fafafa');
    }

    // メールアドレスのチェック
    if ($('#email').val() == '' ||
        $('#email').val().indexOf('@') == -1 ||
        $('#email').val().indexOf('.') == -1) {
      // エラーあり
      $('#email').css('background-color', '#f79999');
      error = true;
      message += 'メールアドレスが未入力、または「@」「.」が含まれていません。\n';
    } else {
      // エラーなし
      $('#email').css('background-color', '#fafafa');
    }

    // セレクトボックスのチェック
    if ($('#problem').val() == '') {
      // エラーあり
      $('#problem').css('background-color', '#f79999');
      error = true;
      message += 'お悩みの項目が未選択です。\n';
    } else {
      // エラーなし
      $('#problem').css('background-color', '#fafafa');
    }

    // オブジェクトでエラー判定とメッセージを返す
    result = {
      error: error,
      message: message
    }

    // 戻り値としてエラーがあるかどうかを返す
    return result;
  }

  // フォーカスが外れたとき（blur）にフォームの入力チェックをする
  $('#name').blur(function () {
    inputCheck();
  });
  $('#hurigana').blur(function () {
    inputCheck();
  });
  $('#phone').blur(function () {
    inputCheck();
  });
  $('#email').blur(function () {
    inputCheck();
  });
  $('#problem').blur(function () {
    inputCheck();
  });

  // 最終入力チェック後、STATIC FORMSでデータを送信
  $('#submit').on('click', function (event) {
    // 入力チェックをした結果、エラーがあるかないか判定
    let result = inputCheck();

    // エラー判定とメッセージを取得
    let error = result.error;
    let message = result.message;

    // エラーが無かったらフォームを送信する
    if (error == false) {
      // formを送信する
    } else {
      // エラーメッセージを表示する
      alert(message);
      // formタグによる送信を拒否
      event.preventDefault();
    }
  });
  
});
