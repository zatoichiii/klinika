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

  <script defer src="assets/js/script.js"></script>
  <script defer src="assets/js/swiper-init.js"></script>

  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
    rel="stylesheet">
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
            <p class="content-description">Наши специализированные программы лечения алкоголизма предлагают комплексный
              подход, включающий медицинскую поддержку, психологическую терапию и индивидуальные планы реабилитации.</p>
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
                <div class="slide-title number" data-target="100" data-symbol="%">100%</div>
                <div class="slide-description">Гарантия эффективности лечения</div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-content">
                <div class="slide-title number" data-target="92" data-symbol="%">92%</div>
                <div class="slide-description">Наших пациентов успешно проходят лечение</div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-content">
                <div class="slide-title number" data-target="100" data-symbol="%">100%</div>
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
            <p class="desc">Оставьте заявку по телефону или кликнув на кнопку ниже, наш менеджер перезвонит для
              уточнения информации и назначит бригаду.</p>
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
          <div class="block-title">Наши услуги</div>

          <div class="swiper-container-services swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide placeholder"></div>

              <div class="swiper-slide">
                <div class="slide-content">
                  <div class="slide-title">
                    <img src="assets/images/icons/first.png" alt="Иконка">
                    Вывод из запоя
                  </div>
                  <ul>
                    <li>Вывод из запоя</li>
                    <li>Нарколог на дом</li>
                    <li>Кодирование от алкоголизма</li>
                    <li>Лечение алкоголизма</li>
                  </ul>
                  <button>Подробнее</button>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slide-content">
                  <div class="slide-title">
                    <img src="assets/images/icons/first.png" alt="Иконка">
                    Вывод из запоя
                  </div>
                  <ul>
                    <li>Вывод из запоя</li>
                    <li>Нарколог на дом</li>
                    <li>Кодирование от алкоголизма</li>
                    <li>Лечение алкоголизма</li>
                  </ul>
                  <button>Подробнее</button>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slide-content">
                  <div class="slide-title">
                    <img src="assets/images/icons/first.png" alt="Иконка">
                    Вывод из запоя
                  </div>
                  <ul>
                    <li>Вывод из запоя</li>
                    <li>Нарколог на дом</li>
                    <li>Кодирование от алкоголизма</li>
                    <li>Лечение алкоголизма</li>
                  </ul>
                  <button>Подробнее</button>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slide-content">
                  <div class="slide-title">
                    <img src="assets/images/icons/first.png" alt="Иконка">
                    Вывод из запоя
                  </div>
                  <ul>
                    <li>Вывод из запоя</li>
                    <li>Нарколог на дом</li>
                    <li>Кодирование от алкоголизма</li>
                    <li>Лечение алкоголизма</li>
                  </ul>
                  <button>Подробнее</button>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slide-content">
                  <div class="slide-title">
                    <img src="assets/images/icons/first.png" alt="Иконка">
                    Вывод из запоя
                  </div>
                  <ul>
                    <li>Вывод из запоя</li>
                    <li>Нарколог на дом</li>
                    <li>Кодирование от алкоголизма</li>
                    <li>Лечение алкоголизма</li>
                  </ul>
                  <button>Подробнее</button>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slide-content" style="display: flex;
              flex-direction: column;
              height: 100%;
              justify-content: space-between;
              ">
                  <div class="slide-title">
                    Другие услуги клиники
                  </div>
                  <a class="img-button">
                    <img src="assets/images/icons/arrow-right-red.png" alt="Иконка">
                  </a>
                </div>
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
          <div class="block-title">
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
                    <p>Пребывание: в 3-4 местном номере со всеми удобствами: душевая, санузел, телевизор, спутниковое
                      ТВ, Wi-Fi.</p>
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
        <div class="block-title">Акции клиники</div>
        <div class="swiper-container-stock swiper">
          <div class="swiper-wrapper">
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
    <section class="stage-section">
      <div class="container">
        <div class="stage-wrapper">
          <div class="left-side">
            <div class="block-title">Этапы лечения</div>
            <div class="swiper-main-buttons">
              <button class="prev-button-stages"><img class="button-left"
                  src="./assets/images/icons/arrow-right.png"></button>
              <button class="next-button-stages"><img class="button-right"
                  src="./assets/images/icons/arrow-right.png"></button>
            </div>
          </div>
          <div class="right-side stages">
            <div class="swiper stages-swiper">
              <div class="swiper-wrapper stages">
                <div class="swiper-slide">
                  <div class="slider-content">
                    <div class="slider-title accordion-header">
                      <div class="upper-text">
                        <div class="slider-number">01</div>
                        <div class="slider-words">Первичная консультация</div>
                      </div>
                      <div class="accordion-ico"><img src="/assets/images/icons/accrodion.png"></div>
                    </div>
                    <div class="slider-desc accordion">
                      <div class="slider-desc">
                        Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни
                        клиентов, их родственников, родных и близких.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slider-content">
                    <div class="slider-title accordion-header">
                      <div class="upper-text">
                        <div class="slider-number">02</div>
                        <div class="slider-words">Диагностика и составление плана лечения</div>
                      </div>
                      <div class="accordion-ico"><img src="/assets/images/icons/accrodion.png"></div>
                    </div>
                    <div class="slider-desc accordion">
                      <div class="slider-desc">
                        Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни
                        клиентов, их родственников, родных и близких.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slider-content">
                    <div class="slider-title accordion-header">
                      <div class="upper-text">
                        <div class="slider-number">03</div>
                        <div class="slider-words">Детоксикация организма</div>
                      </div>
                      <div class="accordion-ico"><img src="/assets/images/icons/accrodion.png"></div>
                    </div>
                    <div class="slider-desc accordion">
                      <div class="slider-desc">
                        Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни
                        клиентов, их родственников, родных и близких </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slider-content">
                    <div class="slider-title accordion-header">
                      <div class="upper-text">
                        <div class="slider-number">04</div>
                        <div class="slider-words">Первичная консультация</div>
                      </div>
                      <div class="accordion-ico"><img src="/assets/images/icons/accrodion.png"></div>
                    </div>
                    <div class="slider-desc accordion">
                      <div class="slider-desc">
                        Наши доктора помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни
                        клиентов, их родственников, родных и близких.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>


    <!-- Методы -->
    <section class="method-section">
      <div class="container">
        <div class="method-wrapper">
          <div class="method-upper-text">
            <div class="block-title">Методы лечения</div>
            <button class="order-btn">Заказать услугу</button>
          </div>
          <div class="swiper methods-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide method-item">
                <div class="upper-block">
                  <img src="/assets/images/icons/first.png" alt="Метод">
                  <div>Медикаментозная терапия</div>
                </div>
                <p>Наши врачи помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни
                  клиентов, их родственников, родных и близких.</p>
              </div>
              <div class="swiper-slide method-item">
                <div class="upper-block">
                  <img src="/assets/images/icons/first.png" alt="Метод">
                  <div>Медикаментозная терапия</div>
                </div>
                <p>Наши врачи помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни
                  клиентов, их родственников, родных и близких.</p>
              </div>
              <div class="swiper-slide method-item">
                <div class="upper-block">
                  <img src="/assets/images/icons/first.png" alt="Метод">
                  <div>Медикаментозная терапия</div>
                </div>
                <p>Наши врачи помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни
                  клиентов, их родственников, родных и близких.</p>
              </div>
              <div class="swiper-slide method-item">
                <div class="upper-block">
                  <img src="/assets/images/icons/first.png" alt="Метод">
                  <div>Медикаментозная терапия</div>
                </div>
                <p>Наши врачи помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни
                  клиентов, их родственников, родных и близких.</p>
              </div>
              <div class="swiper-slide method-item">
                <div class="upper-block">
                  <img src="/assets/images/icons/first.png" alt="Метод">
                  <div>Медикаментозная терапия</div>
                </div>
                <p>Наши врачи помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни
                  клиентов, их родственников, родных и близких.</p>
              </div>
              <div class="swiper-slide method-item">
                <div class="upper-block">
                  <img src="/assets/images/icons/first.png" alt="Метод">
                  <div>Медикаментозная терапия</div>
                </div>
                <p>Наши врачи помогают избавиться пациентам от хронических зависимостей. Повышаем качество жизни
                  клиентов, их родственников, родных и близких.</p>
              </div>
            </div>
          </div>
          <div class="swiper-pagination" style="position: relative"></div>
        </div>

      </div>
    </section>


    <!-- Преимущества -->
    <section class="advantages-section">
      <div class="container">
        <div class="advantages-wrapper">
          <div class="left-side">
            <div class="block-title">Наши преимущества</div>
            <div class="swiper-main-buttons">
              <button class="prev-button-advantages"><img class="button-left"
                  src="./assets/images/icons/arrow-right.png"></button>
              <button class="next-button-advantages"><img class="button-right"
                  src="./assets/images/icons/arrow-right.png"></button>
            </div>
          </div>
          <div class="right-side advantages">
            <div class="swiper advantages-swiper">
              <div class="swiper-wrapper advantages">
                <div class="swiper-slide">
                  <div class="slider-content">
                    <div class="slider-absolute">
                      <div class="slider-title">
                        <div class="upper-text">
                          <div class="slider-words">Индивидуальный подход</div>
                        </div>
                      </div>
                      <div class="slider-desc">
                        Мы учитываем особенности каждого пациента и разрабатываем персонализированные программы лечения.
                      </div>
                    </div>

                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slider-content">
                    <div class="slider-title">
                      <div class="upper-text">
                        <div class="slider-words">Опытные специалисты</div>
                      </div>
                    </div>
                    <div class="slider-desc">
                      В нашей команде работают высококвалифицированные врачи с многолетним опытом в области лечения
                      зависимостей.
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slider-content">
                    <div class="slider-title">
                      <div class="upper-text">
                        <div class="slider-words">Комфортные условия</div>
                      </div>
                    </div>
                    <div class="slider-desc">
                      Наши центры оснащены всем необходимым для комфортного пребывания пациентов.
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slider-content">
                    <div class="slider-title">
                      <div class="upper-text">
                        <div class="slider-words">Поддержка после лечения</div>
                      </div>
                    </div>
                    <div class="slider-desc">
                      Мы предоставляем комплексную поддержку пациентам после завершения программы лечения.
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination advantages" style="position: relative"></div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- О клинике -->
    <section class="about-section">
      <div class="container">
        <div class="about-wrapper">

          <div class="main-content">
            <div class="left-column">
              <div class="block-title">О клинике <b>«Призма»</b></div>
              <div class="clinic-description">
                <p>
                  Клиника «Призма» была основана командой опытных врачей-наркологов, психологов и реабилитологов,
                  объединенных одной целью — помочь людям обрести свободу от зависимостей и вернуть радость полноценной
                  жизни. Мы начали с небольшого центра, но благодаря высокому уровню профессионализма, современным
                  методикам лечения и заботе о пациентах, мы смогли достичь значительных результатов.
                </p>
              </div>
              <button class="more-button">Подробнее о клинике</button>
            </div>

            <div class="right-column">
              <div class="video-text-block">
                <div class="video-container">
                  <video id="promo-video" poster="assets/images/photos/test.jfif" preload="none">
                    <source src="/assets/images/photos/test.mp4" type="video/mp4">
                    Ваш браузер не поддерживает воспроизведение видео.
                  </video>
                  <button class="play-button">
                    <img src="/assets/images/icons/play.png">
                  </button>
                </div>
                <p class="description">Промо-ролик клиники «Призма»</p>
              </div>
            </div>
          </div>
          <div class="info-blocks">
            <div class="info-item">
              <span class="number" data-target="10">0</span>
              <p class="text">Лет успешной работы</p>
            </div>
            <div class="info-item">
              <span class="number" data-target="20">0</span>
              <p class="text">Опытных специалистов</p>
            </div>
            <div class="info-item">
              <span class="number" data-target="50">0</span>
              <p class="text">Методик лечения</p>
            </div>
            <div class="info-item">
              <span class="number" data-target="250">0</span>
              <p class="text">Здоровых пациентов</p>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- Врачи -->
    <section class="doctors-section">
      <div class="container">
        <div class="doctors-wrapper">
          <div class="upper-block">
            <div class="block-title">Наши врачи</div>
            <div class="swiper-main-buttons-doctors">
              <button class="prev-button-doctors">
                <img src="./assets/images/icons/arrow-right.png" alt="Предыдущий">
              </button>
              <button class="next-button-doctors">
                <img src="./assets/images/icons/arrow-right.png" alt="Следующий">
              </button>
            </div>
          </div>
          <div class="swiper-container-doctors">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="doctor-card">
                  <div class="placeholders">
                    <div class="placeholder-item">
                      <img src="/assets/images/icons/main-ico.png" alt="Главный врач">
                      Главный врач
                    </div>
                    <div class="placeholder-item">Стаж: 15 лет</div>
                  </div>
                  <div class="doctor-name">Иванов Иван Иванович</div>
                  <div class="doctor-description">Главный врач, заведующий отделением наркологии</div>
                  <div class="doctor-image">
                    <img src="/assets/images/photos/doctor.png" alt="Фото врача">
                  </div>
                  <button class="button">Задать вопрос врачу</button>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="doctor-card">
                  <div class="placeholders">
                    <div class="placeholder-item">Стаж: 15 лет</div>
                  </div>
                  <div class="doctor-name">Иванов Иван Иванович</div>
                  <div class="doctor-description">Главный врач, заведующий отделением наркологии</div>
                  <div class="doctor-image">
                    <img src="/assets/images/photos/doctor.png" alt="Фото врача">
                  </div>
                  <button class="button">Задать вопрос врачу</button>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="doctor-card">
                  <div class="placeholders">
                    <div class="placeholder-item">
                      <img src="/assets/images/icons/main-ico.png" alt="Главный врач">
                      Главный врач
                    </div>
                    <div class="placeholder-item">Стаж: 15 лет</div>
                  </div>
                  <div class="doctor-name">Иванов Иван Иванович</div>
                  <div class="doctor-description">Главный врач, заведующий отделением наркологии</div>
                  <div class="doctor-image">
                    <img src="/assets/images/photos/doctor.png" alt="Фото врача">
                  </div>
                  <button class="button">Задать вопрос врачу</button>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="doctor-card">
                  <div class="placeholders">
                    <div class="placeholder-item">
                      <img src="/assets/images/icons/main-ico.png" alt="Главный врач">
                      Главный врач
                    </div>
                    <div class="placeholder-item">Стаж: 15 лет</div>
                  </div>
                  <div class="doctor-name">Иванов Иван Иванович</div>
                  <div class="doctor-description">Главный врач, заведующий отделением наркологии</div>
                  <div class="doctor-image">
                    <img src="/assets/images/photos/doctor.png" alt="Фото врача">
                  </div>
                  <button class="button">Задать вопрос врачу</button>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="doctor-card">
                  <div class="placeholders">
                    <div class="placeholder-item">
                      <img src="/assets/images/icons/main-ico.png" alt="Главный врач">
                      Главный врач
                    </div>
                    <div class="placeholder-item">Стаж: 15 лет</div>
                  </div>
                  <div class="doctor-name">Иванов Иван Иванович</div>
                  <div class="doctor-description">Главный врач, заведующий отделением наркологии</div>
                  <div class="doctor-image">
                    <img src="/assets/images/photos/doctor.png" alt="Фото врача">
                  </div>
                  <button class="button">Задать вопрос врачу</button>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="doctor-card">
                  <div class="placeholders">
                    <div class="placeholder-item">
                      <img src="/assets/images/icons/main-ico.png" alt="Главный врач">
                      Главный врач
                    </div>
                    <div class="placeholder-item">Стаж: 15 лет</div>
                  </div>
                  <div class="doctor-name">Иванов Иван Иванович</div>
                  <div class="doctor-description">Главный врач, заведующий отделением наркологии</div>
                  <div class="doctor-image">
                    <img src="/assets/images/photos/doctor.png" alt="Фото врача">
                  </div>
                  <button class="button">Задать вопрос врачу</button>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="doctor-card">
                  <div class="placeholders">
                    <div class="placeholder-item">
                      <img src="/assets/images/icons/main-ico.png" alt="Главный врач">
                      Главный врач
                    </div>
                    <div class="placeholder-item">Стаж: 15 лет</div>
                  </div>
                  <div class="doctor-name">Иванов Иван Иванович</div>
                  <div class="doctor-description">Главный врач, заведующий отделением наркологии</div>
                  <div class="doctor-image">
                    <img src="/assets/images/photos/doctor.png" alt="Фото врача">
                  </div>
                  <button class="button">Задать вопрос врачу</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Вопросы и ответы -->
    <section class="faq-section">
      <div class="container">
        <div class="faq-wrapper">
          <div class="left-side">
            <div class="block-title">Часто задаваемые вопросы</div>
            <div class="button">Задать вопрос</div>
          </div>
          <div class="right-side">
            <div class="accordion">
              <div class="accordion-item">
                <div class="upper-block">
                  <div class="accordion-title">В какое время можно обратиться в кликнику</div>
                  <img class="accordion-arrow" src="./assets/images/icons/faq-button.png"></img>
                </div>
                <div class="accordion-content">
                  <p>Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. Положительным эффектом, компьютеры оказывают негативное влияние на человека.
                    Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. </p>
                  <div class="respondent">
                    <img src="./assets/images/photos/doctor.png" alt="Фото врача">
                    <div class="respondent-info">
                      <div class="respondent-placeholder">На вопрос ответил врач:</div>
                      <div class="respondent-name">Королькова Ольга Николаевна</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <div class="upper-block">
                  <div class="accordion-title">В какое время можно обратиться в кликнику</div>
                  <img class="accordion-arrow" src="./assets/images/icons/faq-button.png"></img>
                </div>
                <div class="accordion-content">
                  <p>Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. Положительным эффектом, компьютеры оказывают негативное влияние на человека.
                    Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. </p>
                  <div class="respondent">
                    <img src="./assets/images/photos/doctor.png" alt="Фото врача">
                    <div class="respondent-info">
                      <div class="respondent-placeholder">На вопрос ответил врач:</div>
                      <div class="respondent-name">Королькова Ольга Николаевна</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <div class="upper-block">
                  <div class="accordion-title">В какое время можно обратиться в кликнику</div>
                  <img class="accordion-arrow" src="./assets/images/icons/faq-button.png"></img>
                </div>
                <div class="accordion-content">
                  <p>Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. Положительным эффектом, компьютеры оказывают негативное влияние на человека.
                    Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. </p>
                  <div class="respondent">
                    <img src="./assets/images/photos/doctor.png" alt="Фото врача">
                    <div class="respondent-info">
                      <div class="respondent-placeholder">На вопрос ответил врач:</div>
                      <div class="respondent-name">Королькова Ольга Николаевна</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <div class="upper-block">
                  <div class="accordion-title">В какое время можно обратиться в кликнику</div>
                  <img class="accordion-arrow" src="./assets/images/icons/faq-button.png"></img>
                </div>
                <div class="accordion-content">
                  <p>Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. Положительным эффектом, компьютеры оказывают негативное влияние на человека.
                    Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. </p>
                  <div class="respondent">
                    <img src="./assets/images/photos/doctor.png" alt="Фото врача">
                    <div class="respondent-info">
                      <div class="respondent-placeholder">На вопрос ответил врач:</div>
                      <div class="respondent-name">Королькова Ольга Николаевна</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <div class="upper-block">
                  <div class="accordion-title">В какое время можно обратиться в кликнику</div>
                  <img class="accordion-arrow" src="./assets/images/icons/faq-button.png"></img>
                </div>
                <div class="accordion-content">
                  <p>Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. Положительным эффектом, компьютеры оказывают негативное влияние на человека.
                    Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. </p>
                  <div class="respondent">
                    <img src="./assets/images/photos/doctor.png" alt="Фото врача">
                    <div class="respondent-info">
                      <div class="respondent-placeholder">На вопрос ответил врач:</div>
                      <div class="respondent-name">Королькова Ольга Николаевна</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>


    <!-- Комплекс -->
    <section class="complex-section">
      <div class="container">
        <div class="complex-wrapper">
          <div class="upper-blocks">
            <div class="left-block">
              <div class="block-title">Комплексный подход клиники <b>«Призма»</b></div>
              <div class="prisma-with-buttons">
                <img src="/assets/images/photos/prisma-complex.png" />
                <img id="prisma-first" src="/assets/images/icons/prisma-first.png" />
                <img id="prisma-second" src="/assets/images/icons/prisma-second.png" />
                <img id="prisma-third" src="/assets/images/icons/prisma-third.png" />
                <img id="prisma-fourth" src="/assets/images/icons/prisma-fourth.png" />
                <img id="prisma-fifth" src="/assets/images/icons/prisma-fifth.png" />
                <img id="prisma-sixth" src="/assets/images/icons/prisma-sixth.png" />
              </div>
            </div>

            <div class="right-block">
              <div class="swiper-container-complex">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="complex-card">
                      <div class="upper-text">
                        <div class="image-container">
                          <img src="/assets/images/icons/prisma/1.png" />
                        </div>
                        Медикаментозная терапия
                      </div>
                      <div class="open-text">
                        Применение современных препаратов для детоксикации и стабилизации состояния.
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="complex-card">
                      <div class="upper-text">
                        <div class="image-container">
                          <img src="/assets/images/icons/prisma/2.png" />
                        </div>
                        Психотерапия
                      </div>
                      <div class="open-text">
                        Применение современных препаратов для детоксикации и стабилизации состояния.
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="complex-card">
                      <div class="upper-text">
                        <div class="image-container">
                          <img src="/assets/images/icons/prisma/3.png" />
                        </div>
                        Групповая терапия
                      </div>
                      <div class="open-text">
                        Применение современных препаратов для детоксикации и стабилизации состояния.
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="complex-card">
                      <div class="upper-text">
                        <div class="image-container">
                          <img src="/assets/images/icons/prisma/4.png" />
                        </div>
                        Семейная терапия
                      </div>
                      <div class="open-text">
                        Применение современных препаратов для детоксикации и стабилизации состояния.
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="complex-card">
                      <div class="upper-text">
                        <div class="image-container">
                          <img src="/assets/images/icons/prisma/5.png" />
                        </div>
                        Реабилитационные программы
                      </div>
                      <div class="open-text">
                        Применение современных препаратов для детоксикации и стабилизации состояния.
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="complex-card">
                      <div class="upper-text">
                        <div class="image-container">
                          <img src="/assets/images/icons/prisma/6.png" />
                        </div>
                        Профилактика срывов
                      </div>
                      <div class="open-text">
                        Применение современных препаратов для детоксикации и стабилизации состояния.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
          <div class="bottom-block">
            <div class="left-block">
              <div class="block-title">Статистика эффективности</div>
              <div class="numbers">
                <div class="number-item">
                  <div class="number" data-target="2250" data-symbol="+">2250</div>
                  <div class="description">Здоровых пациентов</div>
                </div>
                <div class="number-item">
                  <div class="number" data-target="10" data-symbol="+">10</div>
                  <div class="description">Лет успешной работы</div>
                </div>
                <div class="number-item">
                  <div class="number" data-target="800" data-symbol="+">800</div>
                  <div class="description">Выездов бригад</div>
                </div>
              </div>
            </div>
            <div class="right-block">
              <div class="block-title">Индивидуальный подход</div>
              <div class="block-desc">Применение современных препаратов для детоксикации и стабилизации состояния.</div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Фотогалерея / лицензии -->
    <section class="photo-licenses-section">
      <div class="container">
        <div class="photo-licenses-wrapper">
          <div class="gallery">
            <div class="block-title">Фотогалерея клиники</div>
            <div class="slider"></div>
          </div>
          <div class="licenses">
            <div class="block-title">Лицензии клиники</div>
            <div class="desc">Деятельность клиники основана на медицинской лицензии <b>№ЛО-77-01-018683</b></div>
            <a class="download-license">
              <img src="/assets/images/icons/download.png">
              <p>Скачать лицензию</p>
            </a>
            <div class="slider"></div>
          </div>
        </div>
      </div>
    </section>
  </main>


  <?php include 'includes/footer.php'; ?>

  <script src="https://api-maps.yandex.ru/2.1/?&lang=ru_RU" type="text/javascript"></script>

</body>

</html>