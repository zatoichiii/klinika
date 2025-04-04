document.addEventListener("DOMContentLoaded", () => {
  const categoryButtons = document.querySelectorAll(".category-btn");
  const priceCategories = document.querySelectorAll(".price-category");
  const dynamicContent = document.querySelector(".menu-column.dynamic-content");
  const moreCategoriesBtn = document.querySelector(".more-categories-btn");
  const additionalCategories = document.querySelector(".additional-categories");
  const menuIcon = document.querySelector(".menu-icon");
  const menuContainer = document.querySelector(".menu-container");
  const header = document.querySelector(".header");

    const wrappers = document.querySelectorAll('[class*="-wrapper"]');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1, 
    });

    wrappers.forEach((wrapper) => {
        observer.observe(wrapper);
    });

    function loadStyles() {
      const style = document.createElement("link");
      style.rel = "stylesheet";
      style.href = "styles.css"; 
      document.head.appendChild(style);
  }
  
  document.addEventListener("DOMContentLoaded", () => {
      window.addEventListener("scroll", loadStyles, { once: true });
  });

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

  function initMenuHandlers() {
    const menuItems = document.querySelectorAll(".main-menu li");

    menuItems.forEach((menuItem) => {
      if (!menuItem.dataset.target) return;

      menuItem.addEventListener("click", (event) => {
        event.stopPropagation();

        menuItems.forEach((item) => {
          if (item !== menuItem) {
            item.classList.remove("active");
          }
        });

        menuItem.classList.toggle("active");

        if (menuItem.classList.contains("active")) {
          updateDynamicContent(menuItem.dataset.target);

          positionDynamicContent(menuItem);
        } else {
          if (dynamicContent.parentNode) {
            dynamicContent.remove();
          }
        }

        const arrow = menuItem.querySelector("img.arrow");
        if (arrow)
          arrow.classList.toggle(
            "active",
            menuItem.classList.contains("active")
          );
      });
    });
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
    const header = document.querySelector(".header");

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

  initMenuHandlers();
  initAllSwipers();
  initMenuIconHandler();
});
