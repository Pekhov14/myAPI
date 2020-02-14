<section class="text-center" style="max-width: 400px; margin: 0 auto;">
	<h1>Вход</h1>
	<form action="login_handler.php" method="post">
		<div class="form-group">
			<label for="exampleInputName">Имя</label>
			<input type="text" class="form-control"  name="name" id="exampleInputName" aria-describedby="emailHelp" >
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Пароль</label>
			<input type="password" class="form-control" name="password" id="exampleInputPassword1" >
		</div>
		<button type="submit" class="btn btn-primary">Войти</button>
	</form>
</section>