// jQuery(document).ready(function () {

window.onload = function () {
  const loading = document.querySelector(".p-loading__bg");
  const firstView = document.querySelector(".js-first-view");
  const skills = document.querySelector(".js-skills");
  const slide = document.querySelector(".js-slide");
  const explanation = document.querySelector(".js-explanation");
  const buttonPrev = document.querySelector(".js-button-prev");
  const buttonNext = document.querySelector(".js-button-next");
  const pagination = document.querySelector(".js-pagination");
  const tl = gsap.timeline();

  // １秒待ってからアニメーションを開始
  setTimeout(function () {
    tl.fromTo(loading, 1, { x: "0" }, { x: "100%", ease: "power2.easeInOut" }, "+=1.0")
      .fromTo(firstView, 0.5, { opacity: "0" }, { opacity: "1" })
      .fromTo(skills, 0.5, { opacity: "0" }, { opacity: "1" }, "-=0.5")
      .fromTo(slide, 1, { scale: "0" }, { scale: "1", ease: "power2.easeInOut" })
      .fromTo(explanation, 0.5, { x: "-10%", opacity: "0" }, { x: "0", opacity: "1", ease: "power2.easeInOut" }, "-=0.5")
      .fromTo(buttonPrev, 0.5, { left: "0px", opacity: "0", "--swip-btn-color": "#f77" }, { left: "10px", opacity: "1", ease: "power2.easeInOut" })
      .fromTo(buttonNext, 0.5, { right: "0px", opacity: "0", "--swip-btn-color": "#f77" }, { right: "10px", opacity: "1", ease: "power2.easeInOut" })
      .to(buttonPrev, 0.5, { "--swip-btn-color": "#ff9", ease: "power2.easeInOut" })
      .to(buttonNext, 0.5, { "--swip-btn-color": "#ff9", ease: "power2.easeInOut" }, "-=0.5")
      .fromTo(pagination, 0.5, { x: "-10%", opacity: "0" }, { x: "0", opacity: "1", ease: "power2.easeInOut" })
      .to(loading, { display: "none", duration: 0 }); // 最後にloading要素を非表示にする
  }, 1000);
};
