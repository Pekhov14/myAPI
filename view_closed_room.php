<?php
	require_once __DIR__  . '/Classes/Content.php';

	$title = new Content;
	$out_title = $title->get_title('Панель администратора');
	require_once __DIR__  . '/Views/view_head.php';
	require_once __DIR__  . '/Views/view_heder_nav.php';
?>

<div class="container">
	<br>
	<h4>Ваш токен: </h4>
	<div class="alert alert-success" role="alert">
		<?php echo $_SESSION['token']; ?>
	</div>
</div>

<?php require_once __DIR__  . '/Views/view_footer.php'?>