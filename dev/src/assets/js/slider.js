jQuery(document).ready(function () {
  // Swiperの初期化
  const swiper = new Swiper(".swiper", {
    speed: 500, // 次の画像を読み込む速さ
    loop: true,
    loopedSlides: 7,
    autoplay: {
      delay: 5000, // 次の画像に切替する時間
      disableOnInteraction: false, // スライドのドラッグ等の操作時でも自動再生を無効にしない
    },
    effect: "fade", // フワッと切替
    fadeEffect: {
      crossFade: true, // 画像が重ならないように制御
    },
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // Swiperの初動を遅らせる
  swiper.autoplay.stop();
  setTimeout(() => {
    swiper.autoplay.start();
  }, 5000);

  // モーダル表示時にスライドを停止し、モーダルを閉じたらスライドを再開する
  jQuery(".js-modal__btn--open").on("click", function () {
    // モーダル表示時にスライドを止める
    if (swiper.autoplay) {
      swiper.autoplay.stop();
    }
  });

  jQuery(".js-modal__btn--close").on("click", function () {
    // モーダルを閉じたらスライドを再開する
    if (swiper.autoplay) {
      swiper.autoplay.start();
    }
  });
});

// jQuery(document).ready(function ($) {
//   // Swiperの初期化
//   const swiper = new Swiper(".swiper", {
//     speed: 500, // 次の画像を読み込む速さ
//     loop: true,
//     loopedSlides: 7,
//     autoplay: {
//       delay: 5000, // 次の画像に切替する時間
//       disableOnInteraction: false, // スライドのドラッグ等の操作時でも自動再生を無効にしない
//     },
//     effect: "fade", // フワッと切替
//     fadeEffect: {
//       crossFade: true, // 画像が重ならないように制御
//     },
//     pagination: {
//       el: ".swiper-pagination",
//       type: "bullets",
//       clickable: true,
//     },
//     navigation: {
//       nextEl: ".swiper-button-next",
//       prevEl: ".swiper-button-prev",
//     },
//   });

//   // モーダル表示時にスライドを停止し、モーダルを閉じたらスライドを再開する
//   $(".js-modal__btn--open").on("click", function () {
//     // モーダル表示時にスライドを止める
//     if (swiper.autoplay) {
//       swiper.autoplay.stop();
//     }
//   });

//   $(".js-modal__btn--close").on("click", function () {
//     // モーダルを閉じたらスライドを再開する
//     if (swiper.autoplay) {
//       swiper.autoplay.start();
//     }
//   });
// });
