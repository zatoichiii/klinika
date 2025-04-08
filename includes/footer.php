<footer class="footer-section">
    <div class="container">
        <div class="footer-wrapper">
            <div class="upper-blcok">
                <div class="logo">
                    <img>
                    <div class="title">Призма</div>
                    <div class="desc">Наркология</div>
                </div>
                <div class="buttons">
                    <button class="button-eye">
                        <img>
                        Версия для слабовидящих
                    </button>
                    <button class="call">Срочный вызов врача</button>
                </div>
            </div>

            <div class="link-block">
                <div class="link-item">
                        <div class="link-bold-title">Телефоны</div>
                        <a type="tel">8 (888) 999-99-99</a>
                        <a type="tel">8 (888) 999-99-99</a>
                </div>
                <div class="link-item">
                        <div class="link-bold-title">Адрес</div>
                        <p> г. Тула, ул. Ленина, 191, офис 153</p>
                </div>
                <div class="link-item">
                        <div class="link-bold-title">Соц. сети:</div>
                        <div class="row-links">
                            <a href=""><img src="" alt=whatsapp></a>
                            <a href=""><img src="" alt='tg'></a>
                            <a href=""><img src="" alt=vk></a>
                            <a href=""><img src="" alt=odnosklassnoiki></a>
                        </div>
                </div>
            </div>
            <div class="link-block">
                <div class="accorduion-item">О клинике <img src="assets\images\icons\accrodion.png"></div>
                <a href="">FAQ</a>
            </div>
        </div>
    </div>
</footer>


<script>
    // Добавляем функционал для аккордеона
document.addEventListener("DOMContentLoaded", () => {
    const accordionItems = document.querySelectorAll(".accorduion-item");

    accordionItems.forEach((item) => {
        item.addEventListener("click", () => {
            const icon = item.querySelector("img");
            const content = item.nextElementSibling;

            // Переключаем класс активности для стрелки
            icon.classList.toggle("active");

            // Показываем/скрываем контент
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    });
});
</script>
<style>
    /* Общие стили для футера */
.footer-section {
    background-color: rgba(192, 178, 149, 0.5);
    color: rgba(25, 19, 20, 1);
    padding: 40px 0;
}

.footer-wrapper {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.upper-blcok {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    display: flex;
    align-items: center;
    gap: 15px;
}

.logo img {
    width: 50px;
    height: 50px;
    object-fit: cover;
}

.logo .title {
    font-size: 24px;
    font-weight: bold;
}

.logo .desc {
    font-size: 16px;
    color: #bdc3c7;
}

.buttons {
    display: flex;
    gap: 15px;
}

.button-eye,
.call {
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.button-eye {
    background-color: #3498db;
    color: #ffffff;
}

.call {
    background-color: #e74c3c;
    color: #ffffff;
}

.link-block {
    display: flex;
    justify-content: space-between;
    gap: 30px;
}

.link-item {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.link-bold-title {
    font-size: 18px;
    font-weight: bold;
}

a[type="tel"] {
    color: #ecf0f1;
    text-decoration: none;
    font-size: 16px;
}

a[type="tel"]:hover {
    text-decoration: underline;
}

.row-links {
    display: flex;
    gap: 10px;
}

.row-links a img {
    width: 24px;
    height: 24px;
    object-fit: cover;
}

.accorduion-item {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
}

.accorduion-item img {
    width: 16px;
    height: 16px;
    transition: transform 0.3s ease;
}

.accorduion-item img.active {
    transform: rotate(180deg);
}
</style>
