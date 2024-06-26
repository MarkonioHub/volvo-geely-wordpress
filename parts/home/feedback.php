<section class="feedback">
    <div class="container">
        <div class="feedback__wrap">
            <div class="feedback__area">
                <div class="feedback__box">
                    <h3 class="feedback__title">знаем о Вашем Geely&nbsp;всё</h3>
                    <p class="feedback__text">
                        устраним любую неполадку в кратчайшие сроки и по оптимальной цене.
                        оставьте заявку, мы перезвоним вам в ближайшее время.
                    </p>
                    <form action="<?php echo $GLOBALS['API_URL'] ?>" class="feedback__form" data-role="form-validate">
                        <input type="hidden" name="hidden-input" value="hidden-input-value">
                        <div class="feedback__line">
                            <label class="feedback__label">
                                <input type="text" class="feedback__input" placeholder=" " required data-role="form-input-name" minlength="3" maxlength="20" name="name">
                                <span class="feedback__placeholder">Как вас зовут?</span>
                            </label>
                            <label class="feedback__label">
                                <input type="tel" class="feedback__input" placeholder=" " required data-role="form-input-phone" name="phone">
                                <span class="feedback__placeholder">Ваш телефон</span>
                            </label>
                        </div>
                        <button class="feedback__submit btn-black btn-black_hover-white" data-role="form-submit">Оставить заявку</button>
                    </form>
                    <p class="feedback__policy">
                        Отправляя заявку, вы подтверждаете свое согласие на
                        <a href="#">обработку персональных данных.</a>
                        Ваши контактные данные в безопасности и не будут переданы третьим лицам
                    </p>
                </div>
                <picture class="feedback__picture">
                    <img src="<?php echo $GLOBALS["STATIC_IMG_PATH"]?>/feedback/feedback.jpg" alt="" class="feedback__image">
                </picture>
            </div>
        </div>
    </div>
</section>
