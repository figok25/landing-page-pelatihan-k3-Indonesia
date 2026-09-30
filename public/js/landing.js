document.addEventListener('DOMContentLoaded', () => {
  // Mobile menu
  const burger = document.getElementById('burger'), menu = document.getElementById('menu');
  if (burger && menu) {
    burger.addEventListener('click', () => {
      const o = menu.classList.toggle('open');
      burger.setAttribute('aria-expanded', o);
      burger.firstElementChild.className = o ? 'bx bx-x' : 'bx bx-menu';
    });
    menu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => menu.classList.remove('open')));
    menu.querySelectorAll('.dd > button').forEach(b => b.addEventListener('click', () => b.parentElement.classList.toggle('open')));
  }

  // Hero slideshow
  const slides = document.querySelectorAll('.slide'), dots = document.querySelectorAll('#heroDots button');
  let i = 0, timer;
  const show = n => {
    i = n;
    slides.forEach((s, k) => s.classList.toggle('on', k === n));
    dots.forEach((d, k) => d.classList.toggle('on', k === n));
  };
  const loop = () => { clearInterval(timer); timer = setInterval(() => show((i + 1) % slides.length), 5000); };
  dots.forEach((d, k) => d.addEventListener('click', () => { show(k); loop(); }));
  if (slides.length > 1) loop();

  // Scroll panels (katalog & wilayah): jump, scroll-spy, search
  document.querySelectorAll('[data-pane]').forEach(pane => {
    const nav = pane.querySelector('.pane-nav'), body = pane.querySelector('.pane-body');
    const btns = [...nav.querySelectorAll('button')], groups = [...body.querySelectorAll('.grp')];
    const empty = body.querySelector('.empty');
    const input = pane.parentElement.querySelector('[data-filter]');
    let lock = false;

    const setOn = b => {
      btns.forEach(x => x.classList.toggle('on', x === b));
      nav.scrollTo({ top: b.offsetTop - nav.clientHeight / 2 + b.offsetHeight / 2, left: b.offsetLeft - nav.clientWidth / 2 + b.offsetWidth / 2, behavior: 'smooth' });
    };

    btns.forEach(b => b.addEventListener('click', () => {
      const g = document.getElementById(b.dataset.target);
      if (!g || g.hidden) return;
      lock = true; setOn(b);
      body.scrollTo({ top: g.offsetTop, behavior: 'smooth' });
      setTimeout(() => lock = false, 700);
    }));

    body.addEventListener('scroll', () => {
      if (lock) return;
      let cur = null;
      for (const g of groups) { if (!g.hidden && g.offsetTop <= body.scrollTop + 24) cur = g; }
      if (!cur) return;
      const b = btns.find(x => x.dataset.target === cur.id);
      if (b && !b.classList.contains('on')) setOn(b);
    }, { passive: true });

    if (input) input.addEventListener('input', () => {
      const q = input.value.toLowerCase().trim();
      let any = false;
      groups.forEach(g => {
        const gMatch = q && g.dataset.name.includes(q);
        let vis = 0;
        g.querySelectorAll('.item').forEach(it => {
          const show = !q || gMatch || it.dataset.text.includes(q);
          it.hidden = !show; if (show) vis++;
        });
        g.hidden = vis === 0;
        const b = btns.find(x => x.dataset.target === g.id);
        if (b) b.hidden = g.hidden;
        if (vis) any = true;
      });
      if (empty) empty.hidden = any;
      body.scrollTop = 0;
      const first = btns.find(x => !x.hidden);
      if (first) btns.forEach(x => x.classList.toggle('on', x === first));
    });
  });

  // Katalog satu halaman (/pelatihan & /jasa): search + chips scroll-spy
  document.querySelectorAll('[data-flat]').forEach(box => {
    const input = box.querySelector('[data-filter]');
    const groups = [...box.querySelectorAll('.fgrp')];
    const chips = [...box.querySelectorAll('.chips a')];
    const empty = box.querySelector('.empty');

    chips.forEach(c => c.addEventListener('click', e => {
      e.preventDefault();
      const g = document.getElementById(c.dataset.target);
      if (g) window.scrollTo({ top: g.getBoundingClientRect().top + window.scrollY - 160, behavior: 'smooth' });
    }));

    const spy = () => {
      let cur = null;
      groups.forEach(g => { if (!g.hidden && g.getBoundingClientRect().top <= 200) cur = g; });
      chips.forEach(c => c.classList.toggle('on', !!cur && c.dataset.target === cur.id));
    };
    window.addEventListener('scroll', spy, { passive: true });

    if (input) input.addEventListener('input', () => {
      const q = input.value.toLowerCase().trim();
      let any = false;
      groups.forEach(g => {
        let vis = 0;
        g.querySelectorAll('.item').forEach(it => { const s = !q || it.dataset.text.includes(q); it.hidden = !s; if (s) vis++; });
        g.hidden = vis === 0;
        const c = chips.find(x => x.dataset.target === g.id);
        if (c) c.hidden = g.hidden;
        if (vis) any = true;
      });
      if (empty) empty.hidden = any;
    });
  });
});
