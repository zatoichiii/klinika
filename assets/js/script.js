document.addEventListener("DOMContentLoaded", () => {
  const bannerWrapper = document.querySelector(".banner-wrapper");
  const swiperContainer = document.querySelector(".swiper-container-banner");
  const categoryButtons = document.querySelectorAll('.category-btn');
  const priceCategories = document.querySelectorAll('.price-category');
  const bannerHeight = bannerWrapper.offsetHeight;
  swiperContainer.style.top = `${bannerHeight}px`;
  const menuIcon = document.querySelector('.menu-icon');
  const menuContainer = document.querySelector('.menu-container');
  const dynamicContent = document.querySelector(".menu-column.dynamic-content");
  const moreCategoriesBtn = document.querySelector('.more-categories-btn');
  const additionalCategories = document.querySelector('.additional-categories');

  const menuData = {
    "alcohol-treatment": {
      title: "Лечение алкоголизма",
      items: ["Кодирование от алкоголизма", "Психологическая помощь", "Реабилитация"],
    },
    "detox": {
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
      setTimeout(() => dynamicContent.style.opacity = 1, 50);
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
        if (arrow) arrow.classList.toggle("active", menuItem.classList.contains("active"));
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
    const header = document.querySelector('.header');

    menuIcon.addEventListener('click', () => {
      menuIcon.classList.toggle('active');
      menuContainer.classList.toggle('active');

      if (menuContainer.classList.contains('active')) {
        header.style.borderBottomLeftRadius = '0px';
        header.style.borderBottomRightRadius = '0px';
      } else {
        header.style.borderBottomLeftRadius = '';
        header.style.borderBottomRightRadius = '';

        if (dynamicContent.parentNode) {
          dynamicContent.remove();
        }
      }
    });

    document.addEventListener('click', (event) => {
      if (
        menuContainer.classList.contains('active') &&
        !menuContainer.contains(event.target) &&
        !menuIcon.contains(event.target)
      ) {
        menuIcon.classList.remove('active');
        menuContainer.classList.remove('active');
        header.style.borderBottomLeftRadius = '';
        header.style.borderBottomRightRadius = '';

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
      controls: []
    });

    var myPlacemark = new ymaps.Placemark([54.1377, 37.5903], {}, {
      iconColor: '#6c5ce7'
    });
    myMap.geoObjects.add(myPlacemark);
  }



    categoryButtons.forEach((btn, index) => {
    btn.addEventListener('click', () => {
      // Убираем активный класс у всех категорий
      categoryButtons.forEach(b => b.classList.remove('active'));
      priceCategories.forEach(c => c.classList.remove('active'));

      // Добавляем активный класс к текущей категории
      btn.classList.add('active');
      priceCategories[index].classList.add('active');
    });
  });

// Обработчик кнопок "Подробнее"
const detailsBtns = document.querySelectorAll('.details-btn');
detailsBtns.forEach(btn => {
  btn.addEventListener('click', (event) => {
    event.preventDefault(); // Предотвращаем стандартное поведение ссылки

    const priceItem = btn.closest('.price-item'); // Находим ближайший родительский элемент .price-item
    const details = priceItem.querySelector('.details'); // Находим блок с подробной информацией внутри этого элемента

    if (details) {
      details.classList.toggle('show'); // Показываем/скрываем детали
    }
  });
});

moreCategoriesBtn.addEventListener('click', (event) => {
  event.stopPropagation(); // Предотвращаем закрытие при клике на кнопку
  additionalCategories.style.display = additionalCategories.style.display === 'block' ? 'none' : 'block';
});

// Закрыть выпадающий список при клике вне его
document.addEventListener('click', (event) => {
  if (!moreCategoriesBtn.contains(event.target) && !additionalCategories.contains(event.target)) {
    additionalCategories.style.display = 'none';
  }
});


  // Инициализация
  initMenuHandlers();
  initAllSwipers();
  initMenuIconHandler();
});