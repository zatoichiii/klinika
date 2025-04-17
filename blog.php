<?php include 'includes/header.php'; ?>
<div class="blog-page">
    <div class="blog-section">
        <div class="container">
            <div class="breadcrumbs">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"><img src="/assets/images/icons/home.png" alt="Главная"></a></li>
                        <li>/</li>
                        <li class="breadcrumb-item active" aria-current="page">Блог</li>
                    </ul>
                </nav>
            </div>
            <div class="blog-wrapper">
                <div class="blog-title-main">
                    Статьи клиники
                </div>
                <!-- Фильтр -->
                <div class="blog-filter">
                    <button class="filter-btn active" data-category="all">Все</button>
                    <button class="filter-btn" data-category="health">Здоровье</button>
                    <button class="filter-btn" data-category="psychology">Психология</button>
                    <button class="filter-btn" data-category="alcohol">Алкоголь</button>
                </div>
                <!-- Карточки статей -->
                <div class="blog-cards">
                    <a class="blog-card" data-category="alcohol">
                        <div class="card-image">
                            <img src="/assets/images/photos/blog.jfif" alt="Как алкоголь влияет на настроение">
                            <div class="card-tags">
                                <span class="tag date">12.09.2023</span>
                                <span class="tag type">Алкоголь</span>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Как алкоголь влияет на настроение</h3>
                            <p class="card-description">
                                Наши специалисты обладают многолетним опытом и регулярно совершенствуют свои навыки.
                            </p>
                        </div>
                    </a>
                    <a class="blog-card" data-category="health">
                        <div class="card-image">
                            <img src="/assets/images/photos/blog.jfif" alt="Здоровый образ жизни">
                            <div class="card-tags">
                                <span class="tag date">15.08.2023</span>
                                <span class="tag type">Здоровье</span>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Здоровый образ жизни</h3>
                            <p class="card-description">
                                Важно поддерживать баланс между физической активностью и правильным питанием.
                            </p>
                        </div>
                    </a>
                    <a class="blog-card" data-category="psychology">
                        <div class="card-image">
                            <img src="/assets/images/photos/blog.jfif" alt="Психологическое здоровье">
                            <div class="card-tags">
                                <span class="tag date">20.07.2023</span>
                                <span class="tag type">Психология</span>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Психологическое здоровье</h3>
                            <p class="card-description">
                                Регулярная работа с психологом помогает улучшить качество жизни.
                            </p>
                        </div>
                    </a>
                    <a class="blog-card" data-category="health">
                        <div class="card-image">
                            <img src="/assets/images/photos/blog.jfif" alt="Физическая активность">
                            <div class="card-tags">
                                <span class="tag date">05.06.2023</span>
                                <span class="tag type">Здоровье</span>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Физическая активность</h3>
                            <p class="card-description">
                                Умеренные физические нагрузки способствуют укреплению здоровья.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .blog-section {
        padding: 20px 0;
        background-color: var(--bg-color);
    }

    .blog-title-main {
        font-weight: 500;
        font-size: 48px;
        line-height: 60px;
        letter-spacing: 0%;
        margin-bottom: 30px;
    }

    .blog-filter {
        display: flex;
        gap: 10px;
        margin-bottom: 30px;
        overflow-x: auto;
        scrollbar-width: thin;
        padding-bottom: 10px;
        scrollbar-color: var(--red-color) transparent;
    }

    .blog-filter::-webkit-scrollbar {
        height: 8px;
    }

    .blog-filter::-webkit-scrollbar-thumb {
        background-color: var(--red-color);
        border-radius: 10px;
    }

    .blog-filter::-webkit-scrollbar-track {
        background-color: transparent;
    }

    .filter-btn {
        padding: 10px 20px;
        border: none;
        border-radius: 20px;
        background-color: #f0f0f0;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .filter-btn.active,
    .filter-btn:hover {
        background-color: var(--red-color);
        color: white;
    }

    .blog-cards {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .blog-card {
        position: relative;
        background-color: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-image {
        position: relative;
        width: 100%;
        height: 200px;
        /* Высота изображения */
    }

    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }

    .card-tags {
        position: absolute;
        top: 10px;
        left: 10px;
        display: flex;
        gap: 5px;
    }

    .tag {
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 500;
        color: white;
    }

    .tag.date {
        background-color: var(--red-color);
        /* Цвет для даты */
    }

    .tag.type {
        background-color: var(--red-color);
    }

    .card-content {
        padding: 14px 24px;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
        background-color: white;
    }

    .card-title {
        font-size: 18px;
        font-weight: 600;
        padding-bottom: 10px;
        border-bottom: 1px solid rgba(1, 1, 1, 0.1);
    }

    .card-description {
        margin-top: 10px;
        font-size: 14px;
        color: #555;
    }

    @media (max-width: 1200px) {
        .blog-cards {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 768px) {
        .blog-cards {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {
        .blog-cards {
            grid-template-columns: 1fr;
        }
    }
</style>

<?php include 'includes/main-form.php'; ?>
<?php include 'includes/footer-map.php'; ?>
<?php include 'includes/footer.php'; ?>