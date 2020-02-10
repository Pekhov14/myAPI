<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<?php echo 'Привет '.$_SESSION['user_name'].'!'; ?>
	<p>Ваш токен: <?php echo $_SESSION['token']; ?></p>

	<p><a href="out.php">Выйти</a></p>
</body>
</html>