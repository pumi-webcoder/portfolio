window.onload = function () {
  const loading = document.querySelector(".p-loading__bg");
  const firstView = document.querySelector(".js-first-view");
  const skills = document.querySelector(".js-skills");
  const slide = document.querySelector(".js-slide");
  const explanation = document.querySelector(".js-explanation");
  const buttonPrev = document.querySelector(".js-button-prev");
  const buttonNext = document.querySelector(".js-button-next");
  const pagination = document.querySelector(".js-pagination");
  const tl = gsap.timeline({
    defaults: { ease: "power2.inOut" }, // 共通のイージングを設定（最初と最後がゆっくり）
    onComplete: () => {
      loading.style.display = "none";
    }, // 処理が全て終わった後にloadingを非表示にする
  });

  tl.to({}, { duration: 0.5 }) // 空のオブジェクトに対するアニメーションで遅延を実現
    // ローディング画面を非表示にする
    .fromTo(loading, { x: "0" }, { x: "100%", duration: 1 })
    // firstView、skills、slide、explanation、paginationをフェードインさせる
    .fromTo([firstView, skills], { opacity: 0 }, { opacity: 1, duration: 0.5, stagger: 0.5 }) //stagger: fvとskの開始を0.5秒ずらす
    .fromTo(slide, { scale: 0 }, { scale: 1, duration: 1 }, "<")
    .fromTo([explanation, pagination], { x: "-10%", opacity: 0 }, { x: 0, opacity: 1, duration: 0.5 }, "<")
    // 遅らせてボタンをフェードインさせる
    .fromTo([buttonPrev, buttonNext], { opacity: 0, "--swip-btn-color": "white" }, { opacity: 1, "--swip-btn-color": "yellow", duration: 1 })
    // ボタンを中央に寄せる
    .fromTo(buttonPrev, { left: "0px" }, { left: "10px", duration: 0.5 })
    .fromTo(buttonNext, { right: "0px" }, { right: "10px", duration: 0.5 }, "<")
    // ボタンの円周の線を表示させる
    .to([buttonPrev, buttonNext], {
      duration: 0.1,
      onStart: function () {
        buttonPrev.classList.add("appear");
        buttonNext.classList.add("appear");
      },
    })
    // 円周の線の表示に0.5sかかるので待つ
    // .to({}, { duration: 0.5 })
    // ボタンを左右に振動させる
    // .to(buttonPrev, { x: -5, duration: 0.1, repeat: 5, yoyo: true })
    // .to(buttonNext, { x: 5, duration: 0.1, repeat: 5, yoyo: true }, "<")
    // ボタンの円周の線を消す
    // .to(
    //   [buttonPrev, buttonNext],
    //   {
    //     duration: 0.1,
    //     onStart: function () {
    //       buttonPrev.classList.remove("appear");
    //       buttonNext.classList.remove("appear");
    //     },
    //   },
    //   "<"
    // )
    // 円周の線の表示に0.5sかかるので待つ
    .to({}, { duration: 0.5 })
    // ボタンの色を最終的な色に変更する
    .to([buttonPrev, buttonNext], { "--swip-btn-color": "#ff9", duration: 0.5 })
    .to([buttonPrev, buttonNext], {
      duration: 0.1,
      onStart: function () {
        buttonPrev.classList.add("end");
        buttonNext.classList.add("end");
      },
    });
};
