<?php
    require_once  __DIR__  . '/classes/Content.php';

    $title = new Content;
    $out_title = $title->get_title('Регистрация');
    require_once __DIR__ . '/Views/view_head.php';
    require_once __DIR__ . '/Views/view_heder_nav.php';
?>
<div class="container">
    <section class="jumbotron text-center">
        <div class="container">
            <h1>Films API</h1>
            <p class="lead text-muted">Это отбор лучших фильмов с оценками. Мы заботимся о вашем времени,
            смотрите хорошее кино.</p>
        </div>
    </section>

    <?php require_once __DIR__ . '/Views/view_register.php'; ?>
</div>

<?php require_once __DIR__ . '/Views/view_footer.php'?>