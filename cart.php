<?php include "includes/header.php";?>

<div class="row">
	<div class="col-lg-12 cart">
		<div class="row cart-section">
			<div class="col-xs-12">
				<div class="cart-section-header cart-section-header-first">
					<div class="cart-section-title pull-left">Ваш заказ</div>
					<div class="clearfix"></div>					
				</div>	
				<div class="table-responsive">
					<table class="table table-condensed cart-items-list">
					    <thead>
					        <tr>
								<th></th>
								<th>Наименование товара</th>
								<th>Характеристики</th>
								<th>Количество</th>
								<th>Цена</th>
								<th>Сумма покупки</th>
								<th></th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
								<td class="item-img">
									<a href="">
										<img src="img/thumb/thumb-1.jpg" alt="">
									</a>
								</td>
								<td class="item-name">
									<span class="item-name-title">Кольцо обручальное из желтого золота</span><br/>
									<span class="item-name-article">Артикул: 138103045</span>
								</td>
								<td class="item-characters">Размер 18,5</td>
								<td class="item-count">
									<nobr>
										<i class="fa fa-minus" aria-hidden="true" id="input-count-minus"></i>
										<input type="text" class="input-count" id="input-count" value="1">
										<i class="fa fa-plus" aria-hidden="true" id="input-count-plus"></i>
									</nobr>
								</td>
								<td class="item-price">3565</td>
								<td class="item-total-price">3565</td>
								<td class="item-delete-product">
									<i class="fa fa-trash-o" aria-hidden="true"></i>
								</td>
					        </tr>
					    </tbody>
					</table>
				</div>			
			</div>
		</div>	
		<div class="row cart-section">
			<div class="col-xs-12">
				<div class="cart-section-header">
					<div class="cart-section-num pull-left">1</div>
					<div class="cart-section-title pull-left">Адрес</div>
					<div class="clearfix"></div>
				</div>				
			</div>
			<div class="col-xs-12">
				<div class="form-group">
					<label for="inputText">Адрес доставки <span class="requared-text">*</span></label>
					<input type="text" class="form-control" id="inputText" placeholder="Введите Ваш адрес">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="inputText">Город <span class="requared-text">*</span></label>
					<input type="text" class="form-control" id="inputText" placeholder="Введите город доставки">
				</div>				
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="inputText">Индекс <span class="requared-text">*</span></label>
					<input type="text" class="form-control" id="inputText" placeholder="Введите почтовый индекс">
				</div>
			</div>
		</div>
		<div class="row cart-section">
			<div class="col-xs-12">
				<div class="cart-section-header">
					<div class="cart-section-num pull-left">2</div>
					<div class="cart-section-title pull-left">Контакты</div>
					<div class="clearfix"></div>
				</div>				
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="inputText">Фамилия <span class="requared-text">*</span></label>
					<input type="text" class="form-control" id="inputText" placeholder="Введите Вашу Фамилию">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="inputText">Имя <span class="requared-text">*</span></label>
					<input type="text" class="form-control" id="inputText" placeholder="Введите Ваше Имя">
				</div>				
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="inputText">Отчество <span class="requared-text">*</span></label>
					<input type="text" class="form-control" id="inputText" placeholder="Введите Ваше Отчество">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="inputTel">Телефон<span class="requared-text">*</span></label>
					<input type="tel" class="form-control" id="inputTel" placeholder="Введите город доставки">
				</div>				
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="inputEmail">E-mail <span class="requared-text">*</span></label>
					<input type="email" class="form-control" id="inputEmail" placeholder="Введите email">
				</div>
			</div>
		</div>
		<div class="row cart-section">
			<div class="col-xs-12">
				<div class="cart-section-header">
					<div class="cart-section-num pull-left">3</div>
					<div class="cart-section-title pull-left">Способы доставки</div>
					<div class="clearfix"></div>
				</div>				
			</div>
			<div class="col-xs-12">
				<div class="form-group">
					<div class="checkbox">
						<label><input type="checkbox" checked="checked" id="inputDelivery"> ФГУП "Главный центр специальной связи"</label>
						<p class="help-block">Доставка наземным и/или воздушным транспортом в оптимальные сроки.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row cart-section">
			<div class="col-xs-12">
				<div class="cart-section-header">
					<div class="cart-section-num pull-left">4</div>
					<div class="cart-section-title pull-left">Способы оплаты</div>
					<div class="clearfix"></div>
				</div>				
			</div>
			<div class="col-xs-12">
				<div class="form-group">
					<div class="checkbox">
						<label><input type="checkbox" checked="checked" id="inputPay"> Оплата наличными</label>
						<p class="help-block">Оплата наличными курьеру при получении заказа или при самовывозе</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row cart-section">
			<div class="col-xs-12">
				<div class="cart-section-header">
					<div class="cart-section-num pull-left">5</div>
					<div class="cart-section-title pull-left">Комментарии к заказу</div>
					<div class="clearfix"></div>
				</div>				
			</div>
			<div class="col-xs-12">
				<div class="comment form-group">
					<textarea name="comment" class="form-control" placeholder="Дополнительная информация, которую Вы хотели бы сообщить нам"></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="total">
					<div class="total-delivery">Доставка:<span class="pull-right">560 р</span></div>
					<div class="total-cost">Общая стоимость:<span class="pull-right">1 080 р</div>
				</div>
				<div class="form-group additional-fields">
					<div class="checkbox">
						<label><input type="checkbox" checked="checked"> C товаром ознакомлен(а)</label><br/>
						<label><input type="checkbox" checked="checked"> <a href="#">Публичная оферта</a></label>
					</div>
				</div>
			</div>
		</div>
		<div class="submit-btn-wrap">
			<button type="submit" class="btn btn-pink-box pull-right">Оформить заказ</button>
		</div>
	</div>
</div>		

<?php include "includes/footer.php";?>
