<?php

global $SETTINGS_PAGE_ID;
$SETTINGS_PAGE_ID = 14;

global $STATIC_IMG_PATH;
$STATIC_IMG_PATH = esc_url(get_template_directory_uri()) . '/assets/img';

global $MENU;
$MENU = [
    [ 'text' => 'Услуги и цены', 'link' => 'services' ],
    [ 'text' => 'Почему мы', 'link' => 'why-we' ],
    [ 'text' => 'Отзывы', 'link' => 'reviews' ],
    [ 'text' => 'О сервисе', 'link' => 'about' ],
    [ 'text' => 'Контакты', 'link' => 'contacts' ],
];

global $API_URL;
$API_URL = '/wp-admin/admin-ajax.php';