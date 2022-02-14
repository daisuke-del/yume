$(function () {
  $('.check').click(function() {
    var checked_length = $('.check:checked').length;

    // 選択上限は3つまで
    if (checked_length >= 3) {
      $('.check:not(:checked)').prop('disabled', true);
    } else {
      $('.check:not(:checked)').prop('disabled', false);
    }
    
  });
});