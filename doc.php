<?php
    session_start();

	require_once __DIR__  . '/Classes/Content.php';

	$title = new Content;
	$out_title = $title->get_title('Документация');
	require_once __DIR__  . '/Views/view_head.php';
	require_once __DIR__  . '/Views/view_heder_nav.php';
?>
<div class="container">
	<ol>
		<li>Зарегестрируйтесь</li>
		<li>Авторизуйтесь</li>
		<li>Готово)</li>
	</ol>
	<p>Пример get запроса</p>
	<div class="alert alert-primary" role="alert">
		http://api.loc/api.php?token=YOUR_TOKEN
	</div>
	<p>Токен будут доступен после регистрации</p>
</div>

<?php require_once __DIR__  . '/Views/view_footer.php'?>
