<section class="cap" id="cap">
    <picture class="cap__picture">
        <img src="<?php echo $GLOBALS["STATIC_IMG_PATH"]?>/cap_car.png" alt="" class="cap__image">
    </picture>
    <div class="container">
        <div class="cap__top">
            <div class="cap__box">
                <h1 class="cap__title title"><?php echo get_field('cap')['title'] ?></h1>
                <span class="cap__note"><?php echo get_field('cap')['note'] ?></span>
                <a href="#modal-registration" class="cap__registration btn-black btn-black_hover-white" data-fancybox>Запись на сервис</a>
            </div>
            <div class="cap__rate">
                <div class="cap__rate-top">
                    <div class="cap__rate-icon">
                        <svg class="image">
                            <use xlink:href="#yandex"></use>
                        </svg>
                    </div>
                    <div class="cap__rate-value">5.0</div>
                    <div class="cap__rate-star">
                        <svg class="image">
                            <use xlink:href="#star"></use>
                        </svg>
                    </div>
                </div>
                <span class="cap__rate-text">Рейтинг сервиса по мнению пользователей Яндекс.Карт</span>
            </div>
        </div>
        <ul class="cap__list">
            <?php $cap_list = [
                    [ 'name' => '14 лет', 'value' => 'успешной работы автосервиса' ],
                    [ 'name' => '58 тыс.', 'value' => 'литров замененного моторного масла' ],
                    [ 'name' => '6594', 'value' => 'довольных нашим сервисом автовладельцев' ],
                    [ 'name' => '19 тыс.', 'value' => 'замененных автозапчастей' ],
            ] ?>
            <?php foreach ($cap_list as $key => $item): ?>
                <li class="cap__item">
                    <div class="cap__item-name"><?php echo $item['name'] ?></div>
                    <div class="cap__item-value"><?php echo $item['value'] ?></div>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</section>