<?php include "includes/header.php";?>

<div class="row registration">
	<div class="col-xs-12">
		<h1 class="text-center">Регистрация</h1>
		<div class="steps text-center">
			<ul class="steps-list list-unstyled">
				<li><span class="badge badge-active">1</span></li>
				<li><span class="badge badge-active">2</span></li>
				<li><span class="badge badge-active">3</span></li>
				<li><span class="badge badge-current">4</span></li>
			</ul>
		</div>
		<p class="text-center step-question">Шаг 4. Документы</p>
		<p class="help-block text-center"><i>Отправьте нам на почтовый ящик <a href="mailto:info@mitra.ru">info@mitra.ru</a>, либо прикрепите документы, подтверждающие ваше право заниматься реализацией ювелирных изделий.</i></p>
		<br/>
		<br/>
		<div class="reg-document">
			<div class="col-sm-6">
				<ul class="list-unstyled document-list">
					<li>Свидетельство о государственной регистрации (первоначальный документ)</li>
					<li>Свидетельство о постановке на учет в налоговом органе (ИНН)</li>
					<li>Свидетельство (уведомление) о постановке на специальный учет в Государственной инспекции пробирного надзора</li>
					<li>Карта постановки на специальный учет</li>
					<li>Письмо Росстата о присвоении кодов статистики</li>
					<li>Копия паспорта руководителя (для и ИП и для юридических лиц)</li>
				</ul>
			</div>
			<div class="col-sm-6">
				<ul class="list-unstyled document-list">
					<li>Паспортные данные учредителей (включая дату и место рождения, адрес регистрации)</li>
					<li>Выписка из ЕГРЮЛ</li>
					<li>Приказ о назначении директора для юридических лиц</li>
					<li>Выписка из Устава в части определения структуры, порядка назначения, полномочий исполнительного органа для юрилических лиц</li>
					<li>Информационное письмо с банковскими реквизитами, юридическим и фактическим адресом, контактными телефонами</li>
					<li>Информационное письмо о применяемых системах налогооблажения в Вашей организации</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<form>
			<div class="file-attach text-center">
				<div class="input-file-wrap">
					<input type="file" name="file" id="file-field" multiple="true" title="Выбрать файл" >
				</div>
				<p class="text-center help-block"><i class="fa fa-exclamation-circle pink" aria-hidden="true"></i> <i>размер одного файла не должен превышать 10Мб</i></p>
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-black-box">Зарегистрироваться</button>
			</div>
		</form>
	</div>
</div>		

<?php include "includes/footer.php";?>
