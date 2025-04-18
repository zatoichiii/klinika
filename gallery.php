<?php include 'includes/header.php'; ?>
<div class="container">
    <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/"><img src="/assets/images/icons/home.png" alt="Главная"></a></li>
                <li>/</li>
                <li class="breadcrumb-item active">Галерея</li>
            </ul>
        </nav>
    </div>
    <div class="gallery-upper-block">

        <h1 class="gallery-title">Фотогалерея</h1>
        <div class="gallery-filter">
            <button class="filter-btn active" data-filter="all">Все</button>
            <button class="filter-btn" data-filter="wards">Палаты</button>
            <button class="filter-btn" data-filter="clinic">Клиника</button>
            <button class="filter-btn" data-filter="doctors">Врачи</button>
        </div>
    </div>
    <div class="gallery-wrapper"></div>
    <div class="pagination"></div>
</div>

<?php include 'includes/footer-map.php'; ?>
<?php include 'includes/footer.php'; ?>

<?php
$galleryItems = [
    ['src' => 'assets/images/photos/galleryitem.png', 'alt' => 'Палата 1', 'category' => 'wards'],
    ['src' => 'assets/images/photos/galleryitem.png', 'alt' => 'Палата 2', 'category' => 'wards'],
    ['src' => 'assets/images/photos/galleryitem.png', 'alt' => 'Палата 3', 'category' => 'wards'],
    ['src' => 'assets/images/photos/corridor.png', 'alt' => 'Клиника 1', 'category' => 'clinic'],
    ['src' => 'assets/images/photos/corridor.png', 'alt' => 'Клиника 2', 'category' => 'clinic'],
    ['src' => 'assets/images/photos/doctor.png', 'alt' => 'Врач 1', 'category' => 'doctors'],
    ['src' => 'assets/images/photos/doctor2.png', 'alt' => 'Врач 2', 'category' => 'doctors'],
];

echo '<script>const galleryData = ' . json_encode($galleryItems) . ';</script>';
?>

<style>
    .gallery-upper-block {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 60px;
        padding-top: 40px;
    }

    .gallery-title {
        font-weight: 500;
        font-size: 48px;
        line-height: 60px;

    }

    .gallery-filter {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .filter-btn {
        padding: 10px 15px;
        border: none;
        background-color: #f0f0f0;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
        font-size: 14px;
    }

    .filter-btn.active {
        background-color: var(--red-color);
        color: white;
    }

    .gallery-wrapper {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
        margin-bottom: 20px;
    }

    .gallery-item {
        opacity: 0;
        transform: scale(0.9);
        transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
    }

    .gallery-item.visible {
        opacity: 1;
        transform: scale(1);
    }

    .gallery-item img {
        width: 100%;
        height: 200px;
        border-radius: 10px;
        object-fit: cover;
        display: block;
    }

    .gallery-item:hover {
        transform: scale(1.05);
    }

    .pagination {
        display: flex;
        justify-content: center;
        gap: 10px;
        padding-bottom: 40px;
    }

    .pagination button {
        padding: 10px 15px;
        border: none;
        background-color: var(--red-color);
        color: white;
        cursor: pointer;
        border-radius: 5px;
        font-size: 14px;
    }

    .pagination button.active {
        background-color: rgb(156 100 130);
    }

    @media screen and (max-width: 768px) {
        .gallery-upper-block {
            flex-direction: column;
            gap: 20px;
        }

        .gallery-title {
            font-size: 32px;
            line-height: 1.2;
        }
    }
</style>

<script>
    let currentPage = 1;
    const itemsPerPage = 12;

    document.addEventListener('DOMContentLoaded', () => {
        const galleryWrapper = document.querySelector('.gallery-wrapper');
        const paginationContainer = document.querySelector('.pagination');
        const filterButtons = document.querySelectorAll('.filter-btn');


        function displayGalleryItems(filteredItems) {
            const currentItems = galleryWrapper.querySelectorAll('.gallery-item');
            currentItems.forEach(item => item.classList.remove('visible'));

            setTimeout(() => {
                galleryWrapper.innerHTML = '';

                const start = (currentPage - 1) * itemsPerPage;
                const end = start + itemsPerPage;
                const paginatedItems = filteredItems.slice(start, end);

                if (paginatedItems.length === 0) {
                    galleryWrapper.innerHTML = '<p>Нет изображений для отображения.</p>';
                    return;
                }

                paginatedItems.forEach((item, index) => {
                    const galleryItem = document.createElement('div');
                    galleryItem.classList.add('gallery-item');
                    galleryItem.innerHTML = `
                    <a href="${item.src}" data-fancybox="gallery" data-caption="${item.alt}">
                        <img src="${item.src}" alt="${item.alt}">
                    </a>
                `;
                    galleryWrapper.appendChild(galleryItem);

                    setTimeout(() => galleryItem.classList.add('visible'), index * 100);
                });

                setupPagination(filteredItems.length);
            }, 500);
        }


        function setupPagination(totalItems) {
            paginationContainer.innerHTML = '';
            const totalPages = Math.ceil(totalItems / itemsPerPage);

            if (totalPages <= 1) {
                paginationContainer.style.display = 'none';
                return;
            } else {
                paginationContainer.style.display = 'flex';
            }

            for (let i = 1; i <= totalPages; i++) {
                const pageBtn = document.createElement('button');
                pageBtn.textContent = i;
                pageBtn.classList.toggle('active', i === currentPage);
                pageBtn.addEventListener('click', () => {
                    currentPage = i;
                    updateGallery();
                });
                paginationContainer.appendChild(pageBtn);
            }
        }

        function filterGallery(filter) {
            const filteredItems = filter === 'all' ?
                galleryData :
                galleryData.filter(item => item.category === filter);
            currentPage = 1;
            displayGalleryItems(filteredItems);
        }

        function updateGallery() {
            const activeFilter = document.querySelector('.filter-btn.active').dataset.filter;
            filterGallery(activeFilter);
        }

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                updateGallery();
            });
        });

        if (typeof Fancybox !== 'undefined') {
            Fancybox.bind('[data-fancybox="gallery"]');
        }

        // Первичная загрузка
        filterGallery('all');
    });
</script>