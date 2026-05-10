jQuery(document).ready(function ($) {

  /* ── Главный слайдер ── */
  if ($('.slider_area').length) {
    $('.slider_area').owlCarousel({
      loop: true, autoplay: true, autoplayTimeout: 5000,
      animateOut: 'fadeOut', nav: true, dots: true, items: 1,
      navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    });
  }

  /* ── Слайдер на фоне через data-bgimg ── */
  $('[data-bgimg]').each(function () {
    $(this).css('background-image', 'url(' + $(this).data('bgimg') + ')');
  });

  /* ── Карусели товаров ── */
  var productCarousel = {
    loop: true, margin: 16, nav: true, dots: false,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    responsive: { 0:{items:1}, 480:{items:2}, 768:{items:3}, 992:{items:4}, 1200:{items:5} }
  };
  if ($('.product_carousel.product_column5').length) {
    $('.product_carousel.product_column5').owlCarousel(productCarousel);
  }

  /* ── Featured carousel ── */
  if ($('.featured_carousel').length) {
    $('.featured_carousel').owlCarousel({
      loop: true, margin: 16, nav: true, dots: false, items: 3,
      navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
      responsive: { 0:{items:1}, 768:{items:2}, 992:{items:3} }
    });
  }

  /* ── Small product carousel ── */
  if ($('.small_product_active').length) {
    $('.small_product_active').slick({
      slidesToShow: 3, slidesToScroll: 1, autoplay: true, autoplaySpeed: 3000,
      arrows: false, dots: false, vertical: true, verticalSwiping: true
    });
  }

  /* ── Brand carousel ── */
  if ($('.brand_container').length) {
    $('.brand_container').owlCarousel({
      loop: true, autoplay: true, margin: 20, nav: false, dots: false,
      responsive: { 0:{items:2}, 480:{items:3}, 768:{items:4}, 992:{items:5} }
    });
  }

  /* ── Small products ── */
  if ($('.product_carousel.small_product').length) {
    $('.product_carousel.small_product').owlCarousel({
      loop: true, margin: 16, nav: true, dots: false,
      navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
      responsive: { 0:{items:1}, 480:{items:2}, 768:{items:3} }
    });
  }

  /* ── Mini cart toggle ── */
  $('.mini_cart_wrapper a').on('click', function (e) {
    e.preventDefault();
    $('.mini_cart').toggleClass('active');
  });
  $('.mini_cart_close a').on('click', function () {
    $('.mini_cart').removeClass('active');
  });

  /* ── Sticky header ── */
  $(window).on('scroll', function () {
    if ($(this).scrollTop() > 100) {
      $('.sticky-header').addClass('sticky');
    } else {
      $('.sticky-header').removeClass('sticky');
    }
  });

  /* ── Category toggle ── */
  $('.categori_toggle').on('click', function () {
    $('.categories_menu_toggle').slideToggle(300);
  });

  /* ── More categories ── */
  $('#more-btn').on('click', function (e) {
    e.preventDefault();
    $('.hidden').slideToggle(300);
    var icon = $(this).find('i');
    icon.toggleClass('fa-plus fa-minus');
  });

  /* ── Off-canvas menu ── */
  $('.canvas_open a').on('click', function () {
    $('.Offcanvas_menu_wrapper').addClass('active');
    $('.off_canvars_overlay').fadeIn();
  });
  $('.canvas_close a, .off_canvars_overlay').on('click', function () {
    $('.Offcanvas_menu_wrapper').removeClass('active');
    $('.off_canvars_overlay').fadeOut();
  });

  /* ── Newsletter popup закрытие ── */
  $('#popup2 .b-close').on('click', function () {
    $('.newletter-popup').fadeOut();
  });

  /* ── Обновление каруселей при переключении вкладок ── */
  $('a[data-toggle="tab"]').on('shown.bs.tab', function () {
    $('.product_carousel.product_column5').each(function () {
      if ($(this).data('owl.carousel')) {
        $(this).trigger('refresh.owl.carousel');
      }
    });
  });

});
