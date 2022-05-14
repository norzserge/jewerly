<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang=""> <!--<![endif]-->
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>Митра Ювелир</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="apple-touch-icon" href="apple-touch-icon.png">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/bootstrap-theme.min.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/media.css">
      <!--[if lt IE 9]>
          <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
      <![endif]-->
  </head>
  <body>
      <!--[if lt IE 8]>
          <p class="browserupgrade">Вы используете браузер <strong>старой</strong> версии. Пожалуйста <a href="http://browsehappy.com/">обновите свой браузер</a> для более полного ознакомления с сайтом.</p>
      <![endif]-->
<!-------------------------------- HEADER -------------------------------->
		<header>
			<div class="container">
				<div class="row header-top-block">
					<div class="col-lg-4 col-md-4 col-sm-4 header-phone">+7 (495) 964-96-81</div>
					<div class="col-lg-4 col-md-4 col-sm-4 text-center header-logo"><img src="img/logo.png" alt=""></div>
					<div class="col-lg-4 col-md-4 col-sm-4 text-right header-auth">
						<div class="language-toggle">
							<ul class="language-toggle-list">
								<li class="language-toggle-item">
									<a href="" class="language-toggle-link active">ru</a>
								</li>
								<li class="language-toggle-item language-item-slash">/</li>
								<li class="language-toggle-item">
									<a href="" class="language-toggle-link">en</a>
								</li>
							</ul>
						</div>
						<div class="auth-link">
							<a href=""><i class="fa fa-lock" aria-hidden="true"></i> Вход для партнеров</a>
						</div>
						<div class="cart-link-wrap">
							<a href="" class="cart-link">корзина</a> <span class="cart-counter">12</span>
						</div>
					</div>
				</div>
			</div>
	    <nav class="navbar navbar-inverse" role="navigation">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
					  <ul class="nav navbar-nav">
					    <li class="active"><a href="#">Главная</a></li>
						<li class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">
							  О нас
							  <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="#">О бренде</a></li>
							  <li><a href="#">Преимущества</a></li>
							  <li><a href="#">Контакты</a></li>
							</ul>
						</li>
					    <li><a href="#">Каталог</a></li>
						<li class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">
							  Партнерам
							  <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="#">Регистрация</a></li>
							  <li><a href="#">Реквизиты</a></li>
							  <li><a href="#">Акции</a></li>
							  <li><a href="#">Выставки</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">
							  Блог
							  <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="#">Др. камни</a></li>
							  <li><a href="#">Др. металлы</a></li>
							  <li><a href="#">Мода и стиль</a></li>
							</ul>
						</li>
					    <li class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">
							  Где купить
							  <b class="caret"></b>
							</a>
							<ul class="dropdown-menu bullet dropdown-menu-right dropdown-search-box" aria-labelledby="exampleBulletDropdown2" role="menu">
								<li role="presentation"><input type="text" class="form-control non-hide" placeholder="Введите город" value="" name="search" /></li>
								<li role="presentation" class="result"><a href="javascript:void(0)" role="menuitem">Санкт-Петербург</a></li>
								<li role="presentation" class="result"><a href="javascript:void(0)" role="menuitem">Москва</a></li>
								<li role="presentation" class="result"><a href="javascript:void(0)" role="menuitem">Самара</a></li>
								<li role="presentation" class="result"><a href="javascript:void(0)" role="menuitem">Красноярск</a></li>
							</ul>
					    </li>
					  </ul>
			      <form class="navbar-form navbar-right menu-search-wrap" role="search">
			        <div class="form-group">
			          <input type="text" class="form-control menu-search" placeholder="&#128269; Поиск">
			        </div>
			        <!-- <button type="submit" class="btn btn-default"></button> -->
			      </form>
	        </div><!--/.navbar-collapse -->
	      </div>
	    </nav>
		</header>
		<?php  
			// проверка на главную (вывод слайдера), добавить /mitra/ в url проверки для отображения слайдера на denwer
			if($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' || $_SERVER['REQUEST_URI'] == '/index.html') {
				include "includes/slider.php";
			}
		?>
<!-------------------------------- CONTENT -------------------------------->
		<!-- goods preview popup -->
	    <div class="container popup-content-wrap">
	    	<div class="row">
	    		<div class="col-sm-offset-1 col-sm-10 col-xs-12 popup-content">
	    			<?php include "includes/popup-content.php";?>
    			</div>	    			
	    	</div>
	    </div>
		<div class="popup" id="popup1"></div>
		<!-- / goods preview popup -->
		<div class="content-wrap">
			<div class="container">