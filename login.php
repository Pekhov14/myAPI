<?php

    require_once __DIR__  . '/Classes/Content.php';

    $title = new Content;
    $out_title = $title->get_title('Вход');

    require_once __DIR__  . '/Views/view_head.php';
    require_once __DIR__  . '/Views/view_heder_nav.php';

    require_once __DIR__  . '/Views/view_entrance.php';

    require_once __DIR__  . '/Views/view_footer.php';
?>