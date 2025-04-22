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


<?php include 'includes/main-form.php'; ?>
<?php include 'includes/footer-map.php'; ?>
<?php include 'includes/footer.php'; ?>