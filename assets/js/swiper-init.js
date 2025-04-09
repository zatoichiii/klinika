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
  let BranchSwiper = null;

  BranchSwiper = new Swiper(".branches-swiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: false,
    navigation: {
      nextEl: ".swiper-button-next-branches-swiper",
      prevEl: ".swiper-button-prev-branches-swiper",
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
    },
  });

  const initComplexSwiper = () => {
    if (window.innerWidth < 768 && !complexSwiper) {
      complexSwiper = new Swiper(".swiper-container-complex", {
        slidesPerView: 1,
        spaceBetween: 20,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          0: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          578: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
        },
      });
    } else if (window.innerWidth >= 768 && complexSwiper) {
      complexSwiper.destroy(true, true);
      complexSwiper = null;
    }
  };

  const initSwiperDoctors = () => {
    if (!doctorsSwiper) {
      doctorsSwiper = new Swiper(".swiper-container-doctors", {
        slidesPerView: "auto",
        spaceBetween: 20,
        navigation: {
          nextEl: ".next-button-doctors",
          prevEl: ".prev-button-doctors",
        },
        breakpoints: {
          480: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
          640: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          },
          1280: {
            slidesPerView: 4,
          },
        },
      });
    }
  };

  const initBannerSwiper = () => {
    if (window.innerWidth > 0) {
      if (!bannerSwiper) {
        bannerSwiper = new Swiper(".swiper-container-banner", {
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
                el: ".swiper-pagination-banner",
                clickable: true,
              },
            },
            640: {
              slidesPerView: 2,
              spaceBetween: 20,
              pagination: {
                el: ".swiper-pagination-banner",
                clickable: true,
              },
            },
            320: {
              slidesPerView: 1,
              spaceBetween: 10,
              pagination: {
                el: ".swiper-pagination-banner",
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
  };
  const initStockSwiper = () => {
    if (window.innerWidth > 0) {
      if (!stockSwiper) {
        stockSwiper = new Swiper(".swiper-container-stock", {
          slidesPerView: 1,
          spaceBetween: 20,
          pagination: {
            el: ".swiper-pagination-stock",
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
  };

  const initStagesSwiper = () => {
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
  };

  const initMethodsSwiper = () => {
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
  };

  const initServicesSwiper = () => {
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
        document.querySelectorAll(".swiper-slide").forEach((slide) => {
          slide.classList.remove("desktop-style");
        });
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

  const initReviewsSwiper = () => {
    if (window.innerWidth > 0) {
      if (!reviewsSwiper) {
        const reviewsSwiper = new Swiper(".reviews-swiper", {
          loop: false,
          slidesPerView: 1,
          spaceBetween: 20,
          navigation: {
            nextEl: ".swiper-button-next-reviews-swiper",
            prevEl: ".swiper-button-prev-reviews-swiper",
          },
          breakpoints: {
            640: {
              slidesPerView: 1,
            },
            768: {
              slidesPerView: 2,
            },
            1024: {
              slidesPerView: 3,
            },
          },
        });
      }
      // Логика для кнопки "Подробнее"
      const reviewCards = document.querySelectorAll(".review-card");

      reviewCards.forEach((card) => {
        const text = card.querySelector(".text p");
        const button = card.querySelector(".more");

        if (!text || !button) {
          console.error("Не найдены необходимые элементы:", {
            text,
            button,
          });
          return;
        }

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
                '<span>Скрыть</span><img src="/assets/images/icons/down.png">';
              imgMore.style.transform = "rotate(180deg)";
            }
          });
        }
      });
    } else {
      if (reviewsSwiper) {
        reviewsSwiper.destroy(true, true);
        reviewsSwiper = null;
      }
    }
  };
  const initAdvantagesSwiper = () => {
    if (window.innerWidth > 0) {
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
    } else {
      if (advantagesSwiper) {
        advantagesSwiper.destroy(true, true);
        advantagesSwiper = null;
      }
    }
  };

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

  const initAccordion = () => {
    const accordionHeaders = document.querySelectorAll(".accordion-header");
    if (!accordionHeaders.length) return;
    accordionHeaders.forEach((header) => {
      header.removeEventListener("click", handleAccordionClick);
      header.addEventListener("click", handleAccordionClick);
    });
  };

  const initializeAll = () => {
    observeElement(".swiper-container-banner", initBannerSwiper);
    observeElement(".swiper-container-stock", initStockSwiper);
    observeElement(".stages-swiper", initStagesSwiper);
    observeElement(".methods-slider", initMethodsSwiper);
    observeElement(".swiper-container-services", initServicesSwiper);
    observeElement(".advantages-swiper", initAdvantagesSwiper);
    observeElement(".reviews-swiper", initReviewsSwiper);
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

  const observeElement = (selector, callback) => {
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
  };

  const swiperGallery = document.querySelector(".swiper-gallery");
  const isMobile = window.matchMedia("(max-width: 768px)").matches;

  const swiper = new Swiper(".swiper-gallery", {
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    spaceBetween: 50,
    pagination: {
      el: ".swiper-pagination.photo",
      clickable: true,
    },
  });

  if (isMobile) {
    setTimeout(() => {
      swiperGallery.style.display = "contents";
    }, 100);
  }

  window.addEventListener("resize", () => {
    const isMobileNow = window.matchMedia("(max-width: 768px)").matches;
    if (isMobileNow) {
      swiperGallery.style.display = "contents";
    } else {
      swiperGallery.style.display = "";
    }
  });

  Fancybox.bind('[data-fancybox="licenses-gallery"]', {
    animated: true,
    showClass: false,
    hideClass: false,
  });

  function filterSlides(target) {
    const slides = document.querySelectorAll(".swiper-slide.photo");
    slides.forEach((slide) => {
      if (target === "all" || slide.dataset.target === target) {
        slide.style.display = "block";
      } else {
        slide.style.display = "none";
      }
    });
    swiper.update();
  }

  const tags = document.querySelectorAll(".swiper-tag");
  tags.forEach((tag) => {
    tag.addEventListener("click", () => {
      tags.forEach((t) => t.classList.remove("active"));
      tag.classList.add("active");

      const target = tag.dataset.target || "all";
      filterSlides(target);
    });
  });

  filterSlides("all");

  const licenseSwiper = new Swiper(".swiper-licenses", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 2,

    pagination: {
      el: ".swiper-pagination.license",
      clickable: true,
    },
  });

  initializeAll();

  window.addEventListener(
    "resize",
    debounce(() => {
      initBannerSwiper();
      initStockSwiper();
      initStagesSwiper();
      initComplexSwiper();
      initSwiperDoctors();
      initBranchSwiper();
      initMethodsSwiper();
      initServicesSwiper();
      initAdvantagesSwiper();
      initReviewsSwiper();
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
