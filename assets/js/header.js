/**
 * Header transparency → solid on scroll
 * Requires .site-header with classes: is-transparent (default) and is-solid (on scroll)
 */
(() => {
  const header = document.querySelector('.art-site-header');
  if (!header) return;

  const THRESHOLD = 24; // px before switching to solid
  let solid = false, rafId = null;

  // Duration should match your CSS transition duration (ms)
  const FADE_DURATION = 300;

  const update = () => {
    const shouldBeSolid = window.scrollY > THRESHOLD;
    if (shouldBeSolid !== solid) {
      solid = shouldBeSolid;
      header.classList.add('is-fading');
      header.classList.toggle('is-solid', solid);
      setTimeout(() => {
        header.classList.remove('is-fading');
      }, FADE_DURATION);
    }
    rafId = null;
  };

  const onScroll = () => {
    if (rafId === null) rafId = requestAnimationFrame(update);
  };

  // Run on load and on scroll
  update();
  window.addEventListener('scroll', onScroll, { passive: true });
})();
