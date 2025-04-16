<?php include 'includes/header.php'; ?>
<div class="sitemap-wrapper">
    <div class="container">
        <div class="breadcrumbs">
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/"><img src="/assets/images/icons/home.png" alt="Главная"></a></li>
                    <li>/</li>
                    <li class="breadcrumb-item active" aria-current="page">Карта сайта</li>
                </ul>
            </nav>
        </div>


        <div class="main-info">
            <div class="block-title-map">Карта сайта</div>
            <div class="accordion">
                <div class="accordion-item">
                    <div class="upper-block">
                        <div class="accordion-title">О компании</div>
                        <img class="accordion-arrow" src="./assets/images/icons/faq-button.png">
                    </div>
                    <div class="accordion-content">
                        <ul>
                            <li><a href="/about/">О нас</a></li>
                            <li><a href="/team/">Наша команда</a></li>
                            <li><a href="/history/">История компании</a></li>
                            <li><a href="/partners/">Партнеры</a></li>
                        </ul>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="upper-block">
                        <div class="accordion-title">Услуги</div>
                        <img class="accordion-arrow" src="./assets/images/icons/faq-button.png">
                    </div>
                    <div class="accordion-content">
                        <ul>
                            <li><a href="/services/diagnostics/">Диагностика</a></li>
                            <li><a href="/services/treatment/">Лечение</a></li>
                            <li><a href="/services/rehabilitation/">Реабилитация</a></li>
                            <li><a href="/services/prevention/">Профилактика</a></li>
                        </ul>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="upper-block">
                        <div class="accordion-title">Статьи и новости</div>
                        <img class="accordion-arrow" src="./assets/images/icons/faq-button.png">
                    </div>
                    <div class="accordion-content">
                        <ul>
                            <li><a href="/articles/">Все статьи</a></li>
                            <li><a href="/news/">Новости</a></li>
                            <li><a href="/blog/">Блог</a></li>
                        </ul>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="upper-block">
                        <div class="accordion-title">Контакты</div>
                        <img class="accordion-arrow" src="./assets/images/icons/faq-button.png">
                    </div>
                    <div class="accordion-content">
                        <ul>
                            <li><a href="/contacts/">Контактная информация</a></li>
                            <li><a href="/feedback/">Обратная связь</a></li>
                            <li><a href="/locations/">Наши филиалы</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<style>
    /* Заголовок карты сайта */
    .block-title-map {
        font-weight: 500;
        font-size: 48px;
        line-height: 60px;
        letter-spacing: 0%;
        margin: 40px 0;
    }

    /* Стили для аккордеона */
    .accordion {
        background-color: white;
        border-radius: 20px;
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: space-between;
        padding: 30px;
    }

    .accordion-item {
        height: fit-content;
        width: calc(50% - 10px);
        border-bottom: 1px solid rgba(1, 1, 1, 0.2);
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .accordion-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .upper-block {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 20px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .upper-block:hover {
        background-color: #f0f0f0;
    }

    .accordion-title {
        font-weight: 500;
        font-size: 16px;
        line-height: 22px;
        letter-spacing: 0px;
    }

    .accordion-arrow {
        width: 32px;
        height: 32px;
        transition: transform 0.3s ease;
    }

    .accordion-arrow.open {
        transform: rotate(180deg);
    }

    .accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease, padding 0.3s ease;
        padding: 0 20px;
    }

    .accordion-content ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .accordion-content ul li {
        margin: 10px 0;
    }

    .accordion-content ul li a {
        text-decoration: none;
        color: var(--red-color);
        /* Замените на ваш цвет ссылок */
        font-size: 16px;
        transition: color 0.3s ease;
    }

    .accordion-content ul li a:hover {
        color: #007bff;
        /* Цвет при наведении */
    }

    .accordion-content.open {
        max-height: 300px;
        padding: 15px 20px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    /* Адаптивность для мобильных устройств */
    @media screen and (max-width: 768px) {
        .accordion-item {
            width: 100%;
            /* Один блок в строке на маленьких экранах */
        }
    }
</style>


<?php include 'includes/footer.php'; ?>