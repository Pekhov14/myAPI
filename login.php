<?php

    require_once 'classes/Content.php';

    $title = new Content;
    $out_title = $title->get_title('Вход');

    require_once 'Views/view_head.php';
    require_once 'Views/view_heder_nav.php';

    require_once 'Views/view_entrance.php';

    require_once 'Views/view_footer.php';
?>