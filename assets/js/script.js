document.addEventListener("DOMContentLoaded", () => {
  const toggleButtonTime = document.getElementById("schedule-toggle");
  const scheduleContent = document.getElementById("schedule-content");

  if (toggleButtonTime && scheduleContent) {
    const arrowIcon = toggleButtonTime.querySelector(".arrow-icon");

    if (arrowIcon) {
      toggleButtonTime.addEventListener("click", function () {
        scheduleContent.classList.toggle("open");

        if (scheduleContent.classList.contains("open")) {
          arrowIcon.style.transform = "translateY(-50%) rotate(180deg)";
        } else {
          arrowIcon.style.transform = "translateY(-50%) rotate(0deg)";
        }
      });
    }
  }

  // Выбор всех элементов
  const toggleButton = document.querySelector(".dropdown-toggle");
  const dropdownMenu = document.querySelector(".dropdown-menu");
  const categoryButtons = document.querySelectorAll(".category-btn");
  const priceCategories = document.querySelectorAll(".price-category");

  // Открытие/закрытие выпадающего меню
  if (toggleButton && dropdownMenu) {
    toggleButton.addEventListener("click", () => {
      dropdownMenu.classList.toggle("show");
      toggleButton.classList.toggle("active");
    });

    // Закрытие выпадающего меню при клике вне его области
    document.addEventListener("click", (event) => {
      if (
        !toggleButton.contains(event.target) &&
        !dropdownMenu.contains(event.target)
      ) {
        dropdownMenu.classList.remove("show");
        toggleButton.classList.remove("active");
      }
    });
  }

  // Обработка выбора категории
  categoryButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const selectedCategory = button.dataset.category;

      // Удаляем активный класс у всех кнопок
      categoryButtons.forEach((btn) => btn.classList.remove("active"));

      // Добавляем активный класс только выбранной кнопке
      button.classList.add("active");

      // Скрываем все категории цен
      priceCategories.forEach((category) => {
        category.classList.remove("active");
      });

      // Показываем только выбранную категорию
      const selectedPriceCategory = document.querySelector(
        `.price-category[data-category="${selectedCategory}"]`
      );
      if (selectedPriceCategory) {
        selectedPriceCategory.classList.add("active");
      }

      // Закрываем выпадающее меню после выбора
      if (dropdownMenu.classList.contains("show")) {
        dropdownMenu.classList.remove("show");
        toggleButton.classList.remove("active");
      }
    });
  });

  // Обработка кнопок "Подробнее"
  document.querySelectorAll(".details-btn").forEach((button) => {
    button.addEventListener("click", (event) => {
      event.stopPropagation(); // Предотвращаем всплытие события

      const details = button.nextElementSibling; // Находим блок с деталями
      if (details) {
        details.classList.toggle("visible"); // Переключаем видимость
      }
    });
  });
  const swiperClinic = new Swiper(".swiper-clinic", {
    spaceBetween: 20,
    slidesPerView: 1.2,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".pagination-clinic",
      clickable: true,
    },
  });

  const swiperRoom = new Swiper(".swiper-room", {
    spaceBetween: 20,
    slidesPerView: 1.2,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".pagination-room",
      clickable: true,
    },
  });

  const swiperDoctor = new Swiper(".swiper-doctor", {
    spaceBetween: 20,
    slidesPerView: 1.2,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".pagination-doctor",
      clickable: true,
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
        slidesPerView: 2.2,
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
        slidesPerView: 2.2,
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
        slidesPerView: 2.2,
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
  const menuTitles = document.querySelectorAll(".menu-title");
  menuTitles.forEach((title) => {
    title.addEventListener("click", () => {
      const menuItem = title.closest(".menu-item");
      if (!menuItem) return;

      const submenuContainer = menuItem.querySelector(".submenu-container");
      if (!submenuContainer) return; // Проверка на существование

      submenuContainer.classList.toggle("open");
      title.classList.toggle("active");

      menuTitles.forEach((otherTitle) => {
        if (otherTitle !== title) {
          otherTitle.classList.remove("active");
          const otherSubmenu = otherTitle
            .closest(".menu-item")
            ?.querySelector(".submenu-container");
          if (otherSubmenu) otherSubmenu.classList.remove("open");
        }
      });
    });
  });
  const menuIcon = document.querySelector(".menu-icon");
  const menuContainer = document.querySelector(".menu-container");
  const dynamicContentElement = document.querySelector(".dynamic-content"); // Ищем элемент по классу
  const menuItems = document.querySelectorAll(".menu-item");

  // Присваиваем id="dynamicContent" элементу с классом "dynamic-content", если он найден
  if (dynamicContentElement && !dynamicContentElement.id) {
    dynamicContentElement.id = "dynamicContent";
  }

  const dynamicContent = document.getElementById("dynamicContent"); // Теперь используем ID

  const menuData = {
    "alcohol-treatment": {
      title: "Лечение алкоголизма",
      items: [
        "Кодирование от алкоголизма",
        "Психологическая помощь",
        "Реабилитация",
      ],
    },
    detox: {
      title: "Вывод из запоя",
      items: [
        "Медикаментозный вывод из запоя",
        "Дезинтоксикационная терапия",
        "Поддерживающая терапия",
      ],
    },
    "about-clinic": {
      title: "О клинике",
      items: ["История клиники", "Наши врачи", "Отзывы пациентов"],
    },
  };

  function updateDynamicContent(target) {
    const data = menuData[target];
    if (!data) {
      console.error(`Данные для "${target}" не найдены.`);
      return;
    }

    const dynamicTitle = document.getElementById("dynamicTitle");
    const dynamicList = document.getElementById("dynamicList");

    if (!dynamicTitle || !dynamicList) {
      console.error("Элементы dynamicTitle или dynamicList не найдены.");
      return;
    }

    dynamicTitle.textContent = data.title;
    dynamicList.innerHTML = "";

    data.items.forEach((item) => {
      const li = document.createElement("li");
      const a = document.createElement("a");
      a.textContent = item;
      a.href = "#";
      li.appendChild(a);
      dynamicList.appendChild(li);
    });

    if (dynamicContent) {
      dynamicContent.style.opacity = 0;
      setTimeout(() => (dynamicContent.style.opacity = 1), 50);
    }
  }

  function moveDynamicContentUnderMenuItem(menuItem) {
    if (!dynamicContent) return;

    if (dynamicContent.parentNode) {
      dynamicContent.parentNode.removeChild(dynamicContent);
    }

    menuItem.insertAdjacentElement("afterend", dynamicContent);
  }

  function positionDynamicContentInContainer(menuItem) {
    if (!menuItem || !menuItem.classList.contains("active")) return;
    if (!dynamicContent) return;

    if (dynamicContent.parentNode) {
      dynamicContent.parentNode.removeChild(dynamicContent);
    }

    const parentUl = menuItem.closest(".menu-columns");
    if (parentUl) {
      parentUl.appendChild(dynamicContent);
    }

    dynamicContent.style.opacity = 0;
    setTimeout(() => (dynamicContent.style.opacity = 1), 50);
  }

  function handleDynamicContent(menuItem) {
    const target = menuItem.getAttribute("data-target");
    if (!target) return;

    menuItems.forEach((item) => item.classList.remove("active"));
    menuItem.classList.add("active");

    updateDynamicContent(target);

    if (window.matchMedia("(max-width: 768px)").matches) {
      moveDynamicContentUnderMenuItem(menuItem);
    } else {
      positionDynamicContentInContainer(menuItem);
    }
  }

  menuItems.forEach((menuItem) => {
    menuItem.addEventListener("click", (event) => {
      event.preventDefault();
      handleDynamicContent(menuItem);
    });
  });

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
        if (dynamicContent && dynamicContent.parentNode) {
          dynamicContent.parentNode.removeChild(dynamicContent);
        }
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
        if (dynamicContent && dynamicContent.parentNode) {
          dynamicContent.parentNode.removeChild(dynamicContent);
        }
      }
    });
  }

  initMenuIconHandler();

  document.addEventListener("DOMContentLoaded", () => {
    const firstMenuItem = document.querySelector(".menu-item");
    if (firstMenuItem) {
      handleDynamicContent(firstMenuItem);
    }
  });

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
        { iconColor: "#6c5ce7" }
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
        { iconColor: "#ff6f61" }
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
      nextEl: ".next-button-doctors",
      prevEl: ".prev-button-doctors",
    },
    breakpoints: {
      0: { slidesPerView: 1.3, spaceBetween: 10 },
      480: { slidesPerView: 1.2, spaceBetween: 20 },
      640: { slidesPerView: 2.2 },
      1024: { slidesPerView: 3.3 },
      1280: { slidesPerView: 4.4 },
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
      readMoreBtn.textContent = "Читать полностью";
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

  document.addEventListener("DOMContentLoaded", () => {
    const reviewCards = document.querySelectorAll(".review-card");

    reviewCards.forEach((card) => {
      const moreButton = card.querySelector(".more");
      const textBlock = card.querySelector(".text p");

      if (!moreButton || !textBlock) return;

      let isExpanded = false;

      const initialHeight = textBlock.clientHeight;

      textBlock.style.maxHeight = `${initialHeight}px`;
      textBlock.style.overflow = "hidden";
      textBlock.style.transition = "max-height 0.3s ease-in-out";

      moreButton.addEventListener("click", () => {
        if (!isExpanded) {
          textBlock.style.maxHeight = `${textBlock.scrollHeight}px`;
          moreButton.innerHTML =
            '<span>Скрыть</span><img src="/assets/images/icons/up.png">';
        } else {
          textBlock.style.maxHeight = `${initialHeight}px`;
          moreButton.innerHTML =
            '<span>Подробнее</span><img src="/assets/images/icons/down.png">';
        }

        isExpanded = !isExpanded;
      });
    });
  });
});
