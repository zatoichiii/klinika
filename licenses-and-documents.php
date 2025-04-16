<?php include 'includes/header.php'; ?>
<div class="licenses-and-documents-wrapper">

    <div class="container">

        <div class="breadcrumbs">
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/"><img src="/assets/images/icons/home.png" alt="Главная"></a></li>
                    <li>/</li>
                    <li class="breadcrumb-item">Лицензии</li>
                </ul>
            </nav>
        </div>

        <div class="upper-block">
            <div class="title-block">Лицензии и документы
                клиники <b>«Призма»</b>
            </div>
            <div class="download-block">
                <div class="desc">Деятельность клиники основана на медицинской лицензии <b> №ЛО-77-01-018683</b></div>
                <a class="download-license">
                    <img src="/assets/images/icons/download.png">
                    <p>Скачать лицензию</p>
                </a>
            </div>
        </div>

        <div class="documents-items">
            <div>
                <a href="/assets/images/photos/license.png" data-fancybox="licenses-gallery">
                    <img src="/assets/images/photos/license.png">
                </a>
                <div class="lic-desc">Выписка Л041-01164-52/01066266 клиники Призма</div>
            </div>

            <div>
                <a href="/assets/images/photos/license.png" data-fancybox="licenses-gallery">
                    <img src="/assets/images/photos/license.png">
                </a>
                <div class="lic-desc">Выписка Л041-01164-52/01066266 клиники Призма</div>
            </div>
            <div>
                <a href="/assets/images/photos/license.png" data-fancybox="licenses-gallery">
                    <img src="/assets/images/photos/license.png">
                </a>
                <div class="lic-desc">Выписка Л041-01164-52/01066266 клиники Призма</div>
            </div>
            <div>
                <a href="/assets/images/photos/license.png" data-fancybox="licenses-gallery">
                    <img src="/assets/images/photos/license.png">
                </a>
                <div class="lic-desc">Выписка Л041-01164-52/01066266 клиники Призма</div>
            </div>
            <div>
                <a href="/assets/images/photos/license.png" data-fancybox="licenses-gallery">
                    <img src="/assets/images/photos/license.png">
                </a>
                <div class="lic-desc">Выписка Л041-01164-52/01066266 клиники Призма</div>
            </div>
            <div>
                <a href="/assets/images/photos/license.png" data-fancybox="licenses-gallery">
                    <img src="/assets/images/photos/license.png">
                </a>
                <div class="lic-desc">Выписка Л041-01164-52/01066266 клиники Призма</div>
            </div>

        </div>
    </div>
</div>


<style>
    .licenses-and-documents-wrapper {
        background-color: rgba(248, 248, 246, 1);
        padding: 40px 0;
    }

    /* Верхний блок */
    .upper-block {
        border-radius: 8px;
        padding: 20px;
        justify-content: space-between;
        display: flex;
        margin-bottom: 20px;
        align-items: center;
    }

    .title-block {
        font-weight: 500;
        font-size: 48px;
        line-height: 60px;
        width: 50%;
    }



    .download-block {
        width: 30%;
        display: flex;
        flex-direction: column;
        gap: 14px;
        background-color: white;
        padding: 20px;
        border-radius: 20px;
        justify-content: space-between;
    }

    .download-block .desc {
        font-size: 14px;
        color: #666;
    }

    .download-license {
        display: flex;
        align-items: center;
        text-decoration: none;
        font-weight: bold;
    }

    .download-license img {
        width: 20px;
        height: 20px;
        margin-right: 10px;
    }

    .download-license p {
        margin: 0;
    }

    /* Блок с документами */
    .documents-items {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
    }

    .documents-items>div {
        border-radius: 8px;
        text-align: center;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .documents-items>div:hover {
        transform: translateY(-5px);
    }

    .documents-items a {
        background-color: rgba(236, 234, 228, 1);
    }

    .documents-items>div img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 10px;
        transition: opacity 0.3s ease-in-out;
    }

    .documents-items>div img:hover {
        opacity: 0.9;
    }

    .lic-desc {
        font-size: 14px;
        color: #333;
        padding: 20px;
        padding-top: 0;
        border-radius: 20px;
        background-color: rgba(236, 234, 228, 1);
        line-height: 1.4;
        border-top-right-radius: 0;
        border-top-left-radius: 0;
    }


    @media screen and (max-width: 1090px) {
        .upper-block {
            flex-direction: column;
            gap: 20px
        }

        .title-block {
            width: 100%;
        }

        .download-block {
            width: 100%;
        }

    }

    @media screen and (max-width: 768px) {
        .title-block {
            font-weight: 500;
            font-size: 24px;
            line-height: 28px;
        }
    }
</style>

<?php include 'includes/footer-map.php'; ?>
<?php include 'includes/footer.php'; ?>