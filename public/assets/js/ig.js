// ─── NAVBAR SCROLL EFFECT ───
var navbar = document.getElementById('navbar');
var ticking = false;

window.addEventListener('scroll', function () {
  if (!ticking) {
    window.requestAnimationFrame(function () {
      if (window.scrollY > 60) {
        navbar.style.background = 'rgba(250, 249, 247, 0.97)';
      } else {
        navbar.style.background = 'rgba(250, 249, 247, 0.92)';
      }
      ticking = false;
    });
    ticking = true;
  }
});

// ─── MOBILE MENU TOGGLE ───
document.getElementById('navToggler').addEventListener('click', function () {
  document.getElementById('navMobile').classList.toggle('open');
});

// ─── SMOOTH SCROLL ───
document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
  anchor.addEventListener('click', function (e) {
    var target = document.querySelector(this.getAttribute('href'));
    if (!target) return;
    e.preventDefault();
    document.getElementById('navMobile').classList.remove('open');
    var offset = 64;
    var targetPos = target.getBoundingClientRect().top + window.pageYOffset - offset;
    window.scrollTo({ top: targetPos, behavior: 'smooth' });
  });
});

// ─── FADE IN ON SCROLL (IntersectionObserver, no scroll listener) ───
var fadeEls = document.querySelectorAll(
  '.arrival-card, .journal-item, .about-img-wrap, .about-text, .about-caption, .section-label, .section-title'
);

var observer = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

fadeEls.forEach(function (el) {
  el.classList.add('fade-in');
  observer.observe(el);
});