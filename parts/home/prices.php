<section class="prices">
    <div class="container">
        <div class="prices__wrap">
            <h2 class="prices__title title">Цены на популярные услуги по ремонту Geely</h2>
            <div class="prices__area">
                <div class="prices__box">
                    <table class="prices__table">
                        <tr>
                            <th>Виды работ</th>
                            <th>Цена у нас</th>
                            <th>Цена <span class="prices__desc-view">сервисов (неофициальных)</span>
                                <span class="prices__mob-view">др. сервисов</span>
                            </th>
                        </tr>
                        <tr>
                            <td>Диагностика</td>
                            <td>
                                <span class="prices__td-black">Бесплатно</span>
                            </td>
                            <td>от 1 000 ₽</td>
                        </tr>
                        <?php $prices_list = get_posts( array(
                            'category_name' => 'table_services',
                            'numberposts' => 20,
                            ) ); ?>
                        <?php foreach ($prices_list as $key => $item): ?>
                            <?php $service = get_field('service', $item->ID) ?>
                            <tr>
                                <td><?php echo $service['name'] ?></td>
                                <td><?php echo $service['price_our'] ?></td>
                                <td><?php echo $service['price_other'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </table>
                    <a href="#modal-registration" class="prices__button btn-black btn-black_hover-blue" data-fancybox>
                        Рассчитать цену на ремонт
                    </a>
                </div>
                <div class="prices__sidebar">
                    <div class="prices__sidebar-icon">
                        <svg class="image">
                            <use xlink:href="#prices-sidebar-icon"></use>
                        </svg>
                    </div>
                    <img src="<?php echo $GLOBALS["STATIC_IMG_PATH"]?>/prices-sidebar.jpg" alt="" class="prices__sidebar-image">
                    <div class="prices__sidebar-inner">
                        <div class="prices__sidebar-title">Бесплатная диагностика</div>
                        <div class="prices__sidebar-text">Оставьте заявку, и мы поможем по&nbsp;любому вопросу с вашим Geely.</div>
                    </div>
                    <a href="#modal-registration" class="prices__sidebar-button btn-white" data-fancybox>Запись на сервис</a>
                </div>
            </div>
        </div>
    </div>
</section>
