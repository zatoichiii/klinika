document.addEventListener("DOMContentLoaded", function () {
  let bannerSwiper = null;
  let stockSwiper = null;
  let stagesSwiper = null;
  let methodsSwiper = null;
  let servicesSwiper = null;
  let advantagesSwiper = null;

  // Функция для debounce
  function debounce(func, delay) {
    let timeout;
    return function (...args) {
      clearTimeout(timeout);
      timeout = setTimeout(() => func.apply(this, args), delay);
    };
  }

  // Функция для наблюдения за элементами
  function observeElement(selector, callback) {
    const element = document.querySelector(selector);
    if (!element) {
      console.warn(`Элемент с селектором "${selector}" не найден.`);
      return;
    }

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            callback();
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.1 }
    );

    observer.observe(element);
  }

  // Обработчик кликов для аккордеона
  function handleAccordionClick() {
    const accordionIco = this.querySelector('.accordion-ico img');

    document.querySelectorAll('.accordion-header').forEach(otherHeader => {
      if (otherHeader !== this) {
        const otherDesc = otherHeader.closest('.slider-content')?.querySelector('.slider-desc');
        if (otherDesc) {
          otherDesc.classList.remove('open');
        }

        const otherIco = otherHeader.querySelector('.accordion-ico img');
        if (otherIco) {
          otherIco.classList.remove('active');
        }
      }
    });

    const sliderContent = this.closest('.slider-content');
    if (sliderContent) {
      const desc = sliderContent.querySelector('.slider-desc');
      if (desc) {
        desc.classList.toggle('open');
      }
    }

    if (accordionIco) {
      accordionIco.classList.toggle('active');
    }
  }

  // Инициализация Swiper для баннера
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
        bannerSwiper.destroy(true, true);
        bannerSwiper = null;
      }
    }
  }

  // Инициализация Swiper для акций
  function initStockSwiper() {
    if (window.innerWidth >= 0) {
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
        stockSwiper.destroy(true, true);
        stockSwiper = null;
      }
    }
  }

  // Инициализация Swiper для этапов
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
        stagesSwiper.destroy(true, true);
        stagesSwiper = null;
      }
    }
  }

  // Инициализация Swiper для методов
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
        methodsSwiper.destroy(true, true);
        methodsSwiper = null;
      }
    }
  }

  // Инициализация Swiper для услуг
  function initServicesSwiper() {
    if (window.innerWidth <= 1170) {
      if (!servicesSwiper) {
        servicesSwiper = new Swiper(".swiper-container-services", {
          slidesPerView: 4,
          spaceBetween: 20,
          loop: false,
          breakpoints: {
            320: {
              slidesPerView: 1,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            940: {
              slidesPerView: 3,
              spaceBetween: 20,
            },
          },
        });

        document.querySelectorAll('.swiper-slide').forEach(slide => {
          slide.classList.remove('desktop-style');
        });
      }
    } else {
      if (servicesSwiper) {
        servicesSwiper.destroy(true, true);
        servicesSwiper = null;

        document.querySelectorAll('.swiper-slide').forEach(slide => {
          slide.classList.add('desktop-style');
        });
      }
    }
  }

  // Инициализация Swiper для преимуществ
  function initAdvantagesSwiper() {
    if (!advantagesSwiper) {
      advantagesSwiper = new Swiper(".advantages-swiper", {
        navigation: {
          nextEl: ".next-button-advantages",
          prevEl: ".prev-button-advantages",
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
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
          },
          320: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
        },
      });
    }
  }

  // Инициализация аккордеона
  function initAccordion() {
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    if (!accordionHeaders.length) return;

    accordionHeaders.forEach(header => {
      header.removeEventListener('click', handleAccordionClick);
      header.addEventListener('click', handleAccordionClick);
    });
  }

  // Инициализация всех компонентов
  function initializeAll() {
    observeElement('.swiper-container-banner', initBannerSwiper);
    observeElement('.swiper-container-stock', initStockSwiper);
    observeElement('.stages-swiper', initStagesSwiper);
    observeElement('.methods-slider', initMethodsSwiper);
    observeElement('.swiper-container-services', initServicesSwiper);
    observeElement('.advantages-swiper', initAdvantagesSwiper);

    observeElement('.accordion-header', () => {
      if (window.innerWidth <= 768) {
        initAccordion();
      }
    });
  }

  initializeAll();

  // Обработка изменения размера окна
  window.addEventListener("resize", debounce(() => {
    initBannerSwiper();
    initStockSwiper();
    initStagesSwiper();
    initMethodsSwiper();
    initServicesSwiper();
    initAdvantagesSwiper();

    if (window.innerWidth <= 768) {
      initAccordion();
    } else {
      const accordionHeaders = document.querySelectorAll('.accordion-header');
      accordionHeaders.forEach(header => {
        header.removeEventListener('click', handleAccordionClick);
      });
    }
  }, 200));
});