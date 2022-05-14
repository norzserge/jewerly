<?php include "includes/header.php";?>
<div class="row hidden-xs">
	<div class="col-lg-12">
		<?php include "includes/catalog-menu-top.php";?>
		<hr style="margin: 0;">
	</div>
</div>
<div class="row product-card">
	<div class="col-sm-7 left-col">
		<div class="back-to">
			<a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> назад в категорию</a>
		</div>
		<div class="product-img">
			<div class="product-img-full">
				<img src="img/large/large-1.jpg" alt="" class="img-responsive">
			</div>
			<div class="product-img-small">
				<ul class="thumbnail-list list-inline text-center">
					<li class="thumbnail-item"><a href="img/large/large-1.jpg" class="thumbnail-link"><img src="img/thumb/thumb-1.jpg" alt="" class="thumbnail-img"></a></li>
					<li class="thumbnail-item"><a href="img/large/large-2.jpg" class="thumbnail-link"><img src="img/thumb/thumb-2.jpg" alt="" class="thumbnail-img"></a></li>
					<li class="thumbnail-item"><a href="img/large/large-3.jpg" class="thumbnail-link"><img src="img/thumb/thumb-3.jpg" alt="" class="thumbnail-img"></a></li>
					<li class="thumbnail-item"><a href="img/large/large-4.jpg" class="thumbnail-link"><img src="img/thumb/thumb-4.jpg" alt="" class="thumbnail-img"></a></li>
				</ul>
			</div>			
		</div>
	</div>
	<div class="col-sm-5 right-col">
		<p class="product-article help-block">артикул: 138103045</p>
		<h1 class="product-title">Кольцо обручальное из желтого золота</h1>
		<div class="row">
			<div class="col-xs-6">
				<table class="product-size-total">
					<thead>
						<tr>
							<td>Размер:</td>
							<td>Количество:</td>
						</tr>				
					</thead>
					<tr>
						<td>
					    	<select name="" id="">
								<option value="">16</option>
								<option value="">16,5</option>
								<option value="">17</option>
								<option value="">17,5</option>
								<option value="">18</option>
								<option value="">18,5</option>
								<option value="">19</option>
								<option value="">19,5</option>
								<option value="">20</option>
								<option value="">20,5</option>
								<option value="">21</option>
							</select>
						</td>
						<td><input type="text" name="total" size="3" value="1"></td>
					</tr>
				</table>
			</div>
			<div class="col-xs-6">
				<table class="more-info-link">
					<tr>
						<td><i class="fa fa-map-marker" aria-hidden="true"></i></td>
						<td><a href="">Где купить?</a></td>
					</tr>
					<tr>
						<td><i class="fa fa-comment-o" aria-hidden="true"></i></td>
						<td><a href="#reviews-title">Отзывы о товаре</a></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="cost">37 895 р</div>
		<button class="btn-pink-box btn">В КОРЗИНУ</button>
		<div class="border-bottom"></div>
		<h4>Характеристики</h4>
		<table class="product-description">
			<tr>
				<td>Металл:</td>
				<td>Комбинированное золото</td>
			</tr>
			<tr>
				<td>Проба:</td>
				<td>585</td>
			</tr>
			<tr>
				<td>Вес:</td>
				<td>2.8 гр</td>
			</tr>
			<tr>
				<td>Вставка:</td>
				<td>Бриллиант - 1 шт., 0.167 карат, чистота 4/5, 57 граней, огранка круглая</td>
			</tr>
			<tr>
				<td>Страна производства:</td>
				<td>Россия</td>
			</tr>
		</table>
		<h4 class="description-title">Описание</h4>
		<div class="description">
			<p>Безусловным трендом ювелирной моды является тройное кольцо «Trinity», изготовленное из белого, жёлтого и красного золота.  Дизайн украшения предполагает, что  декоративные части меняют расположение, благодаря чему изделие каждый раз смотрится по-новому оригинально.</p>
			<?php
				/*
					данный блок должен выводится только для физических лиц, точнее для незарегистрированного пользователя
				*/ 
				include "includes/pay-delivery-info.php";
			?>			
		</div>
		<div class="border-bottom"></div>
		<div class="social">
			<span class="share-text">Поделиться:</span>
			<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
			<script src="//yastatic.net/share2/share.js"></script>
			<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus,twitter"></div>
		</div>
	</div>
</div>
<div class="row additional-block">
	<div class="col-sm-7">
		<div class="other-goods">
			<h2>C этим изделием покупают</h2>
			<div class="row">
				<div class="col-xs-12 catalog-grid">
					<ul class="catalog-list row list-unstyled">
						<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
							<div class="catalog-item">
								<div class="catalog-item-img"><img src="img/good-1.png" alt="" class="img-responsive"></div>
								<div class="catalog-item-name"><a href="">Кольцо в виде короны из золота с фианитами</a></div>
								<div class="catalog-item-price">35 050 р</div>
								<div class="catalog-item-btn"><button class="btn btn-pink-box" onclick="javascript:PopUpShow()">Быстрый просмотр</button></div>
							</div>
						</li>
						<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
							<div class="catalog-item">
								<div class="catalog-item-img"><img src="img/good-2.png" alt="" class="img-responsive"></div>
								<div class="catalog-item-name"><a href="">Серьги из красного золота со Swarovski Zirconia</a></div>
								<div class="catalog-item-price">18 000 р</div>
								<div class="catalog-item-btn"><button style="overflow-wrap: break-word;" class="btn btn-pink-box" onclick="javascript:PopUpShow()">Быстрый просмотр</button></div>
							</div>
						</li>
						<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
							<div class="catalog-item">
								<div class="catalog-item-img"><img src="img/good-3.png" alt="" class="img-responsive"></div>
								<div class="catalog-item-name"><a href="">Кольцо из золота с бриллиантами</a></div>
								<div class="catalog-item-price">21 700 р</div>
								<div class="catalog-item-btn"><button class="btn btn-pink-box" onclick="javascript:PopUpShow()">Быстрый просмотр</button></div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="banner-discount">
			<a href="#"><img src="img/banner.png" alt="" class="img-responsive"></a>
		</div>		
	</div>
	<div class="col-sm-5">
		<div class="reviews-wrap">
			<h2 id="reviews-title">Отзывы от товаре</h2>
			<div class="reviews">
				<div class="review">
					<div class="review-name">
						Кристина <span class="review-date">15 ноября 2016 г. 15:53</span>
					</div>
					<div class="review-text">
						<p>Товар пришел буквально через неделю. Чуть не ежедневно приходил смс отчет о его местоположении. Качественная упаковка, товар соответствует описанию. С магазином приятно работать.</p>
					</div>
				</div>
				<div class="review">
					<div class="review-name">
						Светлана <span class="review-date">1 февраля 2015 г. 10:53</span>
					</div>
					<div class="review-text">
						<p>Все пришло в целости и сохранности! Я ооочень довольна!! Буду теперь фандомные штучки у вас заказывать ахахах. Спасибо! ((:</p>
					</div>
				</div>				
			</div>
			<div class="add-review">
				<h3>Оставить отзыв</h3>
				<form action="" class="review-form">
					<div class="name-input">
						<input type="text" name="name" placeholder="Имя" />
					</div>
					<div class="mail-input">
						<input type="email" name="mail" placeholder="Эл. почта" />
					</div>
					<div class="comment-input">
						<textarea name="comment" cols="40" rows="3" placeholder="Комментарий"></textarea>
					</div>
					<div class="submit-input">
						<input type="submit" value="Отправить" class="btn btn-gray">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>		

<?php include "includes/footer.php";?>
