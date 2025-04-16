<?php include 'includes/header.php'; ?>

<div class="search-page">
    <div class="container">
    <div class="breadcrumbs">
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><img src="/assets/images/icons/home.png" alt="Главная"> </a></li>
            <li>/</li>
            <li class="breadcrumb-item active" aria-current="page">Поиск</li>
        </ul>
    </nav>
</div>
        <div class="search-box">
            <!-- Поле поиска -->
            <div class="input-group">
                <input type="text" id="searchInputPage" placeholder="Введите запрос..." class="search-field" />
                <span class="search-trigger">
                    <img src="/assets/images/icons/search.png" alt="Поиск" class="icon-search" />
                </span>
            </div>

            <!-- Результаты поиска -->
            <div class="result-list" id="searchResultsPage"></div>

            <!-- Пагинация -->
            <div class="paginationSearchPage-nav" id="paginationSearchPage"></div>
        </div>
    </div>
</div>
<?php include 'includes/footer-map.php'; ?>
<?php include 'includes/footer.php'; ?>

<?php
$mydata = [
    ["id" => 1, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 2, "title" => "Услуга", "category" => "Услуга"],
    ["id" => 3, "title" => "Статья", "category" => "Статья"],
    ["id" => 4, "title" => "Статья", "category" => "Статья"],
    ["id" => 5, "title" => "Статья", "category" => "Статья"],
];
?>
<script>
    const mydata = <?php echo json_encode($mydata); ?>;

    if (!Array.isArray(mydata)) {
        console.error("Ошибка: mydata не является массивом!");
    }

    document.addEventListener("DOMContentLoaded", function() {
        const searchInputPage = document.getElementById("searchInputPage");
        const searchResultsPage = document.getElementById("searchResultsPage");
        const paginationContainer = document.getElementById("paginationSearchPage");

        if (!searchInputPage || !searchResultsPage || !paginationContainer) {
            console.error("Ошибка: один из элементов не найден!");
            return;
        }

        let currentPage = 1; // Текущая страница
        const itemsPerPage = 8; // Количество элементов на странице
        let filteredData = []; // Глобальная переменная для хранения отфильтрованных данных

        // Функция для отображения результатов
        function displayResults(results, page) {
            searchResultsPage.innerHTML = ""; // Очищаем предыдущие результаты

            if (results.length === 0) {
                searchResultsPage.innerHTML = "<div class='item'>Ничего не найдено</div>";
                paginationContainer.innerHTML = ""; // Убираем пагинацию
                return;
            }

            // Разбиваем результаты на страницы
            const startIndex = (page - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            const paginatedResults = results.slice(startIndex, endIndex);

            paginatedResults.forEach(item => {
                const resultItem = document.createElement("div");
                resultItem.classList.add("item");

                resultItem.innerHTML = `
                <div>
                    <div class="category">${item.category}</div>
                    <strong>${item.title}</strong>
                </div>
                <a href="#" class="link-more">Подробнее</a>
            `;

                searchResultsPage.appendChild(resultItem);
            });

            updatePagination(results.length, page);
        }

        function updatePagination(totalItems, currentPage) {
            const totalPages = Math.ceil(totalItems / itemsPerPage); // Общее количество страниц
            paginationContainer.innerHTML = ""; // Очищаем предыдущую пагинацию

            if (totalPages <= 1) {
                return; // Если страница только одна, пагинация не нужна
            }

            for (let i = 1; i <= totalPages; i++) {
                const button = document.createElement("button");
                button.textContent = i;
                button.classList.toggle("active", i === currentPage);

                button.addEventListener("click", () => {
                    currentPage = i; // Обновляем текущую страницу
                    displayResults(filteredData, currentPage); // Показываем результаты для новой страницы
                });

                paginationContainer.appendChild(button);
            }
        }

        // Функция для поиска
        function performSearch(query) {
            const lowerCaseQuery = query.toLowerCase();

            // Фильтруем данные
            filteredData = mydata.filter(item => {
                const title = item.title.trim().toLowerCase();
                const category = item.category.trim().toLowerCase();
                return title.includes(lowerCaseQuery) || category.includes(lowerCaseQuery);
            });

            currentPage = 1; // Сбрасываем текущую страницу при новом поиске
            displayResults(filteredData, currentPage); // Отображаем результаты
        }

        // Обработчик ввода текста
        searchInputPage.addEventListener("input", function() {
            const query = searchInputPage.value.trim();

            if (query.length > 0) {
                performSearch(query);
            } else {
                searchResultsPage.innerHTML = ""; // Очищаем результаты, если поле пустое
                paginationContainer.innerHTML = ""; // Убираем пагинацию
            }
        });
    });
</script>