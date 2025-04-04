document.addEventListener("DOMContentLoaded", function () {
  let bannerSwiper = null;
  let stockSwiper = null;
  let stagesSwiper = null;
  let methodsSwiper = null;

  // Функция для создания IntersectionObserver
  function observeElement(selector, callback) {
    const element = document.querySelector(selector);
    if (!element) return;

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            callback();
            observer.unobserve(entry.target); // После инициализации прекращаем наблюдение
          }
        });
      },
      { threshold: 0.1 } // Начинаем отслеживание, когда элемент на 10% виден
    );

    observer.observe(element);
  }

  // Инициализация слайдеров при видимости элемента
  function initBannerSwiper() {
    if (window.innerWidth >= 320) {
      if (!bannerSwiper) {
        bannerSwiper = new Swiper('.swiper-container-banner', {
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
          },
        });
      }
    } else {
      if (bannerSwiper) {
        bannerSwiper.destroy();
        bannerSwiper = null;
      }
    }
  }

  function initStockSwiper() {
    if (window.innerWidth >= 544) {
      if (!stockSwiper) {
        stockSwiper = new Swiper('.swiper-container-stock', {
          slidesPerView: 1,
          spaceBetween: 20,
          pagination: {
            el: '.swiper-pagination-stock',
            clickable: true,
          },
          breakpoints: {
            544: {
              slidesPerView: 2,
            },
            778: {
              slidesPerView: 3,
            },
            1024: {
              slidesPerView: 4,
              loop: false,
            },
          },
        });
      }
    } else {
      if (stockSwiper) {
        stockSwiper.destroy();
        stockSwiper = null;
      }
    }
  }

  function initStagesSwiper() {
    if (window.innerWidth > 768) {
      if (!stagesSwiper) {
        stagesSwiper = new Swiper(".stages-swiper", {
          navigation: {
            nextEl: ".next-button-stages",
            prevEl: ".prev-button-stages",
          },
          slidesPerView: 3,
          spaceBetween: 20,
          breakpoints: {
            1024: {
              slidesPerView: 3,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 15,
            },
          },
        });
      }
    } else {
      if (stagesSwiper) {
        stagesSwiper.destroy();
        stagesSwiper = null;
      }
    }
  }

  function initMethodsSwiper() {
    if (window.innerWidth <= 1010) {
      if (!methodsSwiper) {
        methodsSwiper = new Swiper(".methods-slider", {
          slidesPerView: "auto",
          spaceBetween: 20,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });
      }
    } else {
      if (methodsSwiper) {
        methodsSwiper.destroy();
        methodsSwiper = null;
      }
    }
  }

  function initAccordion() {
    const accordionHeaders = document.querySelectorAll('.accordion-header');

    accordionHeaders.forEach(header => {
      header.removeEventListener('click', handleAccordionClick);
    });

    accordionHeaders.forEach(header => {
      header.addEventListener('click', handleAccordionClick);
    });

    function handleAccordionClick() {
      const accordionIco = this.querySelector('.accordion-ico img');

      accordionHeaders.forEach(otherHeader => {
        if (otherHeader !== this) {
          const otherDesc = otherHeader.closest('.slider-content').querySelector('.slider-desc');
          otherDesc.classList.remove('open');

          const otherIco = otherHeader.querySelector('.accordion-ico img');
          if (otherIco) {
            otherIco.classList.remove('active');
          }
        }
      });

      const desc = this.closest('.slider-content').querySelector('.slider-desc');
      desc.classList.toggle('open');

      if (accordionIco) {
        accordionIco.classList.toggle('active');
      }
    }
  }

  // Инициализация всех слайдеров через IntersectionObserver
  function initializeAll() {
    observeElement('.swiper-container-banner', initBannerSwiper);
    observeElement('.swiper-container-stock', initStockSwiper);
    observeElement('.stages-swiper', initStagesSwiper);
    observeElement('.methods-slider', initMethodsSwiper);

    if (window.innerWidth <= 768) {
      initAccordion();
    }
  }

  initializeAll();

  window.addEventListener("resize", () => {
    initBannerSwiper();
    initStockSwiper();
    initStagesSwiper();
    initMethodsSwiper();

    if (window.innerWidth <= 768) {
      initAccordion();
    }
  });
});