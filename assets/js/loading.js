{
  window.onload = function () {
    // 1秒待ってからloadediengのクラスを付与する
    setTimeout(function () {
      jQuery(".p-loading__bg").addClass("loaded");
    }, 1000);
    // 2秒待ってからdisplay:none;する
    setTimeout(function () {
      jQuery(".p-loading__bg").css("display", "none");
    }, 2000);
  };
}
