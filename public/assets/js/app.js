(function () {
  var hero = document.querySelector('.hero');
  if (!hero) return;

  var slides = hero.querySelectorAll('.hero-slide');
  var dots = hero.querySelectorAll('.hero__dot');
  if (slides.length < 2 || dots.length === 0) return;

  var total = slides.length;
  var index = 0;
  var timer = null;
  var INTERVAL = 6000;

  function show(i) {
    index = ((i % total) + total) % total;
    slides.forEach(function (el, j) {
      var on = j === index;
      el.classList.toggle('is-active', on);
      el.setAttribute('aria-hidden', on ? 'false' : 'true');
    });
    dots.forEach(function (d, j) {
      var on = j === index;
      d.classList.toggle('is-active', on);
      d.setAttribute('aria-selected', on ? 'true' : 'false');
    });
  }

  function next() {
    show(index + 1);
  }

  function schedule() {
    clearInterval(timer);
    timer = setInterval(next, INTERVAL);
  }

  dots.forEach(function (dot) {
    dot.addEventListener('click', function () {
      var go = parseInt(dot.getAttribute('data-go'), 10);
      if (!isNaN(go)) {
        show(go);
        schedule();
      }
    });
  });

  hero.addEventListener('touchstart', function (e) {
    hero._tx = e.changedTouches[0].screenX;
  });
  hero.addEventListener('touchend', function (e) {
    var dx = e.changedTouches[0].screenX - (hero._tx || 0);
    if (Math.abs(dx) > 40) {
      show(dx < 0 ? index + 1 : index - 1);
      schedule();
    }
  });

  schedule();
})();
