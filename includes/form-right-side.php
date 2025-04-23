<div class="form-body">
    <form class="form-content" id="consultationForm">
        <div class="form-title">Оставьте заявку на <b>бесплатную</b> консультацию</div>
        <div class="form-desc">Оставьте свой номер, и мы вам перезвоним в течение 10 минут</div>
        <input type="tel" name="phone" id="phoneInput" placeholder="+7 (___) ___-__-__" required>

        <button type="submit">Получить консультацию</button>
        <p id="errorMessage" style="color: red; font-size: 12px; display: none;">Заполните все поля корректно</p>
        <div class="checkbox-container">
            <input type="checkbox" id="privacyCheckbox" required>
            <label for="privacyCheckbox">Отправляя данные вы соглашаетесь с <a href="/privacy-policy" target="_blank">политикой конфиденциальности</a></label>
        </div>
    </form>
</div>