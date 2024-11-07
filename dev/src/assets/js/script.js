jQuery(document).ready(function ($) {
  //スクロール後処理__画面最上部からtargetの場所を超えたら起動
  jQuery(window).on("scroll", function () {
    var target = 300;
    if (jQuery(this).scrollTop() > target) {
      jQuery("body").addClass("is-scroll");
    } else {
      jQuery("body").removeClass("is-scroll");
    }
  });
});
