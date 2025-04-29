document.addEventListener("DOMContentLoaded", function () {
  let bannerSwiper = null;
  let stockSwiper = null;
  let stagesSwiper = null;
  let methodsSwiper = null;
  let servicesSwiper = null;
  let advantagesSwiper = null;
  let complexSwiper = null;
  let doctorsSwiper = null;
  let reviewsSwiper = null;
  let branchSwiper = null;

  // Инициализация Branch Swiper
  branchSwiper = new Swiper(".branches-swiper", {
    slidesPerView: 1.2,
    spaceBetween: 10,
    loop: false,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next.branches-button",
      prevEl: ".swiper-button-prev.branches-button",
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
    },
  });

  // Инициализация Complex Swiper
  const initComplexSwiper = () => {
    const isMobile = window.matchMedia("(max-width: 767px)").matches;
  
    if (isMobile) {
      if (!complexSwiper) {
        complexSwiper = new Swiper(".swiper-container-complex", {
          spaceBetween: 20,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          breakpoints: {
            0: {
              slidesPerView: 1.2,
              spaceBetween: 10,
            },
            578: {
              slidesPerView: 2.2,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 3,
              spaceBetween: 30,
            },
          },
        });
      } else {
        complexSwiper.update(); // Обновляем существующий слайдер
      }
    } else {
      if (complexSwiper) {
        complexSwiper.destroy(true, true); // Уничтожаем слайдер
        complexSwiper = null;
      }
    }
  };

  // Инициализация Banner Swiper
  const initBannerSwiper = () => {
    if (window.innerWidth < 1320) {
      if (!bannerSwiper) {
        bannerSwiper = new Swiper(".swiper-container-banner", {
          slidesPerView: 4,
          spaceBetween: 20,
          pagination: {
            el: ".swiper-pagination-banner",
          },
          breakpoints: {
            1024: {
              slidesPerView: 4,
              spaceBetween: 40,
            },
            768: {
              slidesPerView: 3.2,
              spaceBetween: 30,
            },
            640: {
              slidesPerView: 2.2,
              spaceBetween: 20,
            },
            320: {
              slidesPerView: 1.2,
              spaceBetween: 10,
            },
          },
        });
      }
    } else {
      if (bannerSwiper) {
        bannerSwiper.update();
        bannerSwiper.destroy(true, true);
        bannerSwiper = null;
      }
    }
  };

  // Инициализация Stock Swiper
  const initStockSwiper = () => {
    if (window.innerWidth < 1320) {
      if (!stockSwiper) {
        stockSwiper = new Swiper(".swiper-container-stock", {
          slidesPerView: 1.3,
          spaceBetween: 20,
          pagination: {
            el: ".swiper-pagination-stock",
            clickable: true,
          },
          breakpoints: {
            544: {
              slidesPerView: 2.3,
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
        stockSwiper.update();
        stockSwiper.destroy(true, true);
        stockSwiper = null;
      }
    }
  };

  // Инициализация Stages Swiper
  const initStagesSwiper = () => {
    if (window.innerWidth > 768) {
      if (!stagesSwiper) {
        stagesSwiper = new Swiper(".stages-swiper", {
          navigation: {
            nextEl: ".swiper-button-next.stages",
            prevEl: ".swiper-button-prev.stages",
          },
          slidesPerView: 1,
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
        stagesSwiper.update();
        stagesSwiper.destroy(true, true);
        stagesSwiper = null;
      }
    }
  };

  // Инициализация Methods Swiper
  const initMethodsSwiper = () => {
    const isMobile = window.matchMedia("(max-width: 1010px)").matches;

    if (isMobile) {
      if (!methodsSwiper) {
        methodsSwiper = new Swiper(".methods-slider", {
          spaceBetween: 30,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          breakpoints: {
            320: {
              slidesPerView: 1.2,
              spaceBetween: 20,
            },
            576: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 2.5,
              spaceBetween: 30,
            },
            1010: {
              slidesPerView: 3,
              spaceBetween: 30,
            },
          },
        });
      } else {
        methodsSwiper.update(); // Обновляем существующий слайдер
      }
    } else {
      if (methodsSwiper) {
        methodsSwiper.destroy(true, true); // Уничтожаем слайдер
        methodsSwiper = null; // Обнуляем переменную
      }
    }
  };

  // Добавляем слушатель для медиа-запроса
  const mediaQueryMethod = window.matchMedia("(max-width: 1010px)");
  mediaQueryMethod.addEventListener("change", () => {
    initMethodsSwiper();
  });

  // Инициализация Services Swiper
  const initServicesSwiper = () => {
    const isMobile = window.matchMedia("(max-width: 1169px)").matches;

    if (isMobile) {
      if (!servicesSwiper) {
        servicesSwiper = new Swiper(".swiper-container-services", {
          spaceBetween: 20,
          pagination: {
            el: ".swiper-pagination",
          },
          loop: false,
          breakpoints: {
            320: {
              slidesPerView: 1.4,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 2.2,
              spaceBetween: 20,
            },
            940: {
              slidesPerView: 3.3,
              spaceBetween: 20,
            },
            1170: {
              slidesPerView: 4,
              spaceBetween: 20,
            },
          },
        });
        document.querySelectorAll(".swiper-slide").forEach((slide) => {
          slide.classList.remove("desktop-style");
        });
      } else {
        servicesSwiper.update();
      }
    } else {
      if (servicesSwiper) {
        servicesSwiper.destroy(true, true);
        servicesSwiper = null;
        document.querySelectorAll(".swiper-slide").forEach((slide) => {
          slide.classList.add("desktop-style");
        });
      }
    }
  };

  const mediaQuery = window.matchMedia("(max-width: 1169px)");
  mediaQuery.addEventListener("change", () => {
    initServicesSwiper();
  });

  // Инициализация Reviews Swiper
  const initReviewsSwiper = () => {
    if (window.innerWidth > 0) {
      if (!reviewsSwiper) {
        reviewsSwiper = new Swiper(".reviews-swiper", {
          loop: false,
          slidesPerView: 1.2,
          spaceBetween: 20,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next.reviews-swiper-btn",
            prevEl: ".swiper-button-prev.reviews-swiper-btn",
          },
          breakpoints: {
            640: {
              slidesPerView: 1.2,
            },
            768: {
              slidesPerView: 2.2,
            },
            1024: {
              slidesPerView: 3,
            },
          },
        });

        const reviewCards = document.querySelectorAll(".review-card");
        reviewCards.forEach((card) => {
          const text = card.querySelector(".text p");
          const button = card.querySelector(".more");
          if (!text || !button) return;

          if (text.scrollHeight <= text.clientHeight) {
            button.style.display = "none";
          } else {
            button.addEventListener("click", () => {
              const imgMore = button.querySelector("img");
              if (text.style.maxHeight) {
                text.style.maxHeight = null;
                button.innerHTML =
                  '<span>Подробнее</span><img src="/assets/images/icons/down.png">';
                imgMore.style.transform = "rotate(0deg)";
              } else {
                text.style.maxHeight = text.scrollHeight + "px";
                button.innerHTML =
                  '<span>Скрыть</span>';
                imgMore.style.transform = "rotate(180deg)";
              }
            });
          }
        });
      }
    } else {
      if (reviewsSwiper) {
        reviewsSwiper.update();
        reviewsSwiper.destroy(true, true);
        reviewsSwiper = null;
      }
    }
  };
// Инициализация Advantages Swiper
const initAdvantagesSwiper = () => {
  if (window.innerWidth > 0) {
    if (!advantagesSwiper) {
      advantagesSwiper = new Swiper(".advantages-swiper", {
        navigation: {
          nextEl: ".swiper-button-next.advantages",
          prevEl: ".swiper-button-prev.advantages",
        },
        slidesPerView: 3,
        spaceBetween: 20,
        breakpoints: {
          1024: {
            slidesPerView: 3,
            spaceBetween: 20,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
          },
          768: {
            slidesPerView: 2.2,
            spaceBetween: 15,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
          },
          320: {
            slidesPerView: 1.2,
            spaceBetween: 10,

          },
        },
      });
    }
  } else {
    if (advantagesSwiper) {
      advantagesSwiper.destroy(true, true);
      advantagesSwiper = null;
    }
  }
};
  // Инициализация Accordion
  // Функция для обработки кликов на аккордеон
  const handleAccordionClick = function () {
    const accordionIco = this.querySelector(".accordion-ico img");
    document.querySelectorAll(".accordion-header").forEach((otherHeader) => {
      if (otherHeader !== this) {
        const otherDesc = otherHeader
          .closest(".slider-content")
          ?.querySelector(".slider-desc");
        if (otherDesc) {
          otherDesc.classList.remove("open");
        }
        const otherIco = otherHeader.querySelector(".accordion-ico img");
        if (otherIco) {
          otherIco.classList.remove("active");
        }
      }
    });

    const sliderContent = this.closest(".slider-content");
    if (sliderContent) {
      const desc = sliderContent.querySelector(".slider-desc");
      if (desc) {
        desc.classList.toggle("open");
      }
    }

    if (accordionIco) {
      accordionIco.classList.toggle("active");
    }
  };

  document.querySelectorAll(".accordion-header").forEach((header) => {
    header.addEventListener("click", handleAccordionClick);
  });

  const firstAccordionHeader = document.querySelector(".accordion-header");
  if (firstAccordionHeader) {
    const firstSliderContent = firstAccordionHeader.closest(".slider-content");
    if (firstSliderContent) {
      const firstDesc = firstSliderContent.querySelector(".slider-desc");
      const firstIco = firstAccordionHeader.querySelector(".accordion-ico img");

      if (firstDesc) {
        firstDesc.classList.add("open");
      }
      if (firstIco) {
        firstIco.classList.add("active");
      }
    }
  }
  const initAccordion = () => {
    const accordionHeaders = document.querySelectorAll(".accordion-header");
    if (!accordionHeaders.length) return;

    accordionHeaders.forEach((header) => {
      header.removeEventListener("click", handleAccordionClick);
      header.addEventListener("click", handleAccordionClick);
    });
  };

  const initializeAll = () => {
    // Без IntersectionObserver
    safeInitSwiper(".swiper-container-banner", initBannerSwiper);
    safeInitSwiper(".swiper-container-stock", initStockSwiper);
    safeInitSwiper(".stages-swiper", initStagesSwiper);
    safeInitSwiper(".methods-slider", initMethodsSwiper);
    safeInitSwiper(".swiper-container-services", initServicesSwiper);
    safeInitSwiper(".advantages-swiper", initAdvantagesSwiper);
    safeInitSwiper(".reviews-swiper", initReviewsSwiper);
  
    // С IntersectionObserver
    observeElement(".accordion-header", () => {
      if (window.innerWidth <= 768) {
        initAccordion();
      }
    });
  };
  
  const debounce = (func, delay) => {
    let timeout;
    return function (...args) {
      clearTimeout(timeout);
      timeout = setTimeout(() => func.apply(this, args), delay);
    };
  };
  
  const safeInitSwiper = (selector, callback) => {
    const element = document.querySelector(selector);
    if (!element) {
      console.warn(`Элемент "${selector}" не найден. Инициализация пропущена.`);
      return;
    }
    callback();
  };
  
  const observeElement = (selector, callback) => {
    const element = document.querySelector(selector);
    if (!element) {
      console.warn(`Элемент "${selector}" не найден. Наблюдение пропущено.`);
      return;
    }
    if (typeof callback !== "function") {
      console.error(`Callback для "${selector}" не является функцией.`);
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
  };
  
  document.addEventListener("DOMContentLoaded", () => {
    initializeAll();
  
    window.addEventListener(
      "resize",
      debounce(() => {
        if (window.innerWidth <= 768) {
          observeElement(".accordion-header", initAccordion);
        } else {
          const accordionHeaders = document.querySelectorAll(".accordion-header");
          accordionHeaders.forEach((header) => {
            header.removeEventListener("click", handleAccordionClick);
          });
        }
      }, 200)
    );
  });
  const licenseSwiper = new Swiper(".swiper-licenses", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 2,
    pagination: {
      el: ".swiper-pagination.license",
      clickable: true,
    },
    breakpoints: {
      320: {
        slidesPerView: 1.2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
        }
  });

  // Инициализация всех компонентов
  initializeAll();

  window.addEventListener(
    "resize",
    debounce(() => {
      if (document.querySelector(".banner-swiper")) {
        initBannerSwiper();
      }
      if (document.querySelector(".stock-swiper")) {
        initStockSwiper();
      }
      if (document.querySelector(".stages-swiper")) {
        initStagesSwiper();
      }
      if (document.querySelector(".complex-swiper")) {
        initComplexSwiper();
      }
      if (document.querySelector(".methods-swiper")) {
        initMethodsSwiper();
      }
      if (document.querySelector(".services-swiper")) {
        initServicesSwiper();
      }
      if (document.querySelector(".advantages-swiper")) {
        initAdvantagesSwiper();
      }
      if (document.querySelector(".reviews-swiper")) {
        initReviewsSwiper();
      }
  
      if (window.innerWidth <= 768) {
        initAccordion();
      } else {
        const accordionHeaders = document.querySelectorAll(".accordion-header");
        accordionHeaders.forEach((header) => {
          header.removeEventListener("click", handleAccordionClick);
        });
      }
    }, 200)
  );
});
