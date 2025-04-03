// swiper-init.js

function initBannerSwiper() {
  const bannerSwiper = new Swiper('.swiper-container-banner', {
    slidesPerView: 4,
    spaceBetween: 20,
    breakpoints: {
      1024: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
          el: '.swiper-pagination-banner',
          clickable: true,
        },
      },
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
        pagination: {
          el: '.swiper-pagination-banner',
          clickable: true,
        },
      },
      320: {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
          el: '.swiper-pagination-banner',
          clickable: true,
        },
      },
      0: {
        slidesPerView: 1,
        spaceBetween: 5,
      },
    },
  });
}

function initStockSwiper() {
  const stockSwiper = new Swiper('.swiper-container-stock', {
    slidesPerView: 4,
    spaceBetween: 20,
    pagination: {
      el: '.swiper-pagination-stock',
      clickable: true,
    },
    breakpoints: {
      1024: {
        slidesPerView: 4,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 15,
      },
      640: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      320: {
        slidesPerView: 1,
        spaceBetween: 5,
      },
      0: {
        slidesPerView: 1,
        spaceBetween: 5,
      },
    },
  });
}

$(document).ready(function () {
  // Функция для инициализации слайдера или аккордеона
  function initializeSliderOrAccordion() {
    if ($(window).width() > 768) {
      // Инициализация слайдера для десктопа
      if (!$('.stages-section .slider-main').hasClass('slick-initialized')) {
        $('.stages-section .slider-main').slick({
          dots: false,
          infinite: true,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 768,
              settings: {
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
          ],
        });

        // Показываем текст описания на десктопе
        $('.accordion-content').css('display', 'block');
      }
    } else {
      // Уничтожение слайдера для мобильных устройств
      if ($('.stages-section .slider-main').hasClass('slick-initialized')) {
        $('.stages-section .slider-main').slick('unslick');
      }

      // Скрываем текст описания на мобильных устройствах
      $('.accordion-content').css('display', 'none');

// Инициализация аккордеона
$('.slider-item .accordion-header').off('click').on('click', function (event) {
  event.stopPropagation(); // Предотвращаем конфликт событий

  const $this = $(this); // Текущий элемент (заголовок аккордеона)
  const $content = $this.next('.accordion-content'); // Содержимое аккордеона
  const $toggleBtn = $this.find('.accordion-toggle-btn'); // Кнопка переключения (+/-)

  // Проверяем текущее состояние аккордеона
  if ($this.hasClass('active')) {
    // Если аккордеон открыт, закрываем его
    $this.removeClass('active');
    $content.slideUp();
    $toggleBtn.text('+'); // Меняем текст кнопки на "+"
  } else {
    // Если аккордеон закрыт, открываем его
    $this.addClass('active');
    $content.slideDown();
    $toggleBtn.text('-'); // Меняем текст кнопки на "-"
  }
});
    }
  }

  // Инициализация при загрузке страницы
  initializeSliderOrAccordion();

  // Обработка изменения размера окна
  $(window).resize(function () {
    initializeSliderOrAccordion();
  });

  // Привязка кнопок для слайдера (работает только на десктопе)
  $('#prev-slide').on('click', function () {
    if ($(window).width() > 768) {
      $('.stages-section .slider-main').slick('slickPrev');
    }
  });

  $('#next-slide').on('click', function () {
    if ($(window).width() > 768) {
      $('.stages-section .slider-main').slick('slickNext');
    }
  });

  // Инициализация других слайдеров
  $('.advantages-section .slider-main').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 868,
        settings: {
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // Инициализация methods-slider только для мобильных
  if ($(window).width() <= 768) {
    $('.methods-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      arrows: false,
      infinite: true,
    });
  }

  // Обработчик изменения размера окна для methods-slider
  $(window).resize(function () {
    if ($(window).width() <= 768) {
      if (!$('.methods-slider').hasClass('slick-initialized')) {
        $('.methods-slider').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          arrows: false,
          infinite: true,
        });
      }
    } else {
      if ($('.methods-slider').hasClass('slick-initialized')) {
        $('.methods-slider').slick('unslick');
      }
    }
  });

  // Привязка кнопок для advantages-section
  $('#prev-slide-adv').on('click', function () {
    $('.advantages-section .slider-main').slick('slickPrev');
  });

  $('#next-slide-adv').on('click', function () {
    $('.advantages-section .slider-main').slick('slickNext');
  });
});

function initAllSwipers() {
  initBannerSwiper();
  initStockSwiper();
}

window.initAllSwipers = initAllSwipers;

function initAllSwipers() {
  initBannerSwiper();
  initStockSwiper();
}

window.initAllSwipers = initAllSwipers;