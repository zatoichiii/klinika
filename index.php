<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Наркологическая клиника «Призма»</title>
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script async src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script async src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script defer src="assets/js/script.js"></script>
  <script defer src="assets/js/swiper-init.js"></script>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>

<body>
  <section class="header-section container">
    <?php include 'includes/header.php'; ?>
  </section>

  <main>
    <!-- Баннер -->
    <section class="banner-section">
      <div class="container">
        <div class="banner-wrapper">
          <div class="content">
            <h1 class="content-title">Наркологическая клиника «Призма»</h1>
            <p class="content-description">Наши специализированные программы лечения алкоголизма предлагают комплексный подход, включающий медицинскую поддержку, психологическую терапию и индивидуальные.</p>
            <a href="#" class="button">Бесплатная консультация</a>
          </div>
          <div class="image-wrapper">
            <img src="assets/images/photos/corridor.png" alt="Коридор клиники" class="content-image">
          </div>
        </div>
        <div class="swiper-container-banner">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="slide-content">
                <div class="slide-title">24/7</div>
                <div class="slide-description">Медицинская поддержка и консультации</div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-content">
                <div class="slide-title">100%</div>
                <div class="slide-description">Гарантия эффективности лечения</div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-content">
                <div class="slide-title">92%</div>
                <div class="slide-description">Наших пациентов успешно проходят лечение</div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-content">
                <div class="slide-title">100%</div>
                <div class="slide-description">Гарантия эффективности лечения</div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination-banner"></div>
        </div>
      </div>
    </section>

    <!-- Блок с картой -->
    <section class="map-section">
      <div class="container">
        <div class="map-wrapper">
          <div class="left-section">
            <div class="title">Экстренная круглосуточная помощь:</div>
            <p class="phone-number">8 (888) 999-99-99</p>
            <p class="desc">Оставьте заявку по телефону или кликнув на кнопку ниже, наш менеджер перезвонит для уточнения информации и назначит бригаду.</p>
            <button class="call-button">Вызвать бригаду на дом</button>
          </div>

          <div class="right-section">
            <div class="map-section-new">
              <div id="map"></div>
              <div class="map-description">
                <span>Выезжаем по всей Тульской области</span>
                <img src="assets/images/icons/locPin.png" alt="Местоположение">
              </div>
            </div>
            <div class="info-blocks">
              <div class="info-block">
                <div class="info-text">
                  <img src="assets/images/icons/timePin.png" alt="Время">
                  <p class="time">30 минут</p>
                  <p class="description">время приезда</p>
                </div>
              </div>
              <div class="info-block">
                <div class="info-text">
                  <img src="assets/images/icons/carPin.png" alt="Скорая помощь">
                  <p class="brigade-count">15 бригад</p>
                  <p class="description">сейчас дежурит</p>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>

    <!-- Блок услуг -->
    <section class="services-section">
      <div class="container">
        <div class="services-wrapper">
          <div class="services-title">
            <h2>Наши услуги</h2>
          </div>
          <div class="services-list">
            <div class="service-item">
              <div class="service-icon">
                <img src="assets/images/icons/therapist.png" alt="Терапевт">
              </div>
              <div class="service-text">
                <h3>Терапевт</h3>
                <p>Лечение наркозависимости</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Блок цен -->
    <section class="prices-section">
      <div class="container">
        <div class="prices-wrapper">
          <div class="prices-title">
            <div>Прайс-лист клиники «Призма»</div>
          </div>

          <div class="categories">
            <button class="category-btn active">Вывод из запоя</button>
            <button class="category-btn">Нарколог на дом</button>
            <button class="category-btn">Кодирование от алкоголизма</button>
            <button class="category-btn">Лечение алкоголизма</button>
            <div class="more-categories-btn">
              <button class="show-more-button">
                <span>Еще категории</span>
                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.5 0.5L5 5.5L9.5 0.5" stroke="#000" stroke-width="2" />
                </svg>
              </button>
              <div class="additional-categories dropdown" style="display: none;">
                <button class="category-btn">Лечение наркомании</button>
                <button class="category-btn">Реабилитация</button>
                <button class="category-btn">Психологическая помощь</button>
                <button class="category-btn">Детоксикация</button>
              </div>
            </div>


            <!-- Выпадающий список -->

          </div>

          <div class="prices-list">
            <div class="price-category active">
              <div class="price-item">
                <div class="price-info">
                  <p>Вывод из запоя в стационаре</p>
                  <button class="details-btn">Подробнее
                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.5 0.5L4 4L7.5 0.5" stroke="#000" stroke-width="2"></path>
                    </svg>
                  </button>
                  <div class="price-item details">
                    <p>Пребывание: в 3-4 местном номере со всеми удобствами: душевая, санузел, телевизор, спутниковое ТВ, Wi-Fi.</p>
                    <p>Длительность: 2-3 недели, по рекомендации лечащего врача.</p>
                  </div>
                </div>
                <div class="price-value">
                  <span>8500 ₽</span>
                </div>
              </div>
              <div class="price-item">
                <div class="price-info">
                  <p>Медикаментозный вывод из запоя</p>
                  <button class="details-btn">Подробнее
                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.5 0.5L4 4L7.5 0.5" stroke="#000" stroke-width="2"></path>
                    </svg>
                  </button>
                  <div class="price-item details">
                    <p>Использование медикаментов для детоксикации организма.</p>
                  </div>
                </div>
                <div class="price-value">
                  <span>7000 ₽</span>
                </div>
              </div>
            </div>

            <div class="price-category">
              <div class="price-item">
                <div class="price-info">
                  <p>Выезд нарколога на дом</p>
                  <button class="details-btn">Подробнее
                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.5 0.5L4 4L7.5 0.5" stroke="#000" stroke-width="2"></path>
                    </svg>
                  </button>
                  <div class="price-item details">
                    <p>Нарколог приедет в течение часа после вызова.</p>
                  </div>
                </div>
                <div class="price-value">
                  <span>5000 ₽</span>
                </div>
              </div>
              <div class="price-item">
                <div class="price-info">
                  <p>Консультация нарколога на дому</p>
                  <button class="details-btn">Подробнее
                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.5 0.5L4 4L7.5 0.5" stroke="#000" stroke-width="2"></path>
                    </svg>
                  </button>
                  <div class="price-item details">
                    <p>Предоставление рекомендаций по лечению.</p>
                  </div>
                </div>
                <div class="price-value">
                  <span>3000 ₽</span>
                </div>
              </div>
            </div>

            <div class="price-category">
              <div class="price-item">
                <div class="price-info">
                  <p>Медикаментозное кодирование</p>
                  <button class="details-btn">Подробнее
                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.5 0.5L4 4L7.5 0.5" stroke="#000" stroke-width="2"></path>
                    </svg>
                  </button>
                  <div class="price-item details">
                    <p>Использование препаратов для подавления тяги к алкоголю.</p>
                  </div>
                </div>
                <div class="price-value">
                  <span>12000 ₽</span>
                </div>
              </div>
              <div class="price-item">
                <div class="price-info">
                  <p>Гипнотическое кодирование</p>
                  <button class="details-btn">Подробнее
                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.5 0.5L4 4L7.5 0.5" stroke="#000" stroke-width="2"></path>
                    </svg>
                  </button>
                  <div class="price-item details">
                    <p>Сеанс гипноза для формирования отвращения к алкоголю.</p>
                  </div>
                </div>
                <div class="price-value">
                  <span>15000 ₽</span>
                </div>
              </div>
            </div>

            <div class="price-category">
              <div class="price-item">
                <div class="price-info">
                  <p>Стационарное лечение</p>
                  <button class="details-btn">Подробнее
                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.5 0.5L4 4L7.5 0.5" stroke="#000" stroke-width="2"></path>
                    </svg>
                  </button>
                  <div class="price-item details">
                    <p>Полное погружение в процесс лечения под наблюдением врачей.</p>
                  </div>
                </div>
                <div class="price-value">
                  <span>25000 ₽</span>
                </div>
              </div>
              <div class="price-item">
                <div class="price-info">
                  <p>Стационарное лечение</p>
                  <button class="details-btn">Подробнее
                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.5 0.5L4 4L7.5 0.5" stroke="#000" stroke-width="2"></path>
                    </svg>
                  </button>
                  <div class="price-item details">
                    <p>Полное погружение в процесс лечения под наблюдением врачей.</p>
                  </div>
                </div>
                <div class="price-value">
                  <span>25000 ₽</span>
                </div>
              </div>
              <div class="price-item">
                <div class="price-info">
                  <p>Стационарное лечение</p>
                  <button class="details-btn">Подробнее
                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.5 0.5L4 4L7.5 0.5" stroke="#000" stroke-width="2"></path>
                    </svg>
                  </button>
                  <div class="price-item details">
                    <p>Полное погружение в процесс лечения под наблюдением врачей.</p>
                  </div>
                </div>
                <div class="price-value">
                  <span>25000 ₽</span>
                </div>
              </div>
              <div class="price-item">
                <div class="price-info">
                  <p>Амбулаторное лечение</p>
                  <button class="details-btn">Подробнее
                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.5 0.5L4 4L7.5 0.5" stroke="#000" stroke-width="2"></path>
                    </svg>
                  </button>
                  <div class="price-item details">
                    <p>Посещение клиники несколько раз в неделю.</p>
                  </div>
                </div>
                <div class="price-value">
                  <span>18000 ₽</span>
                </div>
              </div>
            </div>
            <div class="price-category">
              <div class="price-item">
                <div class="price-info">
                  <p>Стационарное лечение наркомании</p>
                  <button class="details-btn">Подробнее
                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.5 0.5L4 4L7.5 0.5" stroke="#000" stroke-width="2"></path>
                    </svg>
                  </button>
                  <div class="price-item details">
                    <p>Полное погружение в процесс лечения под наблюдением врачей.</p>
                    <p>Программа включает медикаментозную терапию и психологическую поддержку.</p>
                  </div>
                </div>
                <div class="price-value">
                  <span>30000 ₽</span>
                </div>
              </div>
              <div class="price-item">
                <div class="price-info">
                  <p>Амбулаторное лечение наркомании</p>
                  <button class="details-btn">Подробнее
                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.5 0.5L4 4L7.5 0.5" stroke="#000" stroke-width="2"></path>
                    </svg>
                  </button>
                  <div class="price-item details">
                    <p>Посещение клиники несколько раз в неделю.</p>
                    <p>Включает консультации врача и поддерживающую терапию.</p>
                  </div>
                </div>
                <div class="price-value">
                  <span>20000 ₽</span>
                </div>
              </div>
              <div class="price-item">
                <div class="price-info">
                  <p>Кодирование от наркотиков</p>
                  <button class="details-btn">Подробнее
                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.5 0.5L4 4L7.5 0.5" stroke="#000" stroke-width="2"></path>
                    </svg>
                  </button>
                  <div class="price-item details">
                    <p>Использование препаратов для подавления тяги к наркотикам.</p>
                  </div>
                </div>
                <div class="price-value">
                  <span>15000 ₽</span>
                </div>
              </div>
              <div class="price-item">
                <div class="price-info">
                  <p>Реабилитация после наркомании</p>
                  <button class="details-btn">Подробнее
                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.5 0.5L4 4L7.5 0.5" stroke="#000" stroke-width="2"></path>
                    </svg>
                  </button>
                  <div class="price-item details">
                    <p>Программа реабилитации длительностью до 6 месяцев.</p>
                    <p>Включает групповые занятия, индивидуальные консультации и медикаментозную поддержку.</p>
                  </div>
                </div>
                <div class="price-value">
                  <span>50000 ₽</span>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- Блок акций -->
    <section class="stock-section">
      <div class="container">
        <div class="prices-title">Акции клиники</div>
        <div class="swiper-container-stock">
          <div class="swiper-wrapper">
            <!-- Слайд 1 -->
            <div class="swiper-slide">
              <div class="slide-content">
                <div class="slide-discount">Скидка</div>
                <div class="slide-title">Консультация специалиста</div>
                <ul class="slide-list">
                  <li>Бесплатная диагностика</li>
                  <li>Индивидуальный подход</li>
                  <li>Гарантия результата</li>
                </ul>
                <button class="btn btn-primary promotion">Заказать услугу</button>
              </div>
            </div>
            <!-- Слайд 2 -->
            <div class="swiper-slide">
              <div class="slide-content">
                <div class="slide-discount">Скидка</div>
                <div class="slide-title">Лечение зубов</div>
                <ul class="slide-list">
                  <li>Профессиональная чистка</li>
                  <li>Установка пломб</li>
                  <li>Современное оборудование</li>
                </ul>
                <button class="btn btn-primary promotion">Заказать услугу</button>
              </div>
            </div>
            <!-- Слайд 3 -->
            <div class="swiper-slide">
              <div class="slide-content">
                <div class="slide-discount">Скидка</div>
                <div class="slide-title">Имплантация зубов</div>
                <ul class="slide-list">
                  <li>Все виды имплантов</li>
                  <li>Гарантия 5 лет</li>
                  <li>Безопасность процедуры</li>
                </ul>
                <button class="btn btn-primary promotion">Заказать услугу</button>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-content">
                <div class="slide-discount">Скидка</div>
                <div class="slide-title">Имплантация зубов</div>
                <ul class="slide-list">
                  <li>Все виды имплантов</li>
                  <li>Гарантия 5 лет</li>
                  <li>Безопасность процедуры</li>
                </ul>
                <button class="btn btn-primary promotion">Заказать услугу</button>
              </div>
            </div>
          </div>
          <div class="swiper-pagination-stock"></div>
        </div>
      </div>
    </section>


    <!-- Этапы лечения -->
    <section class="stages-section">
      <div class="container">
        <div class="slider-container">
          <div class="slider-sidebar">
            <div class="prices-title">Этапы <br> лечения</div>
            <div class="buttons">
              <button id="prev-slide"><img class="button-left" src="./assets/images/icons/arrow-right.png"></button>
              <button id="next-slide"><img class="button-right" src="./assets/images/icons/arrow-right.png"></button>
            </div>
          </div>
          <div class="slider-main">
            <div class="slider-item">
              <div class="slider-content">
                <div class="slider-title accordion-header">
                  <div class="upper-text">
                    <div class="slider-number">01</div>
                    <div class="slider-words">Первичная консультация</div>
                  </div>
                  <button class="accordion-toggle-btn">+</button>
                </div>
                <div class="slider-content accordion-content">
                  <div class="slider-desc">
                    Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких.
                  </div>
                </div>
              </div>
            </div>
            <div class="slider-item">
              <div class="slider-content">
                <div class="slider-title accordion-header">
                  <div class="upper-text">
                    <div class="slider-number">02</div>
                    <div class="slider-words">Диагностика и составление плана лечения</div>
                  </div>
                  <button class="accordion-toggle-btn">+</button>
                </div>
                <div class="slider-content accordion-content">
                  <div class="slider-desc">
                    Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких.
                  </div>
                </div>
              </div>
            </div>
            <div class="slider-item">
              <div class="slider-content">
                <div class="slider-title accordion-header">
                  <div class="upper-text">
                    <div class="slider-number">03</div>
                    <div class="slider-words">Детоксикация организма</div>
                  </div>
                  <button class="accordion-toggle-btn">+</button>
                </div>
                <div class="slider-content accordion-content">
                  <div class="slider-desc">
                    Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких.
                  </div>
                </div>
              </div>
            </div>
            <div class="slider-item">
              <div class="slider-content">
                <div class="slider-title accordion-header">
                  <div class="upper-text">
                    <div class="slider-number">04</div>
                    <div class="slider-words">Первичная консультация</div>
                  </div>
                  <button class="accordion-toggle-btn">+</button>
                </div>
                <div class="slider-content accordion-content">
                  <div class="slider-desc">
                    Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Методы лечения -->
    <section class="methonds-section">
      <div class="container">
        <div class="upper-container">
          <div class="prices-title">Методы лечения</div>
          <button class="order-button">Заказать услугу</button>
        </div>
        <div class="methods-slider">
          <div class="method-item">
            <div class="upper-block">
              <img src="/assets/images/icons/first.png">   
              <h3>Медикаментозная терапия</h3>
            </div>
            <p>Наши врачи помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких.</p>
          </div>
          <div class="method-item">
            <div class="upper-block">
            <img src="/assets/images/icons/second.png">   
            <h3>Психотерапия</h3>
            </div>
            <p>Наши врачи помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких.</p>
          </div>
          <div class="method-item">
            <div class="upper-block">
            <img src="/assets/images/icons/third.png">   

              <h3>Реабилитационные программы</h3>
            </div>
            <p>Наши врачи помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких.</p>
          </div>
          <div class="method-item">
            <div class="upper-block">
            <img src="/assets/images/icons/fourth.png">   
              <h3>Групповая терапия</h3>
            </div>
            <p>Наши врачи помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких.</p>
          </div>
          <div class="method-item">
            <div class="upper-block">
            <img src="/assets/images/icons/six.png">   

              <h3>Работа с семьей</h3>
            </div>
            <p>Наши врачи помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких.</p>
          </div>
          <div class="method-item">
            <div class="upper-block">
            <img src="/assets/images/icons/fivith.png">   
              <h3>Профилактика срывов</h3>
            </div>
            <p>Наши врачи помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни клиентов, их родственников, родных и близких.</p>
          </div>
        </div>
      </div>

    </section>

    <!-- Приемущества -->
    <section class="advantages-section">
      <div class="container">
        <div class="slider-container">
          <div class="slider-sidebar">
            <div class="prices-title">Наши <br> преимущества</div>
            <div class="buttons">
              <button id="prev-slide-adv"><img class="button-left" src="./assets/images/icons/arrow-right.png"></button>
              <button id="next-slide-adv"><img class="button-right" src="./assets/images/icons/arrow-right.png"></button>
            </div>
          </div>
          <div class="slider-main">
            <!-- Карточка 1 -->
            <div class="slider-item">
              <div class="slider-content">
                <div class="card-image" style="background-image: url('./assets/images/photos/advantages.png');"></div>
                <div class="card-text">
                  <div class="slider-title">
                    <div class="slider-words">Индивидуальный подход</div>
                  </div>
                  <div class="slider-desc">Мы разрабатываем уникальные программы лечения для каждого пациента.</div>
                </div>
              </div>
            </div>
            <!-- Карточка 2 -->
            <div class="slider-item">
              <div class="slider-content">
                <div class="card-image" style="background-image: url('./assets/images/photos/advantages.png');"></div>
                <div class="card-text">
                  <div class="slider-title">
                    <div class="slider-words">Команда профессионалов</div>
                  </div>
                  <div class="slider-desc">Опытные врачи и психологи с многолетним стажем работы.</div>
                </div>
              </div>
            </div>
            <!-- Карточка 3 -->
            <div class="slider-item">
              <div class="slider-content">
                <div class="card-image" style="background-image: url('./assets/images/photos/advantages.png');"></div>
                <div class="card-text">
                  <div class="slider-title">
                    <div class="slider-words">Современное оборудование</div>
                  </div>
                  <div class="slider-desc">Используем передовые технологии для диагностики и лечения.</div>
                </div>
              </div>
            </div>
            <!-- Карточка 4 -->
            <div class="slider-item">
              <div class="slider-content">
                <div class="card-image" style="background-image: url('./assets/images/photos/advantages.png');"></div>
                <div class="card-text">
                  <div class="slider-title">
                    <div class="slider-words">Поддержка 24/7</div>
                  </div>
                  <div class="slider-desc">Наши специалисты всегда готовы помочь в любое время суток.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


  </main>
  <script src="https://api-maps.yandex.ru/2.1/?apikey=YOUR_API_KEY&lang=ru_RU" type="text/javascript"></script>

</body>

</html>