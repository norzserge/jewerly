<?php include "includes/header.php";?>

<div class="row auth">
	<div class="col-xs-12">
		<h1 class="text-center">Вход в личный кабинет</h1>
		<div class="col-sm-6 col-sm-offset-3">
			<form class="form-auth">
				<div class="form-group">
					<input type="text" class="form-control" id="inputEmail" placeholder="Введите логин">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="inputPassword" placeholder="Введите пароль">
				</div>
				<div class="checkbox">
					<button type="submit" class="btn btn-black-box" style="margin-right: 30px;">Войти</button> <label><input type="checkbox"> Запомнить</label>
				</div>
			</form>
			<p class="help-block">Для входа в личный кабинет необходимо <a href="">зарегистрироваться</a> на сайте или выполнить вход под своей учетной записью.</p>
			<p class="help-block">Вы можете <a href="">восстановить пароль</a>, если по каким-либо причинам он был утерян или вы его забыли.</p>
		</div>
	</div>
</div>		

<?php include "includes/footer.php";?>
