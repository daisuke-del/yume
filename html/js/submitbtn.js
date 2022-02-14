$(function(){
  // 初期状態のボタンは無効
  $("#btn1").prop("disabled", true);
    // チェックボックスの状態が変わったら（クリックされたら）
    $("input[type='checkbox']").on('change', function () {
        // チェックされているチェックボックスの数
        if ($(".check:checked").length > 0) {
          // ボタン有効
          $("#btn1").prop("disabled", false);
        } else {
          // ボタン無効
          $("#btn1").prop("disabled", true);
        }
    });
});



$(function(){
  $("nav").hide();
  $(".menu-icon").click(function(){//メニューボタンをクリックしたとき
      $("nav").toggle(200);//0.2秒で表示したり非表示にしたりする
  });
});