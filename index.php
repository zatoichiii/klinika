<?php include 'includes/header.php'; ?>

<!-- Баннер -->
<section class="banner-section">
  <div class="container">
    <div class="banner-wrapper">
      <div class="content">
        <h1 class="content-title">Наркологическая клиника <b>«Призма»</b></h1>
        <p class="content-description">Наши специализированные программы лечения алкоголизма предлагают комплексный
          подход, включающий медицинскую поддержку, психологическую терапию и индивидуальные планы реабилитации.</p>
        <a href="#" class="btn button">Бесплатная консультация</a>
      </div>
      <div class="image-wrapper">
        <picture>
          <source srcset="assets/images/photos/corridor.webp" type="image/webp">
          <img src="assets/images/photos/corridor.png" alt="Коридор клиники" class="content-image">
        </picture>
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
        <button class="btn call-button">Вызвать бригаду на дом</button>
      </div>

      <div class="right-section">
        <div class="map-section-new">
          <div id="map"></div>
          <div class="map-description first">
            <span>Выезжаем по всей Тульской области</span>
            <img src="assets/images/icons/newMapPin.png" alt="Местоположение">
          </div>
        </div>
        <div class="info-blocks">
          <div class="info-block">
            <div class="info-text">
              <img src="assets/images/icons/time.svg" alt="Время">
              <div class="time-line">
                <p class="time">30 минут</p>
                <p class="description">время приезда</p>
              </div>
            </div>
          </div>
          <div class="info-block">
            <div class="info-text">
              <img src="assets/images/icons/car.svg" alt="Скорая помощь">
              <div class="time-line">
                <p class="brigade-count">15 бригад</p>
                <p class="description">сейчас дежурит</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>


<!-- Блок услуг -->
<section class="services-section">
  <div class="container container-swiper">
    <div class="services-wrapper">
      <div class="block-title">Наши услуги</div>

      <div class="swiper-container-services swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide placeholder"></div>

          <div class="swiper-slide">
            <div class="slide-content">
              <div class="services__description">
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
              </div>
              <button class="btn">Подробнее</button>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-content">
              <div class="services__description">
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

              </div>
              <button>Подробнее</button>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-content">
              <div class="services__description">
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

                <a class="services__price-block">
                  <div class="services__price-description">
                    <span class="services__price-title">Все услуги</span>
                    <span class=services__price-subtitle> / 8 услуг</span>
                  </div>
                  <img src="/assets/images/icons/service-arrow.png" class="services__arrow" />
                </a>
              </div>
              <button class="btn">Подробнее</button>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-content">
              <div class="services__description">
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
              </div>
              <button class="btn">Подробнее</button>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-content">
              <div class="services__description">
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
              </div>
              <button class="btn">Подробнее</button>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-content" style="display: flex;
              flex-direction: column;
              height: 100%;
              justify-content: space-between;
              min-width: max-content
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
        <div style="position: relative;" class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</section>

<section class="prices-section">
  <div class="container">
    <div class="prices-wrapper">
      <div class="block-title">
        <div>Прайс-лист клиники «Призма»</div>
      </div>
      <div class="categories">
        <button class="category-btn active" data-category="detox">Вывод из запоя</button>
        <button class="category-btn" data-category="doctor">Нарколог на дом</button>
        <button class="category-btn" data-category="coding">Кодирование от алкоголизма</button>
        <button class="category-btn" data-category="alcoholism">Лечение алкоголизма</button>
        <div class="dropdown-container">
          <button class="dropdown-toggle">
            <img src="/assets/images/icons/category.png" />
          </button>

          <div class="dropdown-menu">
            <div class="category-modal-content">
              <button class="category-btn" data-category="drugs">Лечение наркомании</button>
              <button class="category-btn" data-category="rehabilitation">Реабилитация</button>
              <button class="category-btn" data-category="psychology">Психологическая помощь</button>
              <button class="category-btn" data-category="detoxification">Детоксикация</button>
            </div>
          </div>
        </div>
      </div>



      <div class="prices-list">
        <div class="price-category active" data-category="detox">
          <div class="price-item">
            <div class="price-info">
              <p>Стационарный вывод из запоя</p>
              <button class="details-btn">
                Подробнее
                <img src="/assets/images/icons/showMore-button.png" alt="Подробнее" />
              </button>
              <div class="price-item details">
                <p><b>Пребывание в стационаре:</b> со всеми удобствами.</p>
              </div>
            </div>
            <div class="price-value">
              <span>8500 ₽</span>
            </div>
          </div>
          <div class="price-item">
            <div class="price-info">
              <p>Стационарный вывод из запоя</p>
              <button class="details-btn">
                Подробнее
                <img src="/assets/images/icons/showMore-button.png" alt="Подробнее" />
              </button>
              <div class="price-item details">
                <p>Пребывание в стационаре со всеми удобствами.</p>
              </div>
            </div>
            <div class="price-value">
              <span>8500 ₽</span>
            </div>
          </div>
          <div class="price-item">
            <div class="price-info">
              <p>Стационарный вывод из запоя</p>
              <button class="details-btn">
                Подробнее
                <img src="/assets/images/icons/showMore-button.png" alt="Подробнее" />
              </button>
              <div class="price-item details">
                <p>Пребывание в стационаре со всеми удобствами.</p>
              </div>
            </div>
            <div class="price-value">
              <span>8500 ₽</span>
            </div>
          </div>
          <div class="price-item">
            <div class="price-info">
              <p>Стационарный вывод из запоя</p>
              <button class="details-btn">
                Подробнее
                <img src="/assets/images/icons/showMore-button.png" alt="Подробнее" />
              </button>
              <div class="price-item details">
                <p>Пребывание в стационаре со всеми удобствами.</p>
              </div>
            </div>
            <div class="price-value">
              <span>8500 ₽</span>
            </div>
          </div>
          <div class="price-item">
            <div class="price-info">
              <p>Стационарный вывод из запоя</p>
              <button class="details-btn">
                Подробнее
                <img src="/assets/images/icons/showMore-button.png" alt="Подробнее" />
              </button>
              <div class="price-item details">
                <p>Пребывание в стационаре со всеми удобствами.</p>
              </div>
            </div>
            <div class="price-value">
              <span>8500 ₽</span>
            </div>
          </div>
          <div class="price-item">
            <div class="price-info">
              <p>Стационарный вывод из запоя</p>
              <button class="details-btn">
                Подробнее
                <img src="/assets/images/icons/showMore-button.png" alt="Подробнее" />
              </button>
              <div class="price-item details">
                <p>Пребывание в стационаре со всеми удобствами.</p>
              </div>
            </div>
            <div class="price-value">
              <span>8500 ₽</span>
            </div>
          </div>
          <div class="price-item">
            <div class="price-info">
              <p>Стационарный вывод из запоя</p>
              <button class="details-btn">
                Подробнее
                <img src="/assets/images/icons/showMore-button.png" alt="Подробнее" />
              </button>
              <div class="price-item details">
                <p>Пребывание в стационаре со всеми удобствами.</p>
              </div>
            </div>
            <div class="price-value">
              <span>8500 ₽</span>
            </div>
          </div>
          <div class="price-item">
            <div class="price-info">
              <p>Стационарный вывод из запоя</p>
              <button class="details-btn">
                Подробнее
                <img src="/assets/images/icons/showMore-button.png" alt="Подробнее" />
              </button>
              <div class="price-item details">
                <p>Пребывание в стационаре со всеми удобствами.</p>
              </div>
            </div>
            <div class="price-value">
              <span>8500 ₽</span>
            </div>
          </div>
          <div class="price-item">
            <div class="price-info">
              <p>Стационарный вывод из запоя</p>
              <button class="details-btn">
                Подробнее
                <img src="/assets/images/icons/showMore-button.png" alt="Подробнее" />
              </button>
              <div class="price-item details">
                <p>Пребывание в стационаре со всеми удобствами.</p>
              </div>
            </div>
            <div class="price-value">
              <span>8500 ₽</span>
            </div>
          </div>
        </div>

        <div class="price-category" data-category="drugs">
          <div class="price-item">
            <div class="price-info">
              <p>Стационарное лечение наркомании</p>
              <button class="details-btn">
                Подробнее
                <img src="/assets/images/icons/showMore-button.png" alt="Подробнее" />
              </button>
              <div class="price-item details">
                <p>Полное погружение в процесс лечения под наблюдением врачей.</p>
              </div>
            </div>
            <div class="price-value">
              <span>30000 ₽</span>
            </div>
          </div>
          <div class="price-item">
            <div class="price-info">
              <p>Стационарное лечение наркомании</p>
              <button class="details-btn">
                Подробнее
                <img src="/assets/images/icons/showMore-button.png" alt="Подробнее" />
              </button>
              <div class="price-item details">
                <p>Полное погружение в процесс лечения под наблюдением врачей.</p>
              </div>
            </div>
            <div class="price-value">
              <span>30000 ₽</span>
            </div>
          </div>
          <div class="price-item">
            <div class="price-info">
              <p>Стационарное лечение наркомании</p>
              <button class="details-btn">
                Подробнее
                <img src="/assets/images/icons/showMore-button.png" alt="Подробнее" />
              </button>
              <div class="price-item details">
                <p>Полное погружение в процесс лечения под наблюдением врачей.</p>
              </div>
            </div>
            <div class="price-value">
              <span>30000 ₽</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Блок акций -->
<section class="stock-section">
  <div class="container container-swiper">
    <div class="block-title">Акции клиники</div>
    <div class="swiper-container-stock swiper">
      <div class="swiper-wrapper">
        <div class="promotion swiper-slide">
          <div class="slide-content">
            <div class="slide-discount">Скидка</div>
            <div class="slide-title">Скидка на услугу <b>«Кодирование методом Довженко»</b></div>
            <p>При заказе услуги «Кодирование методом Довженко» через сайт</p>
            <div class="price-value-promotion">
              <div class="price-value-promotion-old">9500 ₽</div>
              <div class="price-value-promotion-new">8500 ₽</div>
            </div>
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
            <button class="btn btn-primary promotion default">Заказать услугу</button>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slide-content">
            <div class="slide-discount">Скидка</div>
            <div class="slide-title">Скидка -10% действующим военнослужащим</div>
            <p>Акция распространяется только на действующих военных.</p>
            <button class="btn btn-primary promotion default">Заказать услугу</button>
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
            <button class="btn btn-primary promotion default">Заказать услугу</button>
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
          <button class="swiper-button-prev stages"></button>
          <button class="swiper-button-next stages"></button>
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
  <div class="container container-swiper">
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
        <div class="swiper-pagination" style="position: relative; padding-top: 20px"></div>

      </div>
    </div>

  </div>
</section>

<style>



</style>

<!-- Преимущества -->
<?php include 'includes/advantages.php'; ?>



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
          <a href="/about" class="more-button">Подробнее о клинике</a>
        </div>

        <div class="right-column">
          <div class="video-text-block">
            <div class="video-container">
              <a href="/assets/images/photos/test.mp4" data-fancybox="video-gallery" data-caption="Промо-видео">
                <img src="/assets/images/icons/play.png" alt="Воспроизвести видео" class="play-button">
              </a>
              <img src="assets/images/photos/promo.jpg" alt="Превью видео" class="video-preview">
              <p class="description">Промо-ролик клиники «Призма»</p>
            </div>
          </div>
        </div>
      </div>
      <div class="info-blocks">
        <div class="info-item">
          <span class="number" data-target="10" data-symbol="+">10</span>
          <p class="text">Лет успешной работы</p>
        </div>
        <div class="info-item">
          <span class="number" data-target="20">20</span>
          <p class="text">Опытных специалистов</p>
        </div>
        <div class="info-item">
          <span class="number" data-target="50" data-symbol="+">50</span>
          <p class="text">Методик лечения</p>
        </div>
        <div class="info-item">
          <span class="number" data-target="250" data-symbol="+">250</span>
          <p class="text">Здоровых пациентов</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Врачи -->
<?php include 'includes/doctors-slider.php'; ?>


<!-- Вопросы и ответы -->
<?php include 'includes/faq.php'; ?>


<!-- Комплекс -->
<?php include 'includes/complex.php'; ?>


<!-- Фотогалерея / лицензии -->
<? include 'includes/gallery-licenses.php'; ?>

<!-- Отзывы -->
<? include 'includes/reviews.php'; ?>


<!-- Текстовый блок -->
<section class="article-section">
  <div class="container">
    <div class="article-wrapper">
      <div class="left-side-article">
        <div class="title-article">H3 Длинный заголовок для статьи о лечении</div>
        <div class="article-body">
          <div class="article-content">
            <p>Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. Положительным эффектом, компьютеры оказывают негативное влияние на человека.</p>
            <p>Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. Положительным эффектом, компьютеры оказывают негативное влияние на человека.Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. Положительным эффектом, компьютеры оказывают негативное влияние на человека.</p>
            <p>Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. Положительным эффектом, компьютеры оказывают негативное влияние на человека.Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. Положительным эффектом, компьютеры оказывают негативное влияние на человека.</p>
            <p>Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. Положительным эффектом, компьютеры оказывают негативное влияние на человека.Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. Положительным эффектом, компьютеры оказывают негативное влияние на человека.</p>
            <p>Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. Положительным эффектом, компьютеры оказывают негативное влияние на человека.Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. Положительным эффектом, компьютеры оказывают негативное влияние на человека.</p>
            <p>Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. Положительным эффектом, компьютеры оказывают негативное влияние на человека.Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. Положительным эффектом, компьютеры оказывают негативное влияние на человека.</p>
            <p>Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. Положительным эффектом, компьютеры оказывают негативное влияние на человека.Но проблема в том, что вместе с положительным эффектом, компьютеры оказывают негативное влияние на человека. Положительным эффектом, компьютеры оказывают негативное влияние на человека.</p>
          </div>
          <button class="read-more-btn">Читать полностью
            <img src="/assets/images/icons/down.png"/>
          </button>
        </div>
      </div>
      <div class="right-side-form">
        <?php include 'includes/form-right-side.php'; ?>
      </div>
    </div>
  </div>
</section>


<?php include 'includes/branches.php'; ?>





<?php include 'includes/footer-map.php'; ?>
<?php include 'includes/footer.php'; ?>