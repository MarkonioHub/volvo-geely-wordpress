<section class="why-we" id="why-we" data-role="anchor-section">
    <div class="container">
        <div class="why-we__wrap">
            <div class="why-we__box">
                <div class="why-we__note">Почему мы</div>
                <h2 class="why-we__title title">Мы знаем всё о&nbsp;Volvo и Geely</h2>
                <p class="why-we__text">Нас объединяет одно — самые теплые чувства к автомобилям этих марок.</p>
            </div>
            <div class="why-we__area">
                <ul class="why-we__list">
                    <?php $why_we_list = [
                        [
                            'headline' => 'Лучшие цены в Москве', 'icon' => 'why-we-icon-1',
                            'description' => 'Добились этого благодаря снижению всех накладных расходов'
                        ],
                        [
                            'headline' => 'Соблюдаем сроки', 'icon' => 'why-we-icon-2',
                            'description' => 'Мы строго соблюдаем сроки работ при ремонте вашего автомобиля Geely в ЗАО, иначе мы выплатим неустойку'
                        ],
                        [
                            'headline' => 'Лучшие специалисты', 'icon' => 'why-we-icon-3',
                            'description' => 'Все наши сотрудники имеют соответствующие сертификаты от официального дилера Geely'
                        ],
                        [
                            'headline' => 'Свой склад запчастей', 'icon' => 'why-we-icon-4',
                            'description' => 'У нас свой склад запчастей,  на которые официальный центр Geely в Москве дает гарантию сроком 1 год'
                        ],
                    ] ?>
                    <?php foreach ($why_we_list as $key => $item): ?>
                        <li class="why-we__item">
                            <div class="why-we__icon why-we__icon_<?php echo $key + 1 ?>">
                                <svg class="image">
                                    <use xlink:href="#<?php echo $item['icon'] ?>"></use>
                                </svg>
                            </div>
                            <div class="why-we__headline"><?php echo $item['headline'] ?></div>
                            <p class="why-we__description"><?php echo $item['description'] ?></p>
                        </li>
                    <?php endforeach ?>
                </ul>
                <div class="why-we__informer">
                    <div class="why-we__caption">Гарантия качества</div>
                    <span class="why-we__span">1 год</span>
                    <div class="why-we__informer-text">Мы даем клиентам 100% гарантию  на&nbsp;работы сроком на 1 год</div>
                    <img src="<?php echo $GLOBALS["STATIC_IMG_PATH"]?>/why-we/why-we-car.png" alt="" class="why-we__image">
                </div>
            </div>
        </div>
    </div>
</section>