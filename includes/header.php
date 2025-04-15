<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Наркологическая клиника «Призма»</title>
  <link rel="stylesheet" href="assets/css/main.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="https://api-maps.yandex.ru/2.1/?apikey=ВАШ_API_КЛЮЧ&lang=ru_RU" type="text/javascript"></script>
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
  <section class="header-section container">
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
        <div class="search-icon">
          <img src="/assets/images/icons/search.png" alt="Поиск" />
        </div>
        <button class="btn btn-secondary ask-doctor">Задать вопрос врачу</button>
        <button class="btn btn-primary call-doctor">Вызвать врача</button>
        <a class="telegram-icon" href="tg://resolve?domain=mednarkolog_clinic" aria-label="Telegram">
          <img src="/assets/images/icons/telegram.png" alt="Telegram">
        </a>
        <a class="phone-icon" href="tel:8 (888) 999-99-99" aria-label="Позвонить">
          <img src="/assets/images/icons/phone-icon.png" alt="Телефон">
        </a>
        <div class="menu-icon" id="menuIcon"><span></span></div>
      </div>
    </header>

    <div class="container">
      <div class="menu-container" id="menuContainer">
        <div class="menu-columns">
          <div class="menu-column main-menu">
            <ul>
              <li class="menu-item" data-target="alcohol-treatment">
                <a href="#">Лечение алкоголизма</a>
                <img class="arrow" src="assets/images/icons/arrow.png" alt="Стрелка" />
              </li>
              <li class="menu-item" data-target="detox">
                <a href="#">Вывод из запоя</a>
                <img class="arrow" src="assets/images/icons/arrow.png" alt="Стрелка" />
              </li>
              <li class="menu-item" data-target="about-clinic">
                <a href="#">О клинике</a>
                <img class="arrow" src="assets/images/icons/arrow.png" alt="Стрелка" />
              </li>
              <li><a href="#">Цены</a></li>
              <li><a href="#">Контакты</a></li>
              <li><a href="#">Карта сайта</a></li>
            </ul>
            <div class="footer-info">
              <p><b>Режим работы:</b> Пн-Пт 9:00 - 18:00</p>
              <p><b>Медицинская лицензия:</b> №XXXXXX</p>
            </div>
          </div>
          <div class="dynamic-content">
            <div class="menu-column" id="dynamicContent">
              <div class="dynamic-content-wrapper">
                <div id="dynamicTitle">Выберите раздел</div>
                <ul id="dynamicList"></ul>
              </div>
            </div>
            <div class="footer-dynamic-block">
              <div class="mobile-part">
                <button class="btn btn-secondary mobile">Срочный вызов врача</button>
                <div class="search-container">
                  <input class="search-mobile" type="search" placeholder="Поиск">
                  <img src="/assets/images/icons/search.png" alt="Поиск" class="search-icon-mobile">
                </div>
                <div class="mobile-item">
                  <p class="title-mobile-item"><b>Телефоны:</b></p>
                  <div class="numbers">
                    <a href="tel:8 (888) 999-99-99">8 (888) 999-99-99</a>
                    <a href="tel:8 (888) 999-99-99">8 (888) 999-99-99</a>
                  </div>
                </div>
                <div class="mobile-item">
                  <p class="title-mobile-item"><b>Адрес:</b></p>
                  <p>г. Тула, ул. Ленина, д.2</p>
                </div>
              </div>

              <div class="socials-dynimic">
                <p><b>Соц. сети:</b></p>
                <div class="socials-dynimic-icons">
                  <a href="#" aria-label="WhatsApp">
                    <img src="/assets/images/icons/whats.png" alt="WhatsApp">
                  </a>
                  <a href="#" aria-label="Telegram">
                    <img src="/assets/images/icons/tgicon.png" alt="Telegram">
                  </a>
                  <a href="#" aria-label="ВКонтакте">
                    <img src="/assets/images/icons/vk.png" alt="ВКонтакте">
                  </a>
                  <a href="#" aria-label="Одноклассники">
                    <img src="/assets/images/icons/odnoklassniki.png" alt="Одноклассники">
                  </a>
                </div>
                <button class="eye-dynimic">
                  <img src="/assets/images/icons/eye.png" alt="Версия для слабовидящих">
                  <span>Версия для слабовидящих</span>
                </button>
              </div>
            </div>
          </div>



          <div class="menu-column promotions">
            <div class="promotion-item color">
              <div class="header-tag">Скидка</div>
              <p>Скидка на услугу «Кодирование методом Довженко»</p>
              <button class="btn btn-primary">Заказать услугу</button>
            </div>
            <div class="promotion-item">
              <div class="header-tag">Скидка</div>
              <p>Курс лечения алкоголизма на дому</p>
              <button class="btn btn-primary">Заказать услугу</button>
            </div>
            <div class="promotion-item">
              <div class="header-tag">Скидка</div>
              <p>Курс лечения алкоголизма на дому</p>
              <button class="btn btn-primary promotion">Заказать услугу</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <main>