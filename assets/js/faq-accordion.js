/**
 * FAQ accordion with synchronized icon & panel animations
 */
(() => {
  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const wrapPanel = (details) => {
    let panel = details.querySelector('.faq-panel');
    if (panel) return panel;

    const frag = document.createDocumentFragment();
    [...details.children].forEach((el) => {
      if (el.tagName.toLowerCase() !== 'summary') frag.appendChild(el);
    });

    panel = document.createElement('div');
    panel.className = 'faq-panel';
    panel.appendChild(frag);
    details.appendChild(panel);
    return panel;
  };

  const animateHeight = (el, from, to, cb) => {
    el.getAnimations().forEach((a) => a.cancel());
    if (prefersReduced) { el.style.height = ''; cb && cb(); return; }
    const anim = el.animate(
      [{ height: `${from}px` }, { height: `${to}px` }],
      { duration: 200, easing: 'cubic-bezier(.2,.6,.2,1)' }
    );
    anim.onfinish = anim.oncancel = () => { el.style.height = ''; cb && cb(); };
  };

  const openWithAnim = (panel) => {
    panel.style.height = 'auto';
    const end = panel.scrollHeight;
    panel.style.height = '0px';
    requestAnimationFrame(() => animateHeight(panel, 0, end));
  };

  const closeWithAnim = (panel, after) => {
    const start = panel.getBoundingClientRect().height;
    if (start === 0) { after && after(); return; }
    animateHeight(panel, start, 0, after);
  };

  const initAccordion = (accordion) => {
    const items = accordion.querySelectorAll('details');
    if (!items.length) return;

    items.forEach((item) => {
      const panel = wrapPanel(item);
      if (!item.open) panel.style.height = '0px';

      const summary = item.querySelector('summary');
      if (summary) {
        summary.addEventListener('click', (e) => {
          if (item.open) {
            // START closing immediately: sync icon via class
            e.preventDefault();
            item.classList.add('is-closing');
            closeWithAnim(panel, () => {
              item.removeAttribute('open');
              item.classList.remove('is-closing');
            });
          } else {
            // START opening immediately: pre-rotate icon via class
            item.classList.add('is-opening');
            // allow default toggle; 'toggle' handler will clean up class
          }
        });
      }

      item.addEventListener('toggle', () => {
        if (item.open) {
          openWithAnim(panel);
          // Close siblings smoothly (and sync their icons)
          items.forEach((sib) => {
            if (sib !== item && sib.open) {
              const sp = wrapPanel(sib);
              sib.classList.add('is-closing');
              closeWithAnim(sp, () => {
                sib.removeAttribute('open');
                sib.classList.remove('is-closing');
              });
            }
          });
          // opening class no longer needed once open
          item.classList.remove('is-opening');
        } else {
          // If closed programmatically, ensure panel animates and classes cleared
          closeWithAnim(panel, () => item.classList.remove('is-closing'));
        }
      });
    });
  };

  const ready = () => {
    document.querySelectorAll('.faq-accordion').forEach(initAccordion);
  };

  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', ready);
  else ready();
})();
