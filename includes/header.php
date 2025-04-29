<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Наркологическая клиника «Призма»</title>
  <link rel="stylesheet" href="assets/css/main.css" type="text/css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>


  <script defer src="/assets/js/script.js"></script>
  <script defer src="/assets/js/swiper-init.js"></script>


  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
    rel="stylesheet">
</head>

<body>
  <section class="header-section">
    <div class="container">
      <header class="header">
        <a href="/" class="logo">
          <div class="logo-icon">
            <img src="assets/images/photos/ico.png" alt="Логотип клиники 'Призма'">
          </div>
          <div>
            <div class="logo-text">Призма</div>
            <div class="logo-subtext">Наркология</div>
          </div>
        </a>

        <div class="center-info">
          <div class="address">
            <p>Адрес call-центра:</p>
            <img src="assets/images/icons/locPin.png" alt="Местоположение">
            <span>г. Тула, ул. Ленина, д.2</span>
          </div>
        </div>
        <div class="center-info">
          <div class="phone">
            <p>Круглосуточный номер</p>
            <img src="assets/images/icons/phone.png" alt="Телефон">
            <a href="tel:8 (888) 999-99-99">8 (888) 999-99-99</a>
          </div>
        </div>

        <div class="actions">
          <button class="btn_consultation btn-secondary ask-doctor" data-modal=".modal-consultation">Задать вопрос врачу</button>
          <button class="btn btn-primary call-doctor" data-modal=".modal">Вызвать врача</button>
          <a>
            <img class="socials__item" src="/assets/images/icons/tg-ico.png" alt="tg">

          </a>
          <a class="phone-icon" href="tel:8 (888) 999-99-99" aria-label="Позвонить">
            <img src="/assets/images/icons/phone-icon.png" alt="Телефон">
          </a>
          <div class="menu-icon" id="menuIcon"><span></span></div>
        </div>

        <div class="fullscreen-search-menu" id="searchMenu">
          <div class="search-header">
            <input type="text" id="searchInput" placeholder="Введите запрос..." />
            <button class="btn-clear" id="clearSearch">Очистить</button>
          </div>
          <div class="search-results" id="searchResults">
          </div>
          <div class="close-icon" id="closeSearch">
            Закрыть
          </div>
        </div>
      </header>
    </div>



    <div class="container">
      <div class="menu-container" id="menuContainer">
        <div class="menu__columns-left">
          <div class="menu__column-select">
            <!-- Левая колонка -->
            <div class="column-select__left-side">
              <ul class="column-select__items">
                <li class="column-select__item active">О клинике</li>
                <li class="column-select__item">Вывод из запоя</li>
                <li class="column-select__item">Лечение алкоголизма</li>
                <li class="column-select__item">Кодирование</li>
                <li class="column-select__item">Нарколог на дом</li>
                <li class="column-select__item">
                  <a href="/others">Другие услуги</a>
                </li>
                <li class="column-select__item">
                  <a href="/others">Цены</a>
                </li>
                <li class="column-select__item">
                  <a href="/others">Контакты</a>
                </li>
                <li class="column-select__item">
                  <a href="/others">Карта сайта</a>
                </li>
              </ul>

              <!-- Футер левой колонки -->
              <div class="left-side__footer">
                <div class="footer__item">
                  <p class="footer-item__title">Режим работы:</p>
                  <p class="footer-item__desc">Круглосуточно, без выходных</p>
                </div>
                <div class="footer__item">
                  <p class="footer-item__title">Медицинская лицензия:</p>
                  <p class="footer-item__desc">№ЛО-77-01-018683</p>
                </div>
              </div>
            </div>

            <div class="mobile-side__footer">
              <button class="btn btn-primary call-doctor">Срочный вызов врача</button>
              <a href="/search-page" class="mock-search-input">
                <input type="text" placeholder="Поиск..." readonly>
                <span class="search-icon">
                  <img src="/assets/images/icons/search.png" alt="Поиск">
                </span>
              </a>
              <div class=""></div>
            </div>

            <!-- Правая колонка -->
            <div class="column-select__right-side">
              <div class="right-side-select__item active">
                <div class="right-side__title">О клинике</div>
                <ul class="right-side-select-item__elements">
                  <li class="right-side-select-item__element">
                    <a href="#">О клинике1</a>
                  </li>
                  <li class="right-side-select-item__element">
                    <a href="#">О клинике1</a>
                  </li>
                  <li class="right-side-select-item__element">
                    <a href="#">О клинике1</a>
                  </li>
                  <li class="right-side-select-item__element">
                    <a href="#">О клинике1</a>
                  </li>
                  <li class="right-side-select-item__element">
                    <a href="#">О клинике1</a>
                  </li>
                  <li class="right-side-select-item__element">
                    <a href="#">О клинике1</a>
                  </li>
                  <li class="right-side-select-item__element">
                    <a href="#">О клинике1</a>
                  </li>
                  <li class="right-side-select-item__element">
                    <a href="#">О клинике1</a>
                  </li>
                  <li class="right-side-select-item__element">
                    <a href="#">О клинике1</a>
                  </li>
                  <li class="right-side-select-item__element">
                    <a href="#">О клинике1</a>
                  </li>
                  <li class="right-side-select-item__element">
                    <a href="#">О клинике1</a>
                  </li>
                  <li class="right-side-select-item__element">
                    <a href="#">О клинике1</a>
                  </li>
                </ul>
              </div>
              <div class="right-side-select__item">
                <div class="right-side__title">Вывод из запоя</div>
                <ul class="right-side-select-item__elements">
                  <li class="right-side-select-item__element">
                    <a href="#">О клинике1</a>
                  </li>
                  <li class="right-side-select-item__element">
                    <a href="#">О клинике1</a>
                  </li>
                  <li class="right-side-select-item__element">
                    <a href="#">О клинике1</a>
                  </li>
                </ul>
              </div>
              <div class="right-side-select__item">
                <div class="right-side__title">Лечение алкоголизма</div>
                <ul class="right-side-select-item__elements">
                  <li class="right-side-select-item__element">
                    <a href="#">О клинике</a>
                  </li>
                  <li class="right-side-select-item__element">
                    <a href="#">О клинике2</a>
                  </li>
                </ul>
              </div>
              <div class="right-side-select__item">
                <div class="right-side__title">Кодирование</div>
                <ul class="right-side-select-item__elements">
                  <li class="right-side-select-item__element">
                    <a href="#">О клинике</a>
                  </li>
                  <li class="right-side-select-item__element">
                    <a href="#">О клинике3</a>
                  </li>
                </ul>
              </div>
              <div class="right-side-select__item">
                <div class="right-side__title">Нарколог на дом</div>
                <ul class="right-side-select-item__elements">
                  <li class="right-side-select-item__element">
                    <a href="#">О клинике</a>
                  </li>
                  <li class="right-side-select-item__element">
                    <a href="#">О клинике4</a>
                  </li>
                </ul>
              </div>

              <!-- Футер правой колонки -->
              <div class="right-side-select__footer">
                <div class="right-side-select__socials">
                  <p>Соц. сети:</p>
                  <div class="socials__items">
                    <a>
                      <img class="socials__item" src="/assets/images/icons/tg-ico.png" alt="tg">
                    </a>
                    <a>
                      <img class="socials__item" src="/assets/images/icons/vk.png" alt="vk">
                    </a>
                    <a>
                      <img class="socials__item" src="/assets/images/icons/odnoklassniki.png" alt="odnoklassniki">
                    </a>
                  </div>
                </div>
                <button class="button__eye">
                  <img src="/assets/images/icons/eye.png">
                  <p>Версия для слабовидящих</p>
                </button>
              </div>
            </div>
          </div>
          <!-- Блок акций -->
          <div class="menu-column promotions">
            <div class="promotion-item color">
              <div class="header-tag">Скидка</div>
              <p>Скидка на услугу «Кодирование методом Довженко»</p>
              <button class="btn btn-primary" data-modal=".modal">Заказать услугу</button>
            </div>
            <div class="promotion-item">
              <div class="header-tag">Скидка</div>
              <p>Курс лечения алкоголизма на дому</p>
              <button class="btn btn-primary" data-modal=".modal">Заказать услугу</button>
            </div>
            <div class="promotion-item">
              <div class="header-tag">Скидка</div>
              <p>Курс лечения алкоголизма на дому</p>
              <button class="btn btn-primary promotion" data-modal=".modal">Заказать услугу</button>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>
  <main>