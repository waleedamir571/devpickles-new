/* =====================================================
   DEVPICKLES — script.js  (Pixel-perfect Figma)
   ===================================================== */

$(document).ready(function () {

  /* ===== PAGE LOADER ===== */
  setTimeout(function () {
    $('#pageLoader').addClass('done');
    initHeroAnims();
    initReveal();
  }, 1400);

  /* ===== HERO ENTRANCE ===== */
  function initHeroAnims() {
    var seq = [
      ['.drive-pos .rv-up',   0],
      ['.hero-img-pos.rv-in', 200],
      ['.growth-pos .rv-up',  150],
      ['.hero-left-block.rv-up', 350],
      ['.hero-stats.rv-up',   500]
    ];
    seq.forEach(function(s) {
      setTimeout(function() { $(s[0]).addClass('vis'); }, s[1]);
    });
  }

  /* ===== SCROLL REVEAL ===== */
  function initReveal() {
    var obs = new IntersectionObserver(function(entries) {
      entries.forEach(function(e) {
        if (e.isIntersecting) {
          var d = parseInt($(e.target).data('delay')) || 0;
          setTimeout(function() { $(e.target).addClass('vis'); }, d);
          obs.unobserve(e.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll('.rv-up,.rv-left,.rv-right,.rv-in').forEach(function(el) {
      if (!$(el).closest('.hero-canvas').length) obs.observe(el);
    });
  }

  /* ===== SCROLL PROGRESS BAR ===== */
  $(window).on('scroll.prog', function() {
    var pct = ($(this).scrollTop() / ($(document).height() - $(window).height())) * 100;
    $('#scrollProg').css('width', pct + '%');
  });

  /* ===== NAVBAR — HAMBURGER ===== */
  $('#hamburger').on('click', function() {
    $(this).toggleClass('open');
    $('#navCenter').toggleClass('open');
    $('#navActions').toggleClass('open');
  });
  $('.ni').on('click', function() {
    $('#hamburger').removeClass('open');
    $('#navCenter').removeClass('open');
    $('#navActions').removeClass('open');
  });

  /* ===== NAV STICKY STYLE ON SCROLL ===== */
  $(window).on('scroll.nav', function() {
    var s = $(this).scrollTop();
    if (s > 60) {
      $('#mainNav').css({
        position: 'sticky', top: '0',
        background: 'rgba(23,141,113,.96)',
        backdropFilter: 'blur(14px)',
        boxShadow: '0 4px 24px rgba(0,0,0,.15)'
      });
    } else {
      $('#mainNav').css({
        position: 'relative', top: 'auto',
        background: 'transparent',
        backdropFilter: 'none',
        boxShadow: 'none'
      });
    }
  });

  /* ===== ACTIVE NAV LINK ===== */
  $(window).on('scroll.active', function() {
    var sy = $(this).scrollTop() + 120;
    $('section[id]').each(function() {
      if ($(this).offset().top <= sy) {
        var id = $(this).attr('id');
        $('.ni').removeClass('active');
        $('.ni[href="#' + id + '"]').addClass('active');
      }
    });
  });

  /* ===== SMOOTH SCROLL ===== */
  $(document).on('click', 'a[href^="#"]', function(e) {
    var t = $(this).attr('href');
    if ($(t).length) {
      e.preventDefault();
      $('html,body').animate({ scrollTop: $(t).offset().top - 70 }, 680);
    }
  });

  /* ===== STAT COUNTERS ===== */
  var counted = false;
  new IntersectionObserver(function(ents) {
    ents.forEach(function(e) {
      if (e.isIntersecting && !counted) {
        counted = true;
        $('.counter').each(function() {
          var $el = $(this), target = parseInt($el.data('target'));
          var t = setInterval(function() {
            var cur = parseInt($el.text()) || 0;
            var next = Math.min(cur + Math.ceil(target / 60), target);
            $el.text(next + '+');
            if (next >= target) clearInterval(t);
          }, 25);
        });
      }
    });
  }, { threshold: .5 }).observe(document.querySelector('.hero-stats') || document.body);

  /* ===== PRICING — MAIN TABS ===== */
  $('.toggle-opt').on('click', function() {
    var mt = $(this).data('mt');
    $('.toggle-opt').removeClass('active');
    $(this).addClass('active');
    $('.price-pane').removeClass('active');
    $('#mt-' + mt).addClass('active');
    // Reset to plan 1
    $('#mt-' + mt + ' .pst').removeClass('active');
    $('#mt-' + mt + ' .pst[data-plan="1"]').addClass('active');
    updatePrices(mt, 1);
  });

  /* ===== PRICING — SUB TABS ===== */
  $(document).on('click', '.pst', function() {
    var $pane = $(this).closest('.price-pane');
    $pane.find('.pst').removeClass('active');
    $(this).addClass('active');
    var plan = parseInt($(this).data('plan'));
    var type = $pane.attr('id').replace('mt-', '');
    updatePrices(type, plan);
  });

  function updatePrices(type, plan) {
    var p1 = plan * 100;
    var p2 = plan * 100 + 100;
    if (type === 'basic') {
      animPrice('#b-v1', p1);
      animPrice('#b-v2', p2);
    } else {
      animPrice('#c-v1', p1);
      animPrice('#c-v2', p2);
    }
  }

  function animPrice(sel, target) {
    var $el = $(sel);
    var from = parseInt($el.text()) || 0;
    var t0 = performance.now(), dur = 380;
    (function tick(now) {
      var p = Math.min((now - t0) / dur, 1);
      var e = 1 - Math.pow(1 - p, 3);
      $el.text(Math.round(from + (target - from) * e));
      if (p < 1) requestAnimationFrame(tick);
    })(t0);
  }

  /* ===== FAN SPEED ON SCROLL ===== */
  var lastY = 0;
  $(window).on('scroll.fan', function() {
    var y = $(this).scrollTop();
    var diff = Math.abs(y - lastY);
    lastY = y;
    var spd = Math.max(6, 22 - diff * .4);
    $('.fan-spin').css('animation-duration', spd + 's');
  });

  /* ===== PHONE 3D TILT ===== */
  $('.phone').on('mousemove', function(e) {
    var $el = $(this), o = $el.offset();
    var rx = -((e.pageY - o.top - $el.height()/2) / $el.height() * 2) * 6;
    var ry = ((e.pageX - o.left - $el.width()/2) / $el.width() * 2) * 6;
    $el.css('transform', 'perspective(800px) rotateX('+rx+'deg) rotateY('+ry+'deg) translateY(-8px)');
  }).on('mouseleave', function() { $(this).css('transform',''); });

  /* ===== BUTTON RIPPLE ===== */
  $(document).on('click', '.btn-footer-call,.btn-footer-inquire,.store-btn,.signup-btn', function(e) {
    var $b = $(this), o = $b.offset(), sz = Math.max($b.outerWidth(), $b.outerHeight());
    var $r = $('<span>').css({
      position:'absolute', borderRadius:'50%',
      width:sz, height:sz,
      left:e.pageX - o.left - sz/2,
      top:e.pageY - o.top - sz/2,
      background:'rgba(255,255,255,.25)',
      transform:'scale(0)',
      animation:'ripple .55s linear',
      pointerEvents:'none'
    });
    $b.css({ position:'relative', overflow:'hidden' }).append($r);
    setTimeout(function() { $r.remove(); }, 600);
  });

  /* Inject ripple keyframe once */
  if (!document.getElementById('ripple-style')) {
    $('<style id="ripple-style">@keyframes ripple{to{transform:scale(4);opacity:0}}</style>').appendTo('head');
  }

  /* ===== GROW CARDS PARALLAX ===== */
  $(window).on('scroll.parallax', function() {
    var sy = $(this).scrollTop();
    var $sec = $('.s-grow');
    if ($sec.length) {
      var off = $sec.offset().top - sy;
      var pct = Math.min(Math.max(off / $(window).height(), 0), 1);
      $('.grow-bg-img').css('transform', 'translateY(' + (pct * -30) + 'px)');
    }
  });

});
