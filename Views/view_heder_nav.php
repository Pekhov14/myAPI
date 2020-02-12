<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">Films API</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarText">
		<ul class="navbar-nav mr-auto">
			<?php if (!isset($_SESSION['user_name'])): ?>
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Регистрация</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="login.php">Вход</a>
				</li>
			<?php endif; ?>
			<li class="nav-item">
				<a class="nav-link" href="doc.php">Документация</a>
			</li>
			<?php
			if (isset($_SESSION['user_name'])): ?>
				<li class="nav-item">
					<a class="nav-link" href="closed_room.php">Админ панель</a>
				</li>
				<li class="nav-item">
					<a class="nav-link btn btn-outline-danger" href="out.php">Выйти</a>
				</li>
			<?php endif; ?>
		</ul>
		<span class="navbar-text">
      <?php echo $_SESSION['user_name']; ?> добро пожаловать)
    </span>
	</div>
</nav>