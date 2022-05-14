<?php include "includes/header.php";?>

<div class="row registration">
	<div class="col-xs-12">
		<h1 class="text-center">Регистрация</h1>
		<div class="steps text-center">
			<ul class="steps-list list-unstyled">
				<li><span class="badge badge-active">1</span></li>
				<li><span class="badge badge-active">2</span></li>
				<li><span class="badge badge-current">3</span></li>
				<li><span class="badge">4</span></li>
			</ul>
		</div>
		<p class="text-center step-question">Шаг 3. Заполните форму регистрации:</p>
		<form action="" class="form-regist-1">
			<div class="row">
				<div class="col-sm-5 col-sm-offset-1">
					<input type="text" id="input-name" class="form-control" placeholder="Ваше Имя">
				</div>
				<div class="col-sm-5">
					<input type="text" id="input-contact-name" class="form-control" placeholder="Контактное лицо">
				</div>
				<div class="col-sm-5 col-sm-offset-1">
					<input type="text" id="inpu-middlename" class="form-control" placeholder="Ваше Отчество">
				</div>
				<div class="col-sm-5">
					<input type="mail" id="input-mail" class="form-control" placeholder="Ваш email">				
				</div>
				<div class="col-sm-5 col-sm-offset-1">
					<input type="text" id="input-surname" class="form-control" placeholder="Ваша Фамилия">	
				</div>
				<div class="col-sm-5">
					<input type="phone" id="input-phone" class="form-control" placeholder="Телефон">
				</div>
			</div>
			<br/>
			<br/>
			<p class="text-center step-question">Откуда вы о нас узнали?</p>
			<div class="row">
				<div class="col-sm-5 col-sm-offset-1">
					<div class="radio">
						<label><input type="radio" name="optradio">Не указано</label>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="radio">
						<label><input type="radio" name="optradio">Через поисковые системы</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-5 col-sm-offset-1">
					<div class="radio">
						<label><input type="radio" name="optradio">От ваших оптовых представителей</label>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="radio">
						<label><input type="radio" name="optradio">По рекомендации ваших покупателей</label>
					</div>		
				</div>				
			</div>
			<div class="row">
				<div class="col-sm-5 col-sm-offset-1">
					<div class="radio">
						<label><input type="radio" name="optradio">По рекомендации экспертов</label>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="radio">
						<label><input type="radio" name="optradio">Реклама</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="radio">
						<label><input type="radio" name="optradio">Выставка</label>
					</div>
					<input type="text" id="input-info" class="form-control" placeholder="Название выставки (если возможно)">
				</div>
				<div class="col-sm-4 col-sm-offset-1">
					<div class="radio">
						<label><input type="radio" name="optradio">Ваш вариант</label>
					</div>
					<input type="text" id="input-info" class="form-control" placeholder="Укажите ваш вариант">
				</div>
			</div>
			<p class="text-center help-block"><i class="fa fa-exclamation-circle pink" aria-hidden="true"></i> <i>Данный вопрос не обязателен к заполнению</i></p>
			<br/>
			<br/>
			<div class="text-center">
				<button type="submit" class="btn btn-black-box">Продолжить</button>
			</div>
		</form>
	</div>
</div>		

<?php include "includes/footer.php";?>
