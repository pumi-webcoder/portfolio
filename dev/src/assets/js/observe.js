function observe(target, callback) {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        callback();
        observer.disconnect();
      }
    });
  });

  if (typeof target === "string") {
    document.querySelector(target) && observer.observe(document.querySelector(target));
  } else if (target instanceof Element) {
    observer.observe(target);
  }
}

observe(".anime-shutter", () => console.log("表示されました"));
