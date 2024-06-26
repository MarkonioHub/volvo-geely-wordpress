<div class="modal-registration" id="modal-registration">
    <div class="modal-registration__inner">
        <div class="modal-registration__title">Запись на сервис</div>
        <p class="modal-registration__text">
            Устраним любую неполадку в кратчайшие сроки и по оптимальной цене.
            оставьте заявку, мы перезвоним вам в ближайшее время.
        </p>
        <form class="modal-registration__form" action="<?php echo $GLOBALS['API_URL'] ?>" data-role="form-validate">
            <input type="hidden" name="hidden-input" value="hidden-input-value">
            <label class="modal-registration__label">
                <input type="text" class="modal-registration__input" placeholder=" " data-role="form-input-name" minlength="3" maxlength="20" name="name" required>
                <span class="modal-registration__placeholder">Как вас зовут?</span>
            </label>
            <label class="modal-registration__label">
                <input type="tel" class="modal-registration__input" placeholder=" " data-role="form-input-phone" name="phone" required>
                <span class="modal-registration__placeholder">Ваш телефон</span>
            </label>
            <button class="modal-registration__submit btn-black btn-black_hover-white">Оставить заявку</button>
        </form>
        <p class="modal-registration__policy">
            Отправляя заявку, вы подтверждаете свое согласие  на <a href="#">обработку персональных данных.</a>
            Ваши контактные данные в безопасности и не будут переданы третьим лицам
        </p>
    </div>
</div>
