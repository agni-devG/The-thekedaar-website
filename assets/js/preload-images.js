(() => {
  const lazyImages = [...document.querySelectorAll('img[loading="lazy"]')];
  if (!lazyImages.length) return;

  const loadImages = (images) => {
    images.forEach((image) => {
      image.loading = 'eager';
      image.removeAttribute('loading');
    });
  };

  if (!('IntersectionObserver' in window)) {
    loadImages(lazyImages);
    return;
  }

  const carouselImages = new Set();
  const carouselObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      loadImages(entry.target.querySelectorAll('img[loading="lazy"]'));
      carouselObserver.unobserve(entry.target);
    });
  }, { rootMargin: '1800px 0px' });

  document.querySelectorAll('.more-info-swiper, .about-interior-swiper').forEach((carousel) => {
    carousel.querySelectorAll('img[loading="lazy"]').forEach((image) => carouselImages.add(image));
    carouselObserver.observe(carousel);
  });

  const imageObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      loadImages([entry.target]);
      imageObserver.unobserve(entry.target);
    });
  }, { rootMargin: '1800px 0px' });

  lazyImages.forEach((image) => {
    if (!carouselImages.has(image)) imageObserver.observe(image);
  });
})();
