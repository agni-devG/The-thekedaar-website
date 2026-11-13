(() => {
  if (window.thekedaarImageParallaxInitialized) return;
  window.thekedaarImageParallaxInitialized = true;

  const images = [...document.querySelectorAll(
    '.why-us-image img, .more-info-img img, .more-info-img-in img, .enhance-section img'
  )];
  if (!images.length) return;

  const items = images.map((image) => {
    if (image.closest('.enhance-section') && !image.parentElement.classList.contains('enhance-parallax-frame')) {
      const imageStyles = window.getComputedStyle(image);
      const frame = document.createElement('div');
      frame.className = 'enhance-parallax-frame';
      frame.style.margin = imageStyles.margin;
      image.style.margin = '0';
      image.parentNode.insertBefore(frame, image);
      frame.appendChild(image);
    }

    return { image, y: 0, targetY: 0 };
  });

  let frame = 0;
  let lastTime = 0;

  const animate = (time) => {
    frame = 0;
    const ease = 1 - Math.exp(-(time - (lastTime || time - 16.7)) / 100);
    lastTime = time;
    let moving = false;

    items.forEach((item) => {
      item.y += (item.targetY - item.y) * ease;
      item.image.style.setProperty('--scroll-y', `${item.y}px`);
      if (Math.abs(item.targetY - item.y) > 0.1) moving = true;
    });

    if (moving) frame = requestAnimationFrame(animate);
    else lastTime = 0;
  };

  const update = () => {
    const viewportHeight = window.innerHeight;
    items.forEach((item) => {
      const bounds = item.image.parentElement.getBoundingClientRect();
      const progress = Math.max(0, Math.min(1,
        (viewportHeight - bounds.top) / (viewportHeight + bounds.height)
      ));
      item.targetY = (progress * 2 - 1) * bounds.height * 0.1;
    });
    if (!frame) frame = requestAnimationFrame(animate);
  };

  window.addEventListener('scroll', update, { passive: true });
  window.addEventListener('resize', update);
  window.addEventListener('load', update, { once: true });
  update();
})();
