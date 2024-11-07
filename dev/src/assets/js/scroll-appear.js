// 画面の高さを取得
// window.innerHeight

// スクロールした量を取得
// window.scrollY

// 画面の高さとスクロールした量を足す
// window.innerHeight + window.scrollY

// 要素の位置を取得
// document.querySelector(".js-totop").offsetTop

// window.innerHeight + window.scrollY > document.querySelector(".js-totop").offsetTop
// 画面の高さとスクロールした量を足した値が要素の位置より大きい場合

// document.querySelector(".js-totop").classList.add("is-appear-totop");
// 要素にis-appear-totopクラスを追加

// 画面の高さとスクロールした量を足した値が要素の位置より大きい場合、要素にis-appear-totopクラスを追加
// if (window.innerHeight + window.scrollY > document.querySelector(".js-totop").offsetTop) {
//   document.querySelector(".js-totop").classList.add("is-appear-totop");
// }

// DOMの読み込み完了を待つ
document.addEventListener("DOMContentLoaded", function () {
  // スクロールのしきい値を定数として定義
  const SCROLL_THRESHOLD = 300;

  // パフォーマンス向上のためのスロットリング
  let ticking = false;

  window.addEventListener("scroll", function () {
    if (!ticking) {
      window.requestAnimationFrame(function () {
        // スクロール位置を取得
        const scrollPosition = window.scrollY;
        // スクロール位置に応じてクラスを追加または削除
        if (scrollPosition > SCROLL_THRESHOLD) {
          document.querySelector(".js-totop").classList.add("is-appear-totop");
          document.querySelector(".js-scroll-down").classList.remove("is-appear-scroll-down");
        } else {
          document.querySelector(".js-totop").classList.remove("is-appear-totop");
          document.querySelector(".js-scroll-down").classList.add("is-appear-scroll-down");
        }

        ticking = false;
      });

      ticking = true;
    }
  });
});
