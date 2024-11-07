function observe(target, callback) {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        callback(entry.target); // entry.targetを渡す→elementにtargetが入る
        observer.disconnect();
      }
    });
  });

  if (typeof target === "string") {
    // targetが文字列の場合はquerySelectorで要素を取得し、監視を開始
    document.querySelector(target) && observer.observe(document.querySelector(target));
  } else if (target instanceof Element) {
    // targetがElementの場合はそのまま監視を開始
    observer.observe(target);
  }
}

// .anime-shutterが画面に表示されたらis-shutter-openクラスを追加
observe(".anime-shutter", (element) => {
  element.classList.add("is-shutter-open");
});
