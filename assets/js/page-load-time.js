(() => {
  if (window.thekedaarLoadTimeListenerAdded) return;
  window.thekedaarLoadTimeListenerAdded = true;

  const logLoadTime = () => {
    console.log(`Page load time: ${Math.round(performance.now())} ms`);
  };

  if (document.readyState === 'complete') {
    logLoadTime();
  } else {
    window.addEventListener('load', logLoadTime, { once: true });
  }
})();
