document.addEventListener("DOMContentLoaded", () => {
  const menuTitles = document.querySelectorAll(".menu-title");

  menuTitles.forEach((title) => {
    title.addEventListener("click", () => {
      const menuItem = title.closest(".menu-item");
      if (!menuItem) return;

      const submenuContainer = menuItem.querySelector(".submenu-container");

      submenuContainer.classList.toggle("open");

      title.classList.toggle("active");

      // Закрываем другие открытые меню
      menuTitles.forEach((otherTitle) => {
        if (otherTitle !== title) {
          otherTitle.classList.remove("active");
          const otherSubmenu = otherTitle
            .closest(".menu-item")
            ?.querySelector(".submenu-container");
          if (otherSubmenu) {
            otherSubmenu.classList.remove("open");
          }
        }
      });
    });
  });

  const complexCards = document.querySelectorAll(
    ".complex-section .complex-card"
  );

  Fancybox.bind("[data-fancybox]", {
    video: {
      autoplay: true,
      ratio: 16 / 9,
    },
  });

  function initMap() {
    const coordinates = [54.193161, 37.616897];

    const map = new ymaps.Map("map_second", {
      center: coordinates,
      zoom: 16,
      controls: ["zoomControl"],
    });

    const placemark = new ymaps.Placemark(coordinates, {
      hintContent: "Клиника «Призма»",
      balloonContent: "г. Тула, ул. Ленина, 191, офис 153",
    });

    map.geoObjects.add(placemark);
  }

  const script = document.createElement("script");
  script.src = "https://api-maps.yandex.ru/2.1/?apikey=ВАШ_API_КЛЮЧ&lang=ru_RU";
  script.onload = function () {
    ymaps.ready(initMap);
  };
  document.head.appendChild(script);

  const prismaImages = document.querySelectorAll(
    ".prisma-with-buttons img[id^='prisma-']"
  );

  function toggleCardAndButton(activeCardIndex) {
    complexCards.forEach((card) => {
      card.classList.remove("active");
    });

    prismaImages.forEach((image) => {
      image.classList.remove("active-button");
    });

    if (complexCards[activeCardIndex]) {
      complexCards[activeCardIndex].classList.add("active");
    }

    if (prismaImages[activeCardIndex]) {
      prismaImages[activeCardIndex].classList.add("active-button");
    }
  }

  complexCards.forEach((card, index) => {
    card.addEventListener("click", () => {
      toggleCardAndButton(index);
    });
  });

  prismaImages.forEach((image, index) => {
    image.addEventListener("click", () => {
      toggleCardAndButton(index);
    });
  });
  const articleContent = document.querySelector(".article-content");
  const readMoreBtn = document.querySelector(".read-more-btn");

  let isExpanded = false;

  const fullHeight = articleContent.scrollHeight;

  if (window.innerWidth <= 1010) {
    articleContent.style.maxHeight = "170px";
  } else {
    articleContent.style.maxHeight = "544px";
  }

  function checkButtonVisibility() {
    const initialHeight = window.innerWidth <= 1010 ? 170 : 544;
    if (fullHeight <= initialHeight) {
      readMoreBtn.style.display = "none";
    } else {
      readMoreBtn.style.display = "block";
    }
  }

  checkButtonVisibility();

  readMoreBtn.addEventListener("click", function () {
    if (!isExpanded) {
      articleContent.style.maxHeight = `${fullHeight + 200}px`;
      readMoreBtn.textContent = "Скрыть";
    } else {
      const initialHeight = window.innerWidth <= 1010 ? 170 : 544;
      articleContent.style.maxHeight = `${initialHeight}px`;
      readMoreBtn.textContent = "Читать полностью";
    }
    isExpanded = !isExpanded;
  });

  window.addEventListener("resize", function () {
    const initialHeight = window.innerWidth <= 1010 ? 170 : 544;

    if (!isExpanded) {
      articleContent.style.maxHeight = `${initialHeight}px`;
    }

    checkButtonVisibility();
  });

  const accordionItems = document.querySelectorAll(".accordion-item");

  accordionItems.forEach((item) => {
    const upperBlock = item.querySelector(".upper-block");
    const arrow = item.querySelector(".accordion-arrow");
    const content = item.querySelector(".accordion-content");
    const menuItems = document.querySelectorAll(".menu-item");
    const dynamicContent = document.querySelector(".dynamic-content");

    menuItems.forEach((item) => {
      item.addEventListener("click", (event) => {
        event.preventDefault();
        const target = item.getAttribute("data-target");
        updateDynamicContent(target);
        positionDynamicContent(item);
      });
    });

    upperBlock.addEventListener("click", () => {
      const isOpen = content.classList.contains("open");

      accordionItems.forEach((otherItem) => {
        if (otherItem !== item) {
          otherItem
            .querySelector(".accordion-content")
            .classList.remove("open");
          otherItem.querySelector(".accordion-arrow").classList.remove("open");
          otherItem.querySelector(".upper-block").classList.remove("open");
        }
      });

      content.classList.toggle("open", !isOpen);
      arrow.classList.toggle("open", !isOpen);
      upperBlock.classList.toggle("open", !isOpen);
    });
  });

  const categoryButtons = document.querySelectorAll(".category-btn");
  const priceCategories = document.querySelectorAll(".price-category");
  const dynamicContent = document.querySelector(".menu-column.dynamic-content");
  const moreCategoriesBtn = document.querySelector(".more-categories-btn");
  const additionalCategories = document.querySelector(".additional-categories");
  const menuIcon = document.querySelector(".menu-icon");
  const menuContainer = document.querySelector(".menu-container");
  const header = document.querySelector(".header");

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
    {
      threshold: 0.1,
    }
  );

  wrappers.forEach((wrapper) => {
    observer.observe(wrapper);
  });

  function loadStyles() {
    const style = document.createElement("link");
    style.rel = "stylesheet";
    style.href = "styles.css";
    document.head.appendChild(style);
  }

  window.addEventListener("scroll", loadStyles, { once: true });

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
    if (data) {
      const dynamicTitle = document.getElementById("dynamicTitle");
      const dynamicList = document.getElementById("dynamicList");

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

      dynamicContent.style.opacity = 0;
      setTimeout(() => (dynamicContent.style.opacity = 1), 50);
    }
  }

  function positionDynamicContent(menuItem) {
    if (!menuItem || !menuItem.classList.contains("active")) return;

    if (dynamicContent.parentNode) {
      dynamicContent.remove();
    }

    menuItem.after(dynamicContent);

    dynamicContent.style.opacity = 0;
    setTimeout(() => (dynamicContent.style.opacity = 1), 50);
  }

  function initMenuIconHandler() {
    menuIcon.addEventListener("click", () => {
      menuIcon.classList.toggle("active");
      menuContainer.classList.toggle("active");

      if (menuContainer.classList.contains("active")) {
        header.style.borderBottomLeftRadius = "0px";
        header.style.borderBottomRightRadius = "0px";
      } else {
        header.style.borderBottomLeftRadius = "";
        header.style.borderBottomRightRadius = "";

        if (dynamicContent.parentNode) {
          dynamicContent.remove();
        }
      }
    });

    document.addEventListener("click", (event) => {
      if (
        menuContainer.classList.contains("active") &&
        !menuContainer.contains(event.target) &&
        !menuIcon.contains(event.target)
      ) {
        menuIcon.classList.remove("active");
        menuContainer.classList.remove("active");
        header.style.borderBottomLeftRadius = "";
        header.style.borderBottomRightRadius = "";

        if (dynamicContent.parentNode) {
          dynamicContent.remove();
        }
      }
    });
  }

  ymaps.ready(init);

  function init() {
    var myMap = new ymaps.Map("map", {
      center: [54.1377, 37.5903],
      zoom: 10,
      controls: [],
    });

    var myPlacemark = new ymaps.Placemark(
      [54.1377, 37.5903],
      {},
      {
        iconColor: "#6c5ce7",
      }
    );
    myMap.geoObjects.add(myPlacemark);
  }

  categoryButtons.forEach((btn, index) => {
    btn.addEventListener("click", () => {
      categoryButtons.forEach((b) => b.classList.remove("active"));
      priceCategories.forEach((c) => c.classList.remove("active"));

      btn.classList.add("active");
      priceCategories[index].classList.add("active");
    });
  });

  const detailsBtns = document.querySelectorAll(".details-btn");
  detailsBtns.forEach((btn) => {
    btn.addEventListener("click", (event) => {
      event.preventDefault();

      const priceItem = btn.closest(".price-item");
      const details = priceItem.querySelector(".details");

      if (details) {
        details.classList.toggle("show");
      }
    });
  });

  moreCategoriesBtn.addEventListener("click", (event) => {
    event.stopPropagation();
    additionalCategories.style.display =
      additionalCategories.style.display === "block" ? "none" : "block";
  });

  document.addEventListener("click", (event) => {
    if (
      !moreCategoriesBtn.contains(event.target) &&
      !additionalCategories.contains(event.target)
    ) {
      additionalCategories.style.display = "none";
    }
  });

  menuIcon.addEventListener("click", () => {
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

  document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".number");
    const duration = 2000; // Продолжительность анимации в миллисекундах

    // Создаем Intersection observerNew
    const observerNew = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const counter = entry.target;

            // Запускаем анимацию
            animateCounter(counter);

            // Отключаем наблюдение после запуска анимации
            observerNew.unobserve(counter);
          }
        });
      },
      {
        threshold: 0.5,
      }
    ); // Анимация начнется, когда 50% элемента станет видимым

    // Наблюдаем за каждым числом
    counters.forEach((counter) => observerNew.observe(counter));

    function animateCounter(counter) {
      const target = +counter.getAttribute("data-target"); // Получаем целевое значение
      const symbol = counter.getAttribute("data-symbol") || ""; // Получаем символ из атрибута data-symbol
      const increment = target / (duration / 16); // Вычисляем шаг увеличения
      let current = 0;

      const updateCounter = () => {
        if (current < target) {
          current += increment;
          counter.textContent = Math.floor(current); // Обновляем текстовое содержимое
          requestAnimationFrame(updateCounter); // Повторяем анимацию
        } else {
          counter.textContent = target; // Устанавливаем точное значение в конце
          addSymbol(counter, symbol); // Добавляем символ
        }
      };

      updateCounter(); // Запускаем анимацию
    }

    function addSymbol(element, symbol) {
      if (symbol) {
        const symbolSpan = document.createElement("span");
        symbolSpan.textContent = symbol;
        symbolSpan.style.marginLeft = "5px"; // Отступ от числа
        element.appendChild(symbolSpan); // Добавляем символ к числу
      }
    }
  });

    const swiper = new Swiper(".swiper-container-doctors", {
      slidesPerView: "auto",
      spaceBetween: 20,
      slidesPerGroup: 1,
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
    {
      threshold: 0.5,
    }
  ); 

  counters.forEach((counter) => observerNew.observe(counter));

  function animateCounter(counter) {
    const target = +counter.getAttribute("data-target"); // Получаем целевое значение
    const symbol = counter.getAttribute("data-symbol") || ""; // Получаем символ из атрибута data-symbol
    const increment = target / (duration / 16); // Вычисляем шаг увеличения
    let current = 0;

    const updateCounter = () => {
      if (current < target) {
        current += increment;
        counter.textContent = Math.floor(current); // Обновляем текстовое содержимое
        requestAnimationFrame(updateCounter); // Повторяем анимацию
      } else {
        counter.textContent = target; // Устанавливаем точное значение в конце
        addSymbol(counter, symbol); // Добавляем символ
      }
    };

    updateCounter(); // Запускаем анимацию
  }

  function addSymbol(element, symbol) {
    if (symbol) {
      const symbolSpan = document.createElement("span");
      symbolSpan.textContent = symbol;
      symbolSpan.style.marginLeft = "5px"; // Отступ от числа
      element.appendChild(symbolSpan); // Добавляем символ к числу
    }
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const swiper = new Swiper(".swiper-container-doctors", {
    slidesPerView: "auto",
    spaceBetween: 20,
    slidesPerGroup: 1,
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
  // Проигрыватель видео
  const video = document.getElementById("promo-video");
  const playButton = document.querySelector(".play-button");

  playButton.addEventListener("click", () => {
    if (video.paused) {
      video.play();
      playButton.style.display = "none";
    } else {
      video.pause();
      playButton.style.display = "block";
    }
  });

  video.addEventListener("click", () => {
    if (!video.paused) {
      video.pause();
      playButton.style.display = "block";
    }
  });

  video.addEventListener("pause", () => {
    playButton.style.display = "block";
  });

  const buttons = document.querySelectorAll(
    ".prisma-with-buttons img:not(:first-child)"
  );
  const cards = document.querySelectorAll(".complex-card");

  const activateCard = (index) => {
    cards.forEach((card) => card.classList.remove("active"));
    cards[index].classList.add("active");
  };

  const activateButton = (index) => {
    buttons.forEach((button) => button.classList.remove("active-button"));
    buttons[index].classList.add("active-button");
  };

  buttons.forEach((button, index) => {
    button.addEventListener("click", () => {
      activateCard(index);
      activateButton(index);
    });
  });

  cards.forEach((card, index) => {
    card.addEventListener("click", () => {
      if (card.classList.contains("active")) {
        card.classList.remove("active");
        buttons[index].classList.remove("active-button");
      } else {
        activateCard(index);
        activateButton(index);
      }
    });
  });

  if (cards.length > 0 && buttons.length > 0) {
    activateCard(1);
    activateButton(1);
  }

  let swiperInstance = null;

  const initSwiper = () => {
    if (window.innerWidth < 768 && !swiperInstance) {
      swiperInstance = new Swiper(".swiper-container-complex", {
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
    } else if (window.innerWidth >= 768 && swiperInstance) {
      swiperInstance.destroy(true, true);
      swiperInstance = null;
    }
  };

  window.addEventListener("resize", () => {
    initSwiper();
  });

  initSwiper();
  initMenuHandlers();
  initAllSwipers();
  initMenuIconHandler();
});
