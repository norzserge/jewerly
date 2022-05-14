// popup быстрого просмотра
	function PopUpShow(){
	    $("#popup1").fadeIn();
	    $(".popup-content-wrap").fadeIn();
		var largeImgHeight = $(".product-img-large img").height();
		$(".product-img-large").css('height', largeImgHeight);

		// устанавливаем координаты popup-окна относительно верхней границы экрана
		var screenCoordTop = $(window).scrollTop();
		$(".popup-content-wrap").css('top', screenCoordTop + 30);
	}
	function PopUpHide(){
	    $("#popup1").fadeOut();
	    $(".popup-content-wrap").fadeOut();
	}

$(document).ready(function() {
	
// инициализация слайдера на главной
    $('.carousel').carousel();

// кастомизация checkbox в расширенном поиске в каталоге
	$('.search-category-checkbox').click(function(){
		if ($(this).prop('checked') == true) {
			$(this).prev('label').addClass('active');
		} else {
			$(this).prev('label').removeClass('active');
		}
	});

// раскрывающийся блок
	var flagFaIcon = false;
	$('.more-info').click(function(){
		$(this).next(".hidden-info").slideToggle('fast');
		if (flagFaIcon == false) {
			$(this).find('i').removeClass('rotate0').addClass('rotate180');
			flagFaIcon = true;
		} else {
			$(this).find('i').removeClass('rotate180').addClass('rotate0');
			flagFaIcon = false;
		}
	});	
// стилизация input file
	$('#file-field').bootstrapFileInput(); 

// фотогалерея в popup-окне
	$(window).resize(function() {
		largeImgHeight = $(".product-img-large img").height();
		console.log($(".product-img-large img").height());
		$(".product-img-large").css('height', largeImgHeight);
	});
	$(".thumbnail-list li a").click(function(){
		$(".product-img-large img").hide().attr({"src": $(this).attr("href"), "title": $("> img", this).attr("title")});
		return false;
	});
	$(".product-img-large>img").load(function(){
		$(".product-img-large>img:hidden").fadeIn("slow");
	});

// фотогалерея в карточке товара
	fullImgHeight = $(".product-img-full img").height();
	$(".product-img-full").css('height', fullImgHeight);
	$(window).resize(function() {
		fullImgHeight = $(".product-img-full img").height();
		$(".product-img-full").css('height', fullImgHeight);
	});
	$(".thumbnail-list li a").click(function(){
		$(".product-img-full img").hide().attr({"src": $(this).attr("href"), "title": $("> img", this).attr("title")});
		return false;
	});
	$(".product-img-full>img").load(function(){
		$(".product-img-full>img:hidden").fadeIn("slow");
	});

// поле ввода количества товара в корзине заказов
	var inputCount = $('#input-count');
	var productPrice = parseInt($('.item-price').text());

	inputCount.bind("change keyup input click", function() {		// разрешаем вводить только цифры
	    if (this.value.match(/[^0-9]/g)) {
	        this.value = this.value.replace(/[^0-9]/g, '');
	    }
	});	
	$('#input-count-plus').click(function(){						// увеличение счетчика
		var counter = inputCount.val();
		inputCount.val(parseInt(counter) + 1);
		$('.item-total-price').text(productPrice * inputCount.val());
	});
	$('#input-count-minus').click(function(){						// уменьшение счетчика и проверка на 0 и минус
		var counter = inputCount.val();
		inputCount.val(parseInt(counter) - 1);
		$('.item-total-price').text(productPrice * inputCount.val());
		if (inputCount.val() < 1) {
			inputCount.val(1);
			$('.item-total-price').text(productPrice);
		}
	});
	inputCount.on('input',function () {
		$('.item-total-price').text(productPrice * inputCount.val());
		if (inputCount.val() < 1) {
			inputCount.val(1);
			$('.item-total-price').text(productPrice);
		}
	})

// выпающий поиск адресов по городам 

	var ul = $('.dropdown-search-box');
	var input = ul.find('input');
	var li = ul.find('li.result');

	input.keyup(function(){
	  var val = $(this).val();

	  if ( val.length > 1 ) {
	    li.hide();
	    li.filter(':contains("'+ val +'")').show();
	  } else {
	    li.show();
	  }
	});

// при клике на input в меню исключаем возможность его закрытия

	$(document).on(
	    'click.bs.dropdown.data-api', 
	    '.non-hide', // тут прописываем селектор, который добавляем к тем .dropdown-menu, которые не должна закрываться по клику на внутренних элементах
	    function (e) { e.stopPropagation() }
	);	

});
	