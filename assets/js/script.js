document.addEventListener("DOMContentLoaded", () => {
  const menuTitles = document.querySelectorAll(".menu-title");

  if (menuTitles) {
    menuTitles.forEach((title) => {
      title.addEventListener("click", () => {
        const submenuContainer = title.nextElementSibling;

        if (
          submenuContainer &&
          submenuContainer.classList.contains("submenu-container")
        ) {
          submenuContainer.classList.toggle("open");
          title.classList.toggle("open");
        }
      });
    });
  }

  const menuItems = document.querySelectorAll(".column-select__item");
  const rightSideItems = document.querySelectorAll(".right-side-select__item");

  menuItems.forEach((item, index) => {
    item.setAttribute("data-index", index);
  });

  rightSideItems.forEach((item, index) => {
    item.setAttribute("data-index", index);
  });

  function setMobileOrder() {
    if (window.innerWidth <= 768) {
      menuItems.forEach((item, index) => {
        item.style.order = index * 2 + 1;
      });

      rightSideItems.forEach((item, index) => {
        item.style.order = index * 2 + 2;
      });
    } else {
      menuItems.forEach((item) => {
        item.style.order = "";
      });

      rightSideItems.forEach((item) => {
        item.style.order = "";
      });
    }
  }

  setMobileOrder();

  menuItems.forEach((item) => {
    item.addEventListener("click", () => {
      const isActive = item.classList.contains("active");

      menuItems.forEach((el) => el.classList.remove("active"));
      rightSideItems.forEach((el) => el.classList.remove("active"));

      if (!isActive) {
        item.classList.add("active");

        const index = item.getAttribute("data-index");
        const correspondingItem = document.querySelector(
          `.right-side-select__item[data-index="${index}"]`
        );

        if (correspondingItem) {
          correspondingItem.classList.add("active");
        }
      }
    });
  });

  window.addEventListener("resize", setMobileOrder);

  const priceItems = document.querySelectorAll(".price-item");
  const modalPrice = document.querySelector(".modal-price");
  const modalTitle = document.querySelector(".modal-price .modal-title b");
  const closeModalPrice = document.querySelector(".close-price");

  if (priceItems.length > 0 && modalPrice && modalTitle && closeModalPrice) {
    priceItems.forEach((item) => {
      const price = item.querySelector(".price, .price-value");
      const name = item.querySelector(".name, .price-info p");

      if (price && name) {
        price.addEventListener("click", () => {
          modalTitle.textContent = "Заявка на " + name.textContent;

          modalPrice.classList.add("open");
        });
      }
    });

    closeModalPrice.addEventListener("click", () => {
      modalPrice.classList.remove("open");
    });

    modalPrice.addEventListener("click", (e) => {
      if (e.target === modalPrice) {
        modalPrice.classList.remove("open");
      }
    });
  } else {
    console.warn("Необходимые элементы для модального окна не найдены.");
  }

  const scheduleToggle = document.getElementById("schedule-toggle");
  const scheduleContent = document.getElementById("schedule-content");

  if (scheduleToggle || scheduleContent) {
    const arrowIcon = scheduleToggle.querySelector(".arrow-icon");

    scheduleToggle.addEventListener("click", () => {
      scheduleContent.classList.toggle("open");

      const isOpen = scheduleContent.classList.contains("open");

      arrowIcon.alt = isOpen ? "Закрыть" : "Открыть";

      arrowIcon.style.transform = isOpen
        ? "translateY(-50%) rotate(180deg)"
        : "translateY(-50%) rotate(0deg)";
    });
  }
  const toggleButton = document.querySelector(".dropdown-toggle");
  const dropdownMenu = document.querySelector(".dropdown-menu");
  const categoryButtons = document.querySelectorAll(".category-btn");
  const priceCategories = document.querySelectorAll(".price-category");

  if (toggleButton && dropdownMenu && categoryButtons && priceCategories) {
    function updateActiveCategoryText(button) {
      const isMobile = window.matchMedia("(max-width: 768px)").matches;

      if (isMobile) {
        const existingSpan = toggleButton.querySelector("span");
        if (existingSpan) {
          existingSpan.remove();
        }

        const span = document.createElement("span");
        span.textContent = button.textContent;
        toggleButton.append(span);
      }
    }

    function setupMobileDropdown() {
      const isMobile = window.matchMedia("(max-width: 768px)").matches;

      if (isMobile) {
        categoryButtons.forEach((button) => {
          if (!dropdownMenu.contains(button)) {
            dropdownMenu.appendChild(button);
          }
        });

        const activeCategory = document.querySelector(".category-btn.active");
        if (activeCategory) {
          updateActiveCategoryText(activeCategory);
        }

        toggleButton.addEventListener("click", () => {
          dropdownMenu.classList.toggle("modal");
          document.body.classList.toggle("modal-open");
        });

        document.addEventListener("click", (event) => {
          if (
            !toggleButton.contains(event.target) &&
            !dropdownMenu.contains(event.target)
          ) {
            dropdownMenu.classList.remove("modal");
            document.body.classList.remove("modal-open");
          }
        });
      } else {
        const categoriesContainer = document.querySelector(".categories");

        toggleButton.addEventListener("click", () => {
          dropdownMenu.classList.toggle("show");
        });

        categoryButtons.forEach((button) => {
          if (!categoriesContainer.contains(button)) {
            categoriesContainer.insertBefore(
              button,
              toggleButton.parentElement
            );
          }
        });

        dropdownMenu.classList.remove("modal");
        document.body.classList.remove("modal-open");
      }
    }

    setupMobileDropdown();

    window.addEventListener("resize", () => {
      setupMobileDropdown();
    });

    categoryButtons.forEach((button) => {
      button.addEventListener("click", () => {
        const selectedCategory = button.dataset.category;

        categoryButtons.forEach((btn) => btn.classList.remove("active"));
        button.classList.add("active");

        dropdownMenu.classList.remove("show");

        priceCategories.forEach((category) => {
          category.classList.remove("active");
        });

        const selectedPriceCategory = document.querySelector(
          `.price-category[data-category="${selectedCategory}"]`
        );
        if (selectedPriceCategory) {
          selectedPriceCategory.classList.add("active");
        }

        if (dropdownMenu.classList.contains("modal")) {
          dropdownMenu.classList.remove("modal");
          document.body.classList.remove("modal-open");
        }

        updateActiveCategoryText(button);
      });
    });

    const priceToggleButton = document.querySelectorAll(".details-btn");
    priceToggleButton.forEach((button) => {
      button.addEventListener("click", (event) => {
        event.stopPropagation();

        const details = button.nextElementSibling;
        if (details) {
          button.classList.toggle("active");
          details.classList.toggle("visible");
        }
      });
    });
  }

  const swiperClinic = new Swiper(".swiper-clinic", {
    spaceBetween: 20,
    slidesPerView: 1.3,
    navigation: {
      nextEl: ".swiper-button-next.own",
      prevEl: ".swiper-button-prev.own",
    },
    pagination: {
      el: ".pagination-clinic",
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
    },
  });

  const swiperRoom = new Swiper(".swiper-room", {
    spaceBetween: 20,
    slidesPerView: 1.3,
    navigation: {
      nextEl: ".swiper-button-next.own",
      prevEl: ".swiper-button-prev.own",
    },
    pagination: {
      el: ".pagination-room",
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
    },
  });

  const swiperDoctor = new Swiper(".swiper-doctor", {
    spaceBetween: 20,
    slidesPerView: 1.3,
    navigation: {
      nextEl: ".swiper-button-next.own",
      prevEl: ".swiper-button-prev.own",
    },
    pagination: {
      el: ".pagination-doctor",
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
    },
  });

  const tagsForSwipers = document.querySelectorAll(".swiper-tag");
  const sliders = document.querySelectorAll(".swiper");

  tagsForSwipers.forEach((tag) => {
    tag.addEventListener("click", () => {
      tagsForSwipers.forEach((t) => t.classList.remove("active"));
      sliders.forEach((slider) => slider.classList.remove("active"));

      tag.classList.add("active");

      const target = tag.getAttribute("data-target");
      const activeSlider = document.querySelector(`.swiper-${target}`);
      if (activeSlider) {
        activeSlider.classList.add("active");
      }
    });
  });

  const tags = document.querySelectorAll(".section-reviews .data-block .tag");
  const reviews = document.querySelectorAll(".section-reviews .review-item");

  if (tags.length > 0) {
    tags.forEach((tag) => {
      tag.addEventListener("click", () => {
        const filter = tag.dataset.filter;

        tags.forEach((t) => t.classList.remove("active"));
        tag.classList.add("active");

        reviews.forEach((review) => {
          if (filter === "all" || review.dataset.category === filter) {
            review.style.display = "block";
          } else {
            review.style.display = "none";
          }
        });
      });
    });
  }

  const showMoreButtons = document.querySelectorAll(
    ".section-reviews .showMoreButton"
  );
  if (showMoreButtons.length > 0) {
    showMoreButtons.forEach((button) => {
      button.addEventListener("click", () => {
        const reviewBody = button.previousElementSibling;
        reviewBody.classList.toggle("expanded");
        button.textContent = reviewBody.classList.contains("expanded")
          ? "Скрыть"
          : "Подробнее";
      });
    });
  }

  document.querySelectorAll(".filter-btn").forEach((button) => {
    button.addEventListener("click", () => {
      document
        .querySelectorAll(".filter-btn")
        .forEach((btn) => btn.classList.remove("active"));
      button.classList.add("active");

      const category = button.dataset.category;

      document.querySelectorAll(".accordion-item").forEach((item) => {
        if (category === "all" || item.dataset.category === category) {
          item.style.display = "block";
        } else {
          item.style.display = "none";
        }
      });
    });
  });

  Fancybox.bind('[data-fancybox="diplom"]', {
    animated: true,
    showClass: "fancybox-zoomIn",
    hideClass: "fancybox-zoomOut",
    infinite: true,
    dragToClose: true,
  });

  const PublicationDoctorSwiper = new Swiper(".swiper-publications-doctor", {
    slidesPerView: 1.2,
    spaceBetween: 20,
    navigation: {
      nextEl: ".swiper-button-next.publication",
      prevEl: ".swiper-button-prev.publication",
    },
    pagination: {
      el: ".swiper-pagination.publications",
      clickable: true,
    },
    breakpoints: {
      578: {
        slidesPerView: 2,
        spaceBetween: 15,
      },
    },
  });

  const ReviewDoctorSwiper = new Swiper(".swiper-reviews-doctor", {
    slidesPerView: 1.2,
    spaceBetween: 20,
    navigation: {
      nextEl: ".swiper-button-next.reviews",
      prevEl: ".swiper-button-prev.reviews",
    },
    pagination: {
      el: ".swiper-pagination.reviews",
      clickable: true,
    },
    breakpoints: {
      578: {
        slidesPerView: 2,
        spaceBetween: 15,
      },
    },
  });

  const DiplomDoctorSwiper = new Swiper(".swiper-diploms-doctor", {
    slidesPerView: 1.2,
    spaceBetween: 20,
    navigation: {
      nextEl: ".swiper-button-next.diploms",
      prevEl: ".swiper-button-prev.diploms",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      480: {
        slidesPerView: 2,
      },
    },
  });

  const phoneInputs = document.querySelectorAll('input[type="tel"]');

  function applyPhoneMask(input) {
    let value = input.value.replace(/\D/g, "");
    let formattedValue = "";

    if (value.length > 0) {
      formattedValue = "+7 ";
    }
    if (value.length > 1) {
      formattedValue += `(${value.slice(1, 4)}`;
    }
    if (value.length > 4) {
      formattedValue += `) ${value.slice(4, 7)}`;
    }
    if (value.length > 7) {
      formattedValue += `-${value.slice(7, 9)}`;
    }
    if (value.length > 9) {
      formattedValue += `-${value.slice(9, 11)}`;
    }

    if (value.length > 11) {
      value = value.slice(0, 11);
      formattedValue = formattedValue.slice(0, 18);
    }

    input.value = formattedValue;
  }

  phoneInputs.forEach((input) => {
    input.addEventListener("input", () => applyPhoneMask(input));
    input.addEventListener("focus", () => {
      if (!input.value) {
        input.value = "+7 (";
      }
    });
    input.addEventListener("blur", () => {
      if (input.value === "+7 (") {
        input.value = "";
      }
    });
  });

  // ------------------------------
  // Service-Swipers
  // ------------------------------

  const licenseServiceSwiper = new Swiper(".licenses-service-swiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  const galleryServiceSwiper = new Swiper(".gallery-service-swiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  const proffesionalsServiceSwiper = new Swiper(
    ".professionals-service-swiper",
    {
      slidesPerView: 1,
      spaceBetween: 20,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    }
  );

  const advantagesServiceSwiper = new Swiper(".advantages-service-swiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  const MoreArticlesSwiper = new Swiper(".more-articles-wrapper", {
    slidesPerView: 1,
    spaceBetween: 20,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: null,
      prevEl: null,
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
        pagination: {
          el: null,
        },
        navigation: {
          nextEl: ".more-articles-button.next",
          prevEl: ".more-articles-button.prev",
        },
      },
    },
  });

  // ------------------------------
  // Filter Blog
  // ------------------------------
  document.querySelectorAll(".filter-btn").forEach((button) => {
    button.addEventListener("click", () => {
      document
        .querySelectorAll(".filter-btn")
        .forEach((btn) => btn.classList.remove("active"));
      button.classList.add("active");

      const category = button.dataset.category;

      document.querySelectorAll(".blog-card").forEach((card) => {
        if (category === "all" || card.dataset.category === category) {
          card.style.display = "grid";
        } else {
          card.style.display = "none";
        }
      });
    });
  });

  // ------------------------------
  // Stars Rating
  // ------------------------------

  const starsContainer = document.getElementById("rating-stars");
  const thankYouMessage = document.getElementById("thankYouMessage");

  if (starsContainer && thankYouMessage) {
    const stars = starsContainer.querySelectorAll("span");
    let selectedValue = 0;

    function updateStars(value) {
      stars.forEach((star, index) => {
        if (index < value) {
          star.classList.add("active");
        } else {
          star.classList.remove("active");
        }
      });
    }

    stars.forEach((star) => {
      star.addEventListener("click", () => {
        selectedValue = parseInt(star.getAttribute("data-value"), 10);
        updateStars(selectedValue);

        thankYouMessage.style.display = "block";

        setTimeout(() => {
          thankYouMessage.style.animation =
            "slide-down 0.5s ease-in-out forwards";
          setTimeout(() => {
            thankYouMessage.style.display = "none";
            thankYouMessage.style.animation = "";
          }, 500);
        }, 3000);
      });

      star.addEventListener("mouseover", () => {
        const hoverValue = parseInt(star.getAttribute("data-value"), 10);
        updateStars(hoverValue);
      });

      star.addEventListener("mouseout", () => {
        updateStars(selectedValue);
      });
    });
  }
  const accordionContainer = document.getElementById("articleAccordion");
  const contentsHeader = document.getElementById("contents-header");
  const contentsContent = document.getElementById("contents-content");

  if (accordionContainer && contentsHeader && contentsContent) {
    // Обработчик клика на "Содержание статьи"
    contentsHeader.addEventListener("click", () => {
      const isOpen = contentsContent.classList.contains("open");

      if (isOpen) {
        contentsContent.classList.remove("open");
        contentsContent.style.maxHeight = null;
      } else {
        contentsContent.classList.add("open");
        contentsContent.style.maxHeight =
          contentsContent.scrollHeight + 500 + "px";
      }

      // Добавляем/удаляем класс open для поворота стрелки
      contentsHeader.classList.toggle("open");
    });

    const headings = Array.from(
      document.querySelector(".part-block").querySelectorAll("h2, h3, h4, h5")
    );

    let stack = [];

    headings.forEach((heading, index) => {
      const level = parseInt(heading.tagName.charAt(1));
      heading.id = `article-heading-${index}`;

      const accordionItem = document.createElement("div");
      accordionItem.classList.add("article-accordion-item");

      const header = document.createElement("div");
      header.classList.add("article-accordion-header");
      header.textContent = heading.textContent;

      const content = document.createElement("div");
      content.classList.add("article-accordion-content");

      header.addEventListener("click", () => {
        if (content.children.length === 0) {
          smoothScrollTo(heading);
        } else {
          toggleAccordion(header, content);
        }
      });

      accordionItem.appendChild(header);
      accordionItem.appendChild(content);

      while (stack.length > 0 && stack[stack.length - 1].level >= level) {
        stack.pop();
      }

      if (stack.length === 0) {
        accordionContainer.appendChild(accordionItem);
      } else {
        stack[stack.length - 1].content.appendChild(accordionItem);
      }

      stack.push({
        level,
        content,
      });
    });

    function toggleAccordion(header, content) {
      const isOpen = content.classList.contains("open");

      closeSiblingAccordions(content.parentElement);

      if (!isOpen) {
        content.classList.add("open");
        content.style.maxHeight = content.scrollHeight + 600 + "px";
      } else {
        content.classList.remove("open");
        content.style.maxHeight = null;
      }
    }

    function closeSiblingAccordions(parentElement) {
      const siblings = parentElement.querySelectorAll(
        ".article-accordion-content.open"
      );
      siblings.forEach((sibling) => {
        sibling.classList.remove("open");
        sibling.style.maxHeight = null;
      });
    }

    function smoothScrollTo(element) {
      element.scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
    }
  }
  // ------------------------------
  // fancybox
  // ------------------------------
  Fancybox.bind("[data-fancybox]");

  // ------------------------------
  // Комплекс
  // ------------------------------
  const complexCards = document.querySelectorAll(".complex-card");
  const prismaButtonsContainer = document.querySelector(".prisma-with-buttons");

  const activateCardByIndex = (index) => {
    complexCards.forEach((c) => c.classList.remove("active"));

    if (complexCards[index]) {
      complexCards[index].classList.add("active");
    }

    prismaButtonsContainer.querySelectorAll("img").forEach((button) => {
      button.classList.remove("active-button");
    });

    const prismaId = `prisma-${index + 1}`;
    const activePrismaButton = prismaButtonsContainer.querySelector(
      `#${prismaId}`
    );
    if (activePrismaButton) {
      activePrismaButton.classList.add("active-button");
    }
  };

  complexCards.forEach((card, index) => {
    card.addEventListener("click", () => {
      activateCardByIndex(index);
    });
  });

  if (prismaButtonsContainer) {
    prismaButtonsContainer
      .querySelectorAll("img[id^='prisma-']")
      .forEach((button, index) => {
        button.addEventListener("click", () => {
          activateCardByIndex(index);
        });
      });
  }

  // ------------------------------
  // Поиск

  // ------------------------------
  const searchIcon = document.getElementById("searchIcon");
  const searchMenu = document.getElementById("searchMenu");
  const header = document.querySelector(".header");
  const searchInput = document.getElementById("searchInput");
  const clearButton = document.getElementById("clearSearch");
  const closeSearch = document.getElementById("closeSearch");
  const searchResults = document.getElementById("searchResults");

  searchIcon?.addEventListener("click", () => {
    header.classList.add("search-open");
    searchMenu.classList.add("open");
    searchInput.focus();
  });

  closeSearch?.addEventListener("click", () => {
    header.classList.remove("search-open");
    searchMenu.classList.remove("open");
    searchInput.value = "";
    searchResults.innerHTML = "";
  });

  clearButton?.addEventListener("click", () => {
    searchInput.value = "";
    searchResults.innerHTML = "";
  });

  searchInput?.addEventListener("input", () => {
    const query = searchInput.value.trim();
    if (query) {
      searchResults.innerHTML = `
        <p>Результат для "${query}"</p>
        <p><a href="#">Статья о лечении зависимости</a></p>
        <p><a href="#">Вопрос врачу</a></p>
      `;
    } else {
      searchResults.innerHTML = "";
    }
  });

  document.addEventListener("click", (event) => {
    if (
      searchMenu &&
      !searchMenu.contains(event.target) &&
      !searchIcon?.contains(event.target)
    ) {
      header.classList.remove("search-open");
      searchMenu.classList.remove("open");
      searchInput.value = "";
      searchResults.innerHTML = "";
    }
  });

  // ------------------------------
  // Аккордеоны
  // ------------------------------
  const accordions = document.querySelectorAll(".accordion");
  accordions.forEach((accordion) => {
    const items = accordion.querySelectorAll(".accordion-item");
    items.forEach((item) => {
      const upperBlock = item.querySelector(".upper-block");
      const arrow = item.querySelector(".accordion-arrow");
      const content = item.querySelector(".accordion-content");

      upperBlock?.addEventListener("click", () => {
        const isOpen = content.classList.contains("open");
        items.forEach((otherItem) => {
          if (otherItem !== item) {
            otherItem
              .querySelector(".accordion-content")
              .classList.remove("open");
            otherItem
              .querySelector(".accordion-arrow")
              .classList.remove("open");
            otherItem.querySelector(".upper-block").classList.remove("open");
          }
        });
        content.classList.toggle("open", !isOpen);
        arrow.classList.toggle("open", !isOpen);
        upperBlock.classList.toggle("open", !isOpen);
      });
    });
  });

  // ------------------------------
  // Анимация появления элементов
  // ------------------------------
  const wrappers = document.querySelectorAll('[class*="-wrapper"]');
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.1 }
  );
  wrappers.forEach((wrapper) => observer.observe(wrapper));

  // ------------------------------
  // Модальное окно
  // ------------------------------
  const modal = document.querySelector(".modal");
  const buttonsModal = document.querySelectorAll(".btn");
  const closeBtn = document.querySelector(".close");

  function openModal() {
    modal.style.display = "flex";
    setTimeout(() => modal.classList.add("open"), 10);
  }

  function closeModal() {
    modal.classList.remove("open");
    modal.style.animation = "fadeOut 0.3s ease-in-out";
    setTimeout(() => {
      modal.style.display = "none";
      modal.style.animation = "";
    }, 300);
  }

  buttonsModal.forEach((button) => button.addEventListener("click", openModal));
  closeBtn?.addEventListener("click", closeModal);
  modal?.addEventListener("click", (e) => {
    if (e.target === modal) closeModal();
  });

  // Логика для второго модального окна (если есть)
  const modalConsultation = document.querySelector(".modal-consultation");
  const buttonsModalConsultation =
    document.querySelectorAll(".btn_consultation");
  const closeBtnConsultation = document.querySelector(".close-consultation");

  function openModalConsultation() {
    modalConsultation.style.display = "flex";
    setTimeout(() => modalConsultation.classList.add("open"), 10);
  }

  function closeModalConsultation() {
    modalConsultation.classList.remove("open");
    modalConsultation.style.animation = "fadeOut 0.3s ease-in-out";
    setTimeout(() => {
      modalConsultation.style.display = "none";
      modalConsultation.style.animation = "";
    }, 300);
  }

  buttonsModalConsultation.forEach((button) =>
    button.addEventListener("click", openModalConsultation)
  );
  closeBtnConsultation?.addEventListener("click", closeModalConsultation);
  modalConsultation?.addEventListener("click", (e) => {
    if (e.target === modalConsultation) closeModalConsultation();
  });

  // Логика для нового модального окна
  const modalReview = document.querySelector(".modal-review");
  const buttonsModalReview = document.querySelectorAll(".btn-review-modal");
  const closeBtnReview = document.querySelector(".close-review");

  function openModalReview() {
    modalReview.style.display = "flex";
    setTimeout(() => modalReview.classList.add("open"), 10);
  }

  function closeModalReview() {
    modalReview.classList.remove("open");
    modalReview.style.animation = "fadeOut 0.3s ease-in-out";
    setTimeout(() => {
      modalReview.style.display = "none";
      modalReview.style.animation = "";
    }, 300);
  }

  buttonsModalReview.forEach((button) =>
    button.addEventListener("click", openModalReview)
  );
  closeBtnReview?.addEventListener("click", closeModalReview);
  modalReview?.addEventListener("click", (e) => {
    if (e.target === modalReview) closeModalReview();
  });

  // ------------------------------
  // Меню с подменю
  // ------------------------------

  const menuIcon = document.querySelector(".menu-icon");

  function initMenuIconHandler() {
    menuIcon?.addEventListener("click", () => {
      menuIcon.classList.toggle("active");
      menuContainer.classList.toggle("active");

      if (menuContainer.classList.contains("active")) {
        header.style.borderBottomLeftRadius = "0px";
        header.style.borderBottomRightRadius = "0px";
      } else {
        header.style.borderBottomLeftRadius = "";
        header.style.borderBottomRightRadius = "";
      }
    });

    document.addEventListener("click", (event) => {
      if (
        menuContainer &&
        menuContainer.classList.contains("active") &&
        !menuContainer.contains(event.target) &&
        !menuIcon.contains(event.target)
      ) {
        menuIcon.classList.remove("active");
        menuContainer.classList.remove("active");
        header.style.borderBottomLeftRadius = "";
        header.style.borderBottomRightRadius = "";
      }
    });
  }

  initMenuIconHandler();

  window.addEventListener("resize", () => {
    const activeMenuItem = document.querySelector(".menu-item.active");
    if (activeMenuItem) {
      handleDynamicContent(activeMenuItem);
    }
  });

  // ------------------------------
  // Yandex Maps
  // ------------------------------
  ymaps.ready(() => {
    const mapElement = document.getElementById("map");
    if (mapElement) {
      const myMap = new ymaps.Map("map", {
        center: [54.1377, 37.5903],
        zoom: 10,
        controls: [],
      });

      const myPlacemark = new ymaps.Placemark(
        [54.1377, 37.5903],
        {},
        {
          iconLayout: "default#image",
          iconImageHref: "/assets/images/icons/mapPin.png",
          iconImageSize: [20, 30],
          iconImageOffset: [-20, -40],
        }
      );

      myMap.geoObjects.add(myPlacemark);
    }

    const mapSecondElement = document.getElementById("map_second");
    if (mapSecondElement) {
      const myMapSecond = new ymaps.Map("map_second", {
        center: [54.193278, 37.619196],
        zoom: 15,
        controls: ["zoomControl"],
      });

      const myPlacemarkSecond = new ymaps.Placemark(
        [54.193278, 37.619196],
        {
          hintContent: "г. Тула, ул. Ленина, 191, офис 153",
          balloonContent:
            "Проблема в том, что вместе с положительным эффектом...",
        },
        {
          iconLayout: "default#image",
          iconImageHref: "/assets/images/icons/mapPin.png",
          iconImageSize: [20, 30],
          iconImageOffset: [-20, -40],
        }
      );

      myMapSecond.geoObjects.add(myPlacemarkSecond);
    }
  });
  // ------------------------------
  // Счетчики
  // ------------------------------
  const counters = document.querySelectorAll(".number");
  const duration = 2000;

  const observerNew = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const counter = entry.target;
          animateCounter(counter);
          observerNew.unobserve(counter);
        }
      });
    },
    { threshold: 0.5 }
  );

  counters.forEach((counter) => observerNew.observe(counter));

  function animateCounter(counter) {
    const target = +counter.getAttribute("data-target");
    const symbol = counter.getAttribute("data-symbol") || "";
    const increment = target / (duration / 16);
    let current = 0;

    const updateCounter = () => {
      if (current < target) {
        current += increment;
        counter.textContent = Math.floor(current);
        requestAnimationFrame(updateCounter);
      } else {
        counter.textContent = target;
        addSymbol(counter, symbol);
      }
    };
    updateCounter();
  }

  function addSymbol(element, symbol) {
    if (symbol) {
      const symbolSpan = document.createElement("span");
      symbolSpan.textContent = symbol;
      symbolSpan.style.marginLeft = "5px";
      element.appendChild(symbolSpan);
    }
  }

  // ------------------------------
  // Swiper слайдеры
  // ------------------------------
  const swiperDoctors = new Swiper(".swiper-container-doctors", {
    slidesPerView: "auto",
    spaceBetween: 20,
    slidesPerGroup: 1,
    pagination: {
      el: ".swiper-pagination",
    },
    navigation: {
      nextEl: ".swiper-button-next.doctors-item",
      prevEl: ".swiper-button-prev.doctors-item",
    },
    breakpoints: {
      0: { slidesPerView: 1.3, spaceBetween: 10 },
      480: { slidesPerView: 1.2, spaceBetween: 20 },
      640: { slidesPerView: 2.2 },
      1024: { slidesPerView: 3.3 },
      1280: { slidesPerView: 4 },
    },
  });

  let swiperInstance = null;
  const initSwiper = () => {
    if (window.innerWidth < 768 && !swiperInstance) {
      swiperInstance = new Swiper(".swiper-container-complex", {
        slidesPerView: 1.2,
        spaceBetween: 20,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          0: { slidesPerView: 1.2, spaceBetween: 10 },
          578: { slidesPerView: 2.2, spaceBetween: 20 },
        },
      });
    } else if (window.innerWidth >= 768 && swiperInstance) {
      swiperInstance.destroy(true, true);
      swiperInstance = null;
    }
  };

  window.addEventListener("resize", initSwiper);
  initSwiper();

  const readMoreBtn = document.querySelector(".read-more-btn");
  const articleContent = document.querySelector(".article-content");

  if (!articleContent || !readMoreBtn) {
    return;
  }

  const fullHeight = articleContent.scrollHeight;
  let isExpanded = false;

  function setInitialHeight() {
    const initialHeight = window.innerWidth <= 1010 ? 170 : 544;
    articleContent.style.maxHeight = `${initialHeight}px`;
  }

  function checkButtonVisibility() {
    const initialHeight = window.innerWidth <= 1010 ? 170 : 544;
    if (fullHeight <= initialHeight) {
      readMoreBtn.style.display = "none";
    } else {
      readMoreBtn.style.display = "block";
    }
  }

  setInitialHeight();
  checkButtonVisibility();

  readMoreBtn.addEventListener("click", () => {
    const initialHeight = window.innerWidth <= 1010 ? 170 : 544;

    if (!isExpanded) {
      articleContent.style.maxHeight = `${fullHeight + 200}px`;
      readMoreBtn.textContent = "Скрыть";
    } else {
      articleContent.style.maxHeight = `${initialHeight}px`;
      readMoreBtn.textContent = "Читать полностью ";
    }

    isExpanded = !isExpanded;
  });

  window.addEventListener("resize", () => {
    setInitialHeight();
    checkButtonVisibility();

    if (!isExpanded) {
      const initialHeight = window.innerWidth <= 1010 ? 170 : 544;
      articleContent.style.maxHeight = `${initialHeight}px`;
    }
  });
});
