(function ($) {
  "user strict";
  // Preloader Js
  $(window).on('load', function () {
    $('.preloader').fadeOut(1000);
    var img = $('.bg_img');
    img.css('background-image', function () {
      var bg = ('url(' + $(this).data('background') + ')');
      return bg;
    });
    // filter functions
    var $grid = $(".project-area");
    var filterFns = {};
    $grid.isotope({
      itemSelector: '.project-item',
      masonry: {
        columnWidth: 0,
      }
    });
    // bind filter button click
    $('ul.filter').on('click', 'li', function () {
      var filterValue = $(this).attr('data-filter');
      // use filterFn if matches value
      filterValue = filterFns[filterValue] || filterValue;
      $grid.isotope({
        filter: filterValue
      });
    });
    // change is-checked class on buttons
    $('ul.filter').each(function (i, buttonGroup) {
      var $buttonGroup = $(buttonGroup);
      $buttonGroup.on('click', 'li', function () {
        $buttonGroup.find('.active').removeClass('active');
        $(this).addClass('active');
      });
    });

    var $gallery = $(".gallery-wrapper");
    $gallery.isotope({
      itemSelector: '.gallery-item',
      masonry: {
        columnWidth: 0,
      }
    });
  });
  $(document).ready(function () {
    // Nice Select
    $('.select-bar').niceSelect();
    // Lightcase 
    $('a[data-rel^=lightcase]').lightcase();
    // Wow js active
    new WOW().init();
    //Faq
    $('.faq-wrapper .faq-title, .faq-wrapper-two .faq-title-two').on('click', function (e) {
      var element = $(this).parent('.faq-item, .faq-item-two');
      if (element.hasClass('open')) {
        element.removeClass('open');
        element.find('.faq-content, .faq-content-two').removeClass('open');
        element.find('.faq-content, .faq-content-two').slideUp(300, "swing");
      } else {
        element.addClass('open');
        element.children('.faq-content, .faq-content-two').slideDown(300, "swing");
        element.siblings('.faq-item, .faq-item-two').children('.faq-content, .faq-content-two').slideUp(300, "swing");
        element.siblings('.faq-item, .faq-item-two').removeClass('open');
        element.siblings('.faq-item, .faq-item-two').find('.faq-title, .faq-title-two').removeClass('open');
        element.siblings('.faq-item, .faq-item-two').find('.faq-content, .faq-content-two').slideUp(300, "swing");
      }
    });
    $('.remove-cart').on('click', function (e) {
        e.preventDefault();
        $(this).parent().parent().hide(300);
    });
    $('#cart-button').on('click', function (e) {
        e.preventDefault();
        $('.cart-sidebar-area').addClass('active');
        $('.body-overlay').addClass('active');
    });
    $('#body-overlay').on('click', function (e) {
        e.preventDefault();
        $('.cart-sidebar-area').removeClass('active');
        $('.body-overlay').removeClass('active');
    });
    $('.side-sidebar-close-btn').on('click', function (e) {
      e.preventDefault();
      $('.cart-sidebar-area').removeClass('active');
      $('.body-overlay').removeClass('active');
    });
    
    //MenuBar
    $('.header-bar').on('click', function () {
        $(".menu").toggleClass("active");
        $(".header-bar").toggleClass("active");
    });
    //Searchbar
    $('.search-bar').on('click', function () {
        $(".search-form-area").addClass("active");
    });
    // Hide Search
    $('.hide-form').on('click', function () {
      $(".search-form-area").removeClass("active");
    });
    //Menu Dropdown Icon Adding
    $("ul>li>.submenu").parent("li").addClass("menu-item-has-children");
    // drop down menu width overflow problem fix
    $('ul').parent('li').hover(function () {
      var menu = $(this).find("ul");
      var menupos = $(menu).offset();
      if (menupos.left + menu.width() > $(window).width()) {
        var newpos = -$(menu).width();
        menu.css({
          left: newpos
        });
      }
    });
    $('.menu li a').on('click', function (e) {
      var element = $(this).parent('li');
      if (element.hasClass('open')) {
        element.removeClass('open');
        element.find('li').removeClass('open');
        element.find('ul').slideUp(300, "swing");
      } else {
        element.addClass('open');
        element.children('ul').slideDown(300, "swing");
        element.siblings('li').children('ul').slideUp(300, "swing");
        element.siblings('li').removeClass('open');
        element.siblings('li').find('li').removeClass('open');
        element.siblings('li').find('ul').slideUp(300, "swing");
      }
    })
    // Scroll To Top 
    var scrollTop = $(".scrollToTop");
    $(window).on('scroll', function () {
      if ($(this).scrollTop() < 500) {
        scrollTop.removeClass("active");
      } else {
        scrollTop.addClass("active");
      }
    });
    //Click event to scroll to top
    $('.scrollToTop').on('click', function () {
      $('html, body').animate({
        scrollTop: 0
      }, 500);
      return false;
    });
    // Header Sticky Here
    var headerOne = $(".header-bottom");
    $(window).on('scroll', function () {
      if ($(this).scrollTop() < 1) {
        headerOne.removeClass("header-fixed");
      } else {
        headerOne.addClass("header-fixed");
      }
    });
    // Sponsor Slider
    var swiper = new Swiper('.sponsor-slider', {
      slidesPerView: 6,
      loop: true,
      breakpoints: {
        1024: {
          slidesPerView: 5,
        },
        767: {
          slidesPerView: 3,
        },
        575: {
          slidesPerView: 2,
        },
        400: {
          slidesPerView: 1,
        },
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      loop: true,
    });
    //Tab Section
    $('.tab ul.tab-menu').addClass('active').find('> li:eq(0)').addClass('active');
    $('.tab ul.tab-menu li').on('click', function (g) {
      var tab = $(this).closest('.tab'),
        index = $(this).closest('li').index();
      tab.find('li').siblings('li').removeClass('active');
      $(this).closest('li').addClass('active');
      tab.find('.tab-area').find('div.tab-item').not('div.tab-item:eq(' + index + ')').hide();
      tab.find('.tab-area').find('div.tab-item:eq(' + index + ')').show();
      g.preventDefault();
    });
    $('.banner-section').ripples({
        resolution: 512,
        dropRadius: 15,
        perturbance: .04,
    });
    $('.prev-but, .next-but').on('click', function() {
      $('.next-but, .prev-but').removeClass('active');
      $(this).addClass('active');
    })
    //Odometer
    $(".counter-item").each(function () {
      $(this).isInViewport(function (status) {
        if (status === "entered") {
          for (var i = 0; i < document.querySelectorAll(".odometer").length; i++) {
            var el = document.querySelectorAll('.odometer')[i];
            el.innerHTML = el.getAttribute("data-odometer-final");
          }
        }
      });
    });
    var swiper = new Swiper('.partner-slider', {
      slidesPerView:4,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      breakpoints: {
        1199: {
          slidesPerView: 3,
        },
        991: {
          slidesPerView: 4,
        },
        767: {
          slidesPerView: 3,
        },
        575: {
          slidesPerView: 2,
        },
      },
      loop: true,
    })
    var swiper = new Swiper('.instructor-slider', {
      slidesPerView: 3,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      breakpoints: {
        991: {
          slidesPerView: 2,
        },
        767: {
          slidesPerView: 1,
        },
      },
      loop: true,
      navigation: {
        nextEl: '.next-but',
        prevEl: '.prev-but',
      },
    })
    var swiper = new Swiper('.post-slider .post-thumb', {
      navigation: {
        nextEl: '.blog-prev',
        prevEl: '.blog-next',
      },
      loop: true,
    });
    var swiper = new Swiper('.related-slider', {
      navigation: {
        nextEl: '.blog-prev',
        prevEl: '.blog-next',
      },
      loop: true,
      slidesPerView: 2,
      breakpoints: {
        767: {
          slidesPerView: 1,
        },
      }
    });
    // shop cart + - start here
    var CartPlusMinus = $('.cart-plus-minus');
    CartPlusMinus.prepend('<div class="dec qtybutton">-</div>');
    CartPlusMinus.append('<div class="inc qtybutton">+</div>');
    $(".qtybutton").on("click", function () {
      var $button = $(this);
      var oldValue = $button.parent().find("input").val();
      if ($button.text() === "+") {
        var newVal = parseFloat(oldValue) + 1;
      } else {
        // Don't allow decrementing below zero
        if (oldValue > 0) {
          var newVal = parseFloat(oldValue) - 1;
        } else {
          newVal = 1;
        }
      }
      $button.parent().find("input").val(newVal);
    });
    $('#view-pass-01').on('click', function () {
      var x = document.getElementById("pass01");
      if (x.type === "password") {
        x.type = "text";
        $('#view-pass-01 .flaticon-eye').addClass('flaticon-hide');
        $('#view-pass-01 .flaticon-eye').removeClass('flaticon-eye');
      } else {
        x.type = "password";
        $('#view-pass-01 .flaticon-hide').addClass('flaticon-eye');
        $('#view-pass-01 .flaticon-hide').removeClass('flaticon-hide');
      }
    });
    $('#view-pass-02').on('click', function () {
      var x = document.getElementById("pass02");
      if (x.type === "password") {
        x.type = "text";
        $('#view-pass-02 .flaticon-eye').addClass('flaticon-hide');
        $('#view-pass-02 .flaticon-eye').removeClass('flaticon-eye');
      } else {
        x.type = "password";
        $('#view-pass-02 .flaticon-hide').addClass('flaticon-eye');
        $('#view-pass-02 .flaticon-hide').removeClass('flaticon-hide');
      }
    });
    $('#view-pass-03').on('click', function () {
      var x = document.getElementById("pass03");
      if (x.type === "password") {
        x.type = "text";
        $('#view-pass-03 .flaticon-eye').addClass('flaticon-hide');
        $('#view-pass-03 .flaticon-eye').removeClass('flaticon-eye');
      } else {
        x.type = "password";
        $('#view-pass-03 .flaticon-hide').addClass('flaticon-eye');
        $('#view-pass-03 .flaticon-hide').removeClass('flaticon-hide');
      }
    });
  });
})(jQuery);
