<?php 
	if($_POST['send']){
		$name=$_POST['name'];
		$adr=$_POST['adr'];
		$tel=$_POST['tel'];
		$send1=mail("azarkin7@gmail.com", "Заказа с сайта", "<b>Имя</b>:$name <br><b>Адресс</b>:$adr <br><b>Телефон</b>: $tel <br><br><br>Разработка сайтов <a href='http://vk.com/nick.azarkin'>Азаркин Николай</a>", "Content-Type: text/html; charset=utf-8 "); 
		$send2=mail("kmaksimov69@gmail.com", "Заказа с сайта", "<b>Имя</b>:$name <br><b>Адресс</b>:$adr <br><b>Телефон</b>: $tel <br><br><br>Разработка сайтов <a href='http://vk.com/nick.azarkin'>Азаркин Николай</a>", "Content-Type: text/html; charset=utf-8 "); 
		if($send1 AND $send2) echo "<script>alert('Спасибо! С вамисвяжется наш консультант')</script>";
	}
	if($_POST['send1']){
		$name=$_POST['name'];
		$adr=$_POST['adr'];
		$tel=$_POST['tel'];
		$send1=mail("azarkin7@gmail.com", "Заказа с сайта", "<b>Имя</b>:$name <br><b>Адресс</b>:$adr <br><b>Телефон</b>: $tel <br>Модель: 1<br><br><br>Разработка сайтов <a href='http://vk.com/nick.azarkin'>Азаркин Николай</a>", "Content-Type: text/html; charset=utf-8 "); 
		$send2=mail("kmaksimov69@gmail.com", "Заказа с сайта", "<b>Имя</b>:$name <br><b>Адресс</b>:$adr <br><b>Телефон</b>: $tel <br>Модель: 1<br><br><br>Разработка сайтов <a href='http://vk.com/nick.azarkin'>Азаркин Николай</a>", "Content-Type: text/html; charset=utf-8 "); 
		if($send1 AND $send2) echo "<script>alert('Спасибо! С вамисвяжется наш консультант')</script>";
	}
	if($_POST['send2']){
		$name=$_POST['name'];
		$adr=$_POST['adr'];
		$tel=$_POST['tel'];
		$send1=mail("azarkin7@gmail.com", "Заказа с сайта", "<b>Имя</b>:$name <br><b>Адресс</b>:$adr <br><b>Телефон</b>: $tel <br>Модель: 2<br><br><br>Разработка сайтов <a href='http://vk.com/nick.azarkin'>Азаркин Николай</a>", "Content-Type: text/html; charset=utf-8 "); 
		$send2=mail("kmaksimov69@gmail.com", "Заказа с сайта", "<b>Имя</b>:$name <br><b>Адресс</b>:$adr <br><b>Телефон</b>: $tel <br>Модель: 2<br><br><br>Разработка сайтов <a href='http://vk.com/nick.azarkin'>Азаркин Николай</a>", "Content-Type: text/html; charset=utf-8 "); 
		if($send1 AND $send2) echo "<script>alert('Спасибо! С вамисвяжется наш консультант')</script>";
	}
	if($_POST['send3']){
		$name=$_POST['name'];
		$adr=$_POST['adr'];
		$tel=$_POST['tel'];
		$send1=mail("azarkin7@gmail.com", "Заказа с сайта", "<b>Имя</b>:$name <br><b>Адресс</b>:$adr <br><b>Телефон</b>: $tel <br>Модель: 3<br><br><br>Разработка сайтов <a href='http://vk.com/nick.azarkin'>Азаркин Николай</a>", "Content-Type: text/html; charset=utf-8 "); 
		$send2=mail("kmaksimov69@gmail.com", "Заказа с сайта", "<b>Имя</b>:$name <br><b>Адресс</b>:$adr <br><b>Телефон</b>: $tel <br>Модель: 3<br><br><br>Разработка сайтов <a href='http://vk.com/nick.azarkin'>Азаркин Николай</a>", "Content-Type: text/html; charset=utf-8 "); 
		if($send1 AND $send2) echo "<script>alert('Спасибо! С вамисвяжется наш консультант')</script>";
	}
	if($_POST['send4']){
		$name=$_POST['name'];
		$adr=$_POST['adr'];
		$tel=$_POST['tel'];
		$send1=mail("azarkin7@gmail.com", "Заказа с сайта", "<b>Имя</b>:$name <br><b>Адресс</b>:$adr <br><b>Телефон</b>: $tel <br>Модель: 4<br><br><br>Разработка сайтов <a href='http://vk.com/nick.azarkin'>Азаркин Николай</a>", "Content-Type: text/html; charset=utf-8 "); 
		$send2=mail("kmaksimov69@gmail.com", "Заказа с сайта", "<b>Имя</b>:$name <br><b>Адресс</b>:$adr <br><b>Телефон</b>: $tel <br>Модель: 4<br><br><br>Разработка сайтов <a href='http://vk.com/nick.azarkin'>Азаркин Николай</a>", "Content-Type: text/html; charset=utf-8 "); 
		if($send1 AND $send2) echo "<script>alert('Спасибо! С вамисвяжется наш консультант')</script>";
	}

?>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Продажа часов</title>
		<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>
<script>
window.onload = function() { // после загрузки страницы

	var scrollUp = document.getElementById('scrollup'); // найти элемент

	scrollUp.onmouseover = function() { // добавить прозрачность
		scrollUp.style.opacity=0.3;
		scrollUp.style.filter  = 'alpha(opacity=30)';
	};

	scrollUp.onmouseout = function() { //убрать прозрачность
		scrollUp.style.opacity = 0.5;
		scrollUp.style.filter  = 'alpha(opacity=50)';
	};

	scrollUp.onclick = function() { //обработка клика
		window.scrollTo(0,0);
	};

// show button

	window.onscroll = function () { // при скролле показывать и прятать блок
		if ( window.pageYOffset > 0 ) {
			scrollUp.style.display = 'block';
		} else {
			scrollUp.style.display = 'none';
		}
	};
};
</script>
<script language=JavaScript>
<!--
var message="";
///////////////////////////////////
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")
// --> 
</script>
<script type="text/javascript">
    document.ondragstart = noselect;
    // запрет на перетаскивание
    document.onselectstart = noselect;
    // запрет на выделение элементов страницы
    document.oncontextmenu = noselect;
    // запрет на выведение контекстного меню
    function noselect() {return false;}
</script>
<script>

// Функция для добавления обработчиков событий
function addHandler(object, event, handler, useCapture) {
if (object.addEventListener) {
object.addEventListener(event, handler, useCapture ? useCapture : false);
} else if (object.attachEvent) {
object.attachEvent('on' + event, handler);
} else alert("Add handler is not supported");
}

// Определяем браузеры
var ua = navigator.userAgent.toLowerCase();
var isIE = (ua.indexOf("msie") != -1 && ua.indexOf("opera") == -1);
var isGecko = (ua.indexOf("gecko") != -1);

// Добавляем обработчики
if (isIE) addHandler (document, "keydown", hotSave);
else addHandler (document, "keypress", hotSave);

function hotSave(evt) {
// Получаем объект event
evt = evt || window.event;
var key = evt.keyCode || evt.which;
// Определяем нажатие Ctrl+S
key = String.fromCharCode(key).toLowerCase() == "s";
if (evt.ctrlKey && key) {
// Блокируем появление диалога о сохранении
if(evt.preventDefault) evt.preventDefault();
evt.returnValue = false;
// Запускаем любую функцию, по желанию
clientFunction();
// Возвращаем фокус в окно
window.focus();
return false;
}
}
function clientFunction() {
// И тут что-то происходит...
}
</script>
<script language="JavaScript">
<!--
var message="Не копировать! Все права защищены!"; 
function click(e) {
if (document.all) {
if (event.button == 2) { alert(message);
return false;}}
if (document.layers) {
if (e.which == 3) {
alert(message);
return false;}}}
if (document.layers) {
document.captureEvents(Event.MOUSEDOWN);}
document.onmousedown=click;
// --> 
</script>
		<link rel="stylesheet" type="text/css" href="style.css" >
<link rel="stylesheet" type="text/css" href="highslide/highslide.css">
<script type="text/javascript" src="highslide/highslide.js"></script>
<script type="text/javascript">
hs.graphicsDir = 'highslide/graphics/';
hs.wrapperClassName = 'wide-border';
</script>

	</head>
	<body>
	<div id="menu">
		<div class="nav-wrp">
		<div class="wrap">
			<ul class="nav left">
				<li><a href="#win1" class="button button-green">Доставка</a></li>
				<li><a href="#win2" class="button button-green">Гарантии</a></li>
				<li><a href="#win3" class="button button-green">Вопросы и ответы</a></li>
				<li><a href="#win4" class="button button-green">Конфиденциальность данных</a></li>

			</ul>
			<div class="social right">
				<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="none" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir"></div>
			</div>
		</div>
	</div>
	</div>
		<div id="show1">
			<div id="logo">&nbsp;</div>
			
			<div id="leftr">Свяжитесь с нами
			<p>+7(499)990-18-25</p>
			<p>+7(499)991-18-25</p>
			
			</div>
			<div id="leftr2"><p>Более 1000 счастливых клиентов<br>Бесплатная доставка по Москве<br>Индивидуальный подход<br>ГАРАНТИЯ 1ГОД!</p></div>
				<div style='float:right;height:50px;width:50px;margin-top:350px;	margin-right:-300px;'>
<form id="form1" class="right order-form" method=POST>
				<h4>ОФОРМИТЕ ЗАЯВКУ<br />
				<span style='color:white'>и купите часы по суперцене!</span></h4>
								<input class="name fio" name="name" placeholder="Ваше имя" required>
				<input class="address addr" placeholder="Адрес доставки" name="adr" required>
								<input class="phone tel" name="tel" placeholder="Контактный телефон" required>
			<input type="submit" name="send" style='padding-right:30px;' value="Заказать сейчас">
			</form>
				</div>
		</div>
		<div id="show2">
				<p style='font-size:26px;text-align:center;font-family: Aaargh;font-weight:bold;color:#FF9900'><u>Новогодня ликвидация!</u></p>
		<table border='0' style='width:990px;margin:50px auto;text-align:center;'>
		<tr>
			<td style="font-size:18px;text-align:center;font-family: Aaargh;font-weight:bold;color:#FF9900">Осталось 15 шт.</td>
			<td style="font-size:18px;text-align:center;font-family: Aaargh;font-weight:bold;color:#FF9900">Осталось 15 шт.</td>
		</tr>
			<tr style='text-align:center;'>
				<td class='img'><a href="img/1-3.jpg" onclick="return hs.expand(this)"><img src="img/1-3.jpg" width='400' align='left'></a>
				<a href="img/1-1.jpg" onclick="return hs.expand(this)"><img src="img/1-1.jpg" width='80'></a><br>
				<a href="img/1-2.jpg" onclick="return hs.expand(this)"><img src="img/1-2.jpg" width='80'></a><br>
				</td>
				<td class='img'><a href="img/2-1.jpg" onclick="return hs.expand(this)"><img src="img/2-1.jpg" width='400' align='left'></a>
				<a href="img/2-2.jpg" onclick="return hs.expand(this)"><img src="img/2-2.jpg" width='80'></a><br>
				<a href="img/2-3.jpg" onclick="return hs.expand(this)"><img src="img/2-3.jpg" width='80'></a><br>
				</td>
			</tr>
			<tr style='text-align:center;color:#FF6633;font-weight:bold;text-shadow: white 1px 0px, white 1px 1px, white 0px 1px, white -1px 1px, white -1px 0px, white -1px -1px, white 0px -1px, white 1px -1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px;'>
				<td style='text-decoration:line-through;font-size:16pt;'>2000 р.</td>
				<td style='text-decoration:line-through;font-size:16pt;'>2000 р.</td>
			</tr>
			<tr>
				<td style='font-size:22pt;color:red;font-weight:bold;text-shadow: white 1px 0px, white 1px 1px, white 0px 1px, white -1px 1px, white -1px 0px, white -1px -1px, white 0px -1px, white 1px -1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px;'>1 999 р.</td>
				<td style='font-size:22pt;font-weight:bold;color:red;text-shadow: white 1px 0px, white 1px 1px, white 0px 1px, white -1px 1px, white -1px 0px, white -1px -1px, white 0px -1px, white 1px -1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px;'>1 999 р.</td>
			</tr>
			<tr>
				<td><a href="#win5"><img src="http://iphone5me.ru//i/buy_btn.png" width='150'></a></td>
				<td><a href="#win6"><img src="http://iphone5me.ru//i/buy_btn.png" width='150'></a></td>
			</tr>
		</table>
		</div>
		</div>
		<div id="show3">
						<p style='font-size:20px;text-align:center;font-family: Aaargh;color:#FF9900;font-weight:bold;'><u>Не участвуют в акции(подробности по телефону)</u></p>
		<table border='0' style='width:990px;margin:80px auto;text-align:center;'>
			<tr style='text-align:center;'>
				<td class='img'><a href="img/3-1.jpg" onclick="return hs.expand(this)"><img src="img/3-1.jpg" width='400' align='left'></a>
				<a href="img/3-2.jpg" onclick="return hs.expand(this)"><img src="img/3-2.jpg" width='80'></a><br>
				<a href="img/3-3.jpg" onclick="return hs.expand(this)"><img src="img/3-3.jpg" width='80'></a><br>
				</td>
				<td class='img'><a href="img/4-1.jpg" onclick="return hs.expand(this)"><img src="img/4-1.jpg" width='400' align='left'></a>
				<a href="img/4-2.jpg" onclick="return hs.expand(this)"><img src="img/4-2.jpg" width='80'></a><br>
				<a href="img/4-3.jpg" onclick="return hs.expand(this)"><img src="img/4-3.jpg" width='80'></a><br>
				</td>
			</tr>
			<tr style='text-align:center;color:#FF6633;font-weight:bold;text-shadow: white 1px 0px, white 1px 1px, white 0px 1px, white -1px 1px, white -1px 0px, white -1px -1px, white 0px -1px, white 1px -1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px;'>
				<td style='text-decoration:line-through;'>2000 р.</td>
				<td style='text-decoration:line-through'>2000 р.</td>
			</tr>
			<tr>
				<td style='font-size:22pt;color:red;font-weight:bold;text-shadow: white 1px 0px, white 1px 1px, white 0px 1px, white -1px 1px, white -1px 0px, white -1px -1px, white 0px -1px, white 1px -1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px;'>1 999 р.</td>
				<td style='font-size:22pt;font-weight:bold;color:red;text-shadow: white 1px 0px, white 1px 1px, white 0px 1px, white -1px 1px, white -1px 0px, white -1px -1px, white 0px -1px, white 1px -1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px;'>1 999 р.</td>
			</tr>
			<tr>
				<td><a href="#win7"><img src="http://iphone5me.ru//i/buy_btn.png" width='150'></a></td>
				<td><a href="#win8"><img src="http://iphone5me.ru//i/buy_btn.png" width='150'><a></td>
			</tr>
			<tr>
				<td colspan=2 style='font-family: Aaargh;font-size:18px;font-weight:bold;text-align:center;padding-top:10px;color:#FF9900;text-shadow: white 1px 0px, white 1px 1px, white 0px 1px, white -1px 1px, white -1px 0px, white -1px -1px, white 0px -1px, white 1px -1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px, white 0 0 1px;'>У нас индивидуальный подход к каждому клиенту. <br>Свяжитесь с нами и мы сделаем специальное предложение именно для Вас</td>
			</tr>
		</table>
		</div>
		<div id="show4">
					<table style='width:960px;margin;0px auto;' border="0" align='center'>
						<tr>
							<td><p class="showvideo">Посмотрите видео обзор</p><br>
							<iframe width="420" height="315" src="//www.youtube.com/embed/bb_STTyJP78" frameborder="0" allowfullscreen></iframe>
							</td>
							<td>
							<div class="textright">
				<p>Часы <span style="color:white">Patek Philippe Nautilus</span> –
				непревзойденное слияние совершенства техники
				и идеального дизайна.</p>
				<p>Корпус, выполненный из гипоаллергенной стали
				с золотым напылением и сапфировое стекло,
				установленное по обе стороны, делают эту модель
				часов еще более изысканной.</p>
			</div>
							</td>
						</tr>
					</table>
		</div>
		<div id="show5">
				
			<div style='margin:0px auto;display:block;width:960px;padding-top:50px;'>
			<div class="items" style='float:left;display:block;margin:0px auto;'>
				<div class="item i1">
					<img src="img/1.png">
					<p>Оставляете заявку</p>
				</div>
				<div class="item i2">
					<img src="img/2.png">
					<p>Специалист с вами связывается</p>
				</div>
				<div class="item i3">
					<img src="img/3.png">
					<p>Курьер доставляет товар</p>
				</div>
				<div class="item i4">
					<img src="img/4.png">
					<p>Оплачиваете покупку</p>
				</div>
			</div><br>
			<p class="showvideo">Отзывы наших клиентов</p>
	<div class="reviews" style='margin-top:70px;'>
		<div class="wrap">
						<div class="item">
				<p>Купила мужу в подарок год назад, работают исправно, очень доволен подарком!</p>
				<h4>Яна, <span style="font-size: 0.8em;
color: grey;">Выхино</span></h4>
			</div>
						<div class="item">
				<p>Купил часы в вашем магазине, но ремешок не подошел,сразу подобрали подходящий.Спасибо за оперативность и качество обслуживания</p>
				<h4>Михаил, <span style="font-size: 0.8em;
color: grey;">Павелецкая</span></h4>
			</div>
						<div class="item" style='float:left;display:block;margin-right:200px;'>
				<p>Нужны были часы парню в подарок.Каково же было мое удивление, что вы работаете без предоплаты, очень здорово, никаких рисков! =)</p>
				<h4>Оксана, <span style="font-size: 0.8em;
color: grey;">Речной вокзал</span></h4>
			</div>
						<div class="clear"></div>
		</div>
	</div>
			</div>
		
		</div>
			<div class="foot-nav-wrp">
		<div class="wrap">
			<ul class="foot-nav">
				<li><a href="#win1" class="various">Доставка</a></li>
				<li><a href="#win2" class="various">Гарантии</a></li>
				<li><a href="#win3" class="various">О компании</a></li>
				<li><a href="#win4" class="various">Конфиденциальность данных</a></li>
			</ul>
		</div><br>
		<div id="fc">

			<p>+7(499)990-18-25</p>
			<p>+7(499)991-18-25</p>
			
	
		</div>
	<!--	<p style='color: #523a2e;font-size: 14px;text-decoration: none;font-family:Arial, Helvetica;text-align:center;'><a href="http://vk.com/nick.azarkin">Разработка сайтов </a></p>-->
	</div>
	

<div style="display:none">

	<div id="about" data-title="О магазине">
		<p>Наш интернет-магазин является частью разветвлённой сети. За годы работы накоплен солидный опыт продаж в розницу наиболее популярных товаров.</p>
		<p>Продукция, которую мы предлагаем, является исключительной. Это подлинный товар прямиком от изготовителя с гарантией высочайшего качества! Все товары поступают в страну легальным образом, в наличии — нужные сертификаты международного образца.</p>
		<p>Работа непосредственно с производителем продукции позволяет нам удерживать наиболее доступную цену.</p>
		<p>Нами организован собственный колл-центр для удобства покупателей. Свыше трёхсот сотрудников-операторов находятся на связи для оперативного отклика, обработки заказов и консультаций. Своя курьерская служба способна в кратчайшие сроки доставить товар благодаря имеющемуся парку автомашин.</p>
		<p>Продукция доставляется практически во все регионы РФ. Способ оплаты выбирает покупатель, как ему удобнее. Можно оплатить товар и наложенным платежом, и с помощью действующих электронных систем.</p>
		<p>Пожелания клиента — главный закон для нас! Мы рады оказать услугу каждому посетителю нашего магазина. Полагаем, что и покупатели остаются довольны новыми товарами.</p>
		<p>Все описания в товаров итернет-магазина носят ознакомительный характер.<br>
Характеристики, комплектация и внешний вид товара могут отличаться от указанных на сайте. Описания и фотографии создаются на основе информации с официальных сайтов производителей, либо путем изучения изделия и его паспорта. Условно можно считать, что на момент создания описание полностью соответствует наименованию, но с течением времени могут возникать некоторые отклонения между описанием и характеристиками товара, так как описание в нашем каталоге создается один раз и впоследствии обновляется в случае нахождения несогласованности с информацией производителя.<br>
Кроме того  даже официальные документы могут содержать ошибки и опечатки - это не позволяет нам утверждать, что абсолютно все, указанные нами данные точны и соответствуют действительности. Также производитель оставляет за собой право изменять параметры товара без предварительного уведомления. Изменения могут быть не отражены на сайте, однако это не является основанием для возврата товара или изменения (понижения) цены.</p>

		<p>Мы настоятельно рекомендуем пользоваться опубликованной информацией в качестве основного обзора товара, и при совершении покупки уточнять параметры, имеющие для Вас большую значимость, у менеджеров нашего интернет-магазина.<br>
Наличие и возможность просмотра данного технического описания не является прямым или косвенным обязательством с нашей стороны продать Вам соответствующий товар.<br>
Во избежание недоразумений уточняйте эту информацию. Появление неточностей в описаниях к товару следует считать частным случаем, а не массовым явлением. Тем не менее, мы приносим свои извинения за возможные ошибки и просим отнестись с пониманием.</p>
		<p><img src="../cdn-ua.biggon.net/sites-v3/_common/img/reqsc81e.png?2"></p>
	</div>

	<div id="delivery" data-title="Доставка">
		<p>Мы осуществляем доставку товара почти во все города и села РФ. Способ доставки и стоимость услуги зависит от удалённости региона. В среднем нужно будет заплатить 250-400 руб.</p>
		<p>Вы можете сами выбрать способ доставки:</p>
		<ul>
			<li>Вывезти самостоятельно с пункта выдачи товара</li>
			<li>Заказать курьера</li>
			<li>Получить товар по почте</li>
		</ul>
		<h5>Курьерская служба</h5>
		<p>Практически в любом крупном городе страны можно получить товар, который доставит наша служба TNX Express. Кроме того, мы успешно сотрудничаем с региональными службами доставки. Благодаря этому покупателям гарантированно доставляется товар в города:
		Москва, Московская область, Санкт-Петербург, Бийск, Благовещенск, Брянск, Владивосток, Волгоград, Воронеж, Екатеринбург, Иваново, Ижевск, Иркутск, Йошкар-Ола, Казань, Калининград, Калуга, Кемерово, Кострома, Краснодар, Красноярск, Курск, Кызыл, Липецк, Магнитогорск, Мурманск, Набережные Челны, Надым, Находка, Нижневартовск, Нижнекамск, Новокузнецк, Новосибирск, Омск, Оренбург, Пенза, Пермь, Петрозаводск, Петропавловск-Камчатский, Псков, Ростов-на-Дону, Самара, Саратов, Сочи, Ставрополь, Сургут, Сыктывкар, Тверь, Тольятти, Томск, Тула, Тюмень, Улан-Удэ, Ульяновск, Уссурийск, Уфа, Хабаровск, Челябинск, Якутск, Ярославль.</p>
		<p>В среднем доставка товара производится в течение 10-30 дней в зависимости от удалённости региона. В Москве срок составляет 1-3 дня, В Санкт-Петербурге &mdash; от 2 до 7 дней. Точную дату доставки товара можно узнавать после того, как будет оформлен заказ.</p>
		<h5>Самовывоз</h5>
		<p>Товар можно получить на  пунктах самовывоза, которыми мы располагаем в следующих  городах: Москва, Санкт-Петербург, Абакан, Архангельск, Астрахань, Барнаул, Белгород, Березники, Благовещенск, Братск, Брянск, Великий Новгород, Владимир, Волгоград, Волгодонск, Воронеж, Екатеринбург, Иваново, Ижевск, Иркутск, Йошкар-Ола, Казань, Калуга, Каменск-Уральский, Кемерово, Киров, Комсомольск-на-Амуре, Кострома, Краснодар, Красноярск, Курган, Курск, Липецк, Магнитогорск, Миасс, Мурманск, Набережные Челны, Нижневартовск, Нижний Новгород, Нижний Тагил, Новокузнецк, Новороссийск, Новосибирск, Омск, Орел, Оренбург, Пенза, Пермь, Петрозаводск, Пятигорск, Ростов-на-Дону, Рязань, Самара, Саратов, Серов, Смоленск, Ставрополь, Сургут, Сыктывкар, Таганрог, Тамбов, Тверь, Тольятти, Томск, Тула, Тюмень, Улан-Удэ, Ульяновск, Уфа, Ухта, Хабаровск, Ханты-Мансийск, Чебоксары, Челябинск, Чита, Ярославль.
		При этом срок доставки заказанного товара до нужного пункта самовывоза составляет в среднем 2-14 дней (в зависимости от города).</p>
		<h5>Доставка почтой</h5>
		<p>Благодаря Почте РФ мы можем доставить Ваш товар в любую географическую точку страны. Сроки почтовой доставки из Москвы составляют 7-30 дней (иногда дольше). Допускается предоплата или оплата товара наложенным платежом.</p>
		<p>Нашим покупателям мы советуем воспользоваться двумя первыми способами доставки товара. Это выгоднее и быстрее в том случае, когда Вы проживаете в городах, перечисленных выше.</p>
	</div>

	<div id="warranty" data-title="Наши гарантии">
		<p>Мы предлагаем подлинный и стопроцентно новый товар. Вся продукция получена от предприятия-изготовителя и находится в оригинальной упаковке.</p>
		<p>Все наши товары сопровождаются нужными сертификатами, получены необходимые разрешения к их использованию потребителями, выполняются все регламенты по соответствующим нормам российского законодательства.</p>
		<p>Заменить или отдать в ремонт купленный товар можно с помощью товарных чеков, которые прилагаются при получении заказа. Существуют и гарантийные талоны для обслуживания и ремонта товаров в сервисных центрах на протяжении гарантийного срока. Гарантия выдаётся на каждую модель в среднем на 14 дней.</p>
		<p>Мы рекомендуем обязательно удостовериться в полноте комплектации заказа при получении товара и работоспособности полученной модели.</p>
		<p>Деятельность нашего интернет-магазина ведется на основе российского законодательства, отвечает Закону о защите прав потребителей.</p>
		<p>Предоставляется возможность отказаться от заказа тем покупателям, которые не удовлетворены полученным товаром. Оплату в полном объёме можно вернуть в срок не позднее 7 дней после покупки. Данная норма действует для дистанционной торговли товарами.</p>
	</div>

	<div id="faq" data-title="Вопросы и ответы">
		<h5>Как оформить заказ?</h5>
		<p>Надо навести курсор и нажать на указатель «Заказать товар» внизу страницы. Далее заполнить нужные поля. В течение часа с Вами свяжутся операторы интернет-магазина.</p>
		<h5>Какие есть способы оплаты?</h5>
		<p>Заплатить за товар можете почтовым переводом или наличными деньгами при доставке. Также используются электронные переводы через платёжные системы «Яндекс-Деньги» или Webmoney. Возможен перевод с Вашего банковского счёта на наши реквизиты. Возможные варианты оплаты вам сообщит наш оператор.</p>
		<h5>Каковы сроки доставки?</h5>
		<p>Существуют различные способы доставки и разные сроки. По возможности наши службы нацелены на максимально быструю отправку товара в пункты доставки в городах, откуда получают товар самовывозом или курьером. Так, в Москве товар доставляется в течение одного дня, в Санкт-Петербурге &mdash; от 2 до 7 дней. В отдалённых регионах в среднем срок доставки составляет 10-30 дней в будни. При доставке товара почтой может потребоваться от 10 дней до 1 месяца. Наш совет &mdash; оформлять доставку самовывозом или курьерской службой.</p>
		<h5>Какова цена доставки?</h5>
		<p>В Москве стоимость составляет 297 руб., по Московской области расценки достигают 397-497 руб. Доставка в другие регионы  в среднем обойдётся в сумму 250-400 руб. Платить необходимо и при самовывозе товара из пунктов доставки, но здесь стоимость чуть дешевле доставки курьером - 97 рублей по Москве. При получении товара на почте придётся заплатить 250-400 руб.</p>
		<h5>Возможен ли возврат товара?</h5>
		<p>Мы действуем по  российскому законодательству о дистанционной торговле. В соответствии с нормами товар можно возвратить в семидневный срок с момента его приобретения.</p>
	</div>

	<div id="advantages" data-title="Наши преимущества">
		<ul>
			<li>Качество гарантировано на 100%!</li>
			<li>Работаем непосредственно с заводом-изготовителем</li>
			<li>Легко заказать товар одним кликом</li>
			<li>Доступные цены</li>
			<li>Никакого риска! Вы получаете товар и потом платите за него </li>
			<li>Любая удобная форма оплаты заказа</li>
			<li>Доставка по всей стране в наиболее короткие сроки</li>
			<li>Максимально снижена цена доставки</li>
			<li>В 70 городах открыты пункты самовывоза</li>
			<li>Круглосуточный контакт с клиентами через наш колл-центр</li>
			<li>Регулярные акции и отличные скидки!</li>
		</ul>
	</div>

	<div id="privacy" data-title="Политика конфиденциальности">
		<p>Наш интернет-магазин уважительно относится к правам клиента. Соблюдается строгая конфиденциальность при оформлении заказа. Сведения надёжно сохраняются и защищены от передачи.</p>
		<p>Согласием на обработку данных клиента исключительно с целью оказания услуг является размещение заказа на сайте.</p>
		<p>К персональным данным относится личная информация о клиенте: домашний адрес; имя, фамилия, отчество; сведения о рождении; имущественное, семейное положение; личные контакты (телефон, электронная почта) и прочие сведения, которые перечислены в Законе РФ № 152-ФЗ «О персональных данных» от 27 июля 2006 г.</p>
		<p>Клиент вправе отказаться от обработки персональных данных. Нами в данном случае гарантируется удаление с сайта всех персональных данных в трёхдневный срок в рабочее время. Подобный отказ клиент может оформить простым электронным письмом на адрес, указанный на странице нашего сайта.</p>
	</div>

</div>
<!-- Модальное окно №1 -->
   <a href="#x" class="overlay" id="win1"></a>
   <div class="popup" style='color:black;'>
	<div id="delivery" data-title="Доставка" style='color:black;' >
	<p>	Наши курьеры доставят Вам товар в течении 24-х часов, либо по согласованию даты с Вами, в удобное для Вас время.</p>
<p>В нашем интернет-магазине доставка по Москве бесплатная, по области 200р</p>
		</div> 
    <a class="close"title="Закрыть" href="#close"></a>
    </div>
<!-- Модальное окно №2 -->
   <a href="#x" class="overlay" id="win2"></a>
   <div class="popup" style='color:black;'>
	<div id="warranty" data-title="Наши гарантии">
		<p>Мы предлагаем подлинный и стопроцентно новый товар. Вся продукция получена от предприятия-изготовителя и находится в оригинальной упаковке.</p>
		<p>Все наши товары сопровождаются нужными сертификатами, получены необходимые разрешения к их использованию потребителями, выполняются все регламенты по соответствующим нормам российского законодательства.</p>
		<p>Заменить или отдать в ремонт купленный товар можно с помощью товарных чеков, которые прилагаются при получении заказа. Существуют и гарантийные талоны для обслуживания и ремонта товаров в сервисных центрах на протяжении гарантийного срока. Гарантия выдаётся на каждую модель в среднем на 14 дней.</p>
		<p>Мы рекомендуем обязательно удостовериться в полноте комплектации заказа при получении товара и работоспособности полученной модели.</p>
		<p>Деятельность нашего интернет-магазина ведется на основе российского законодательства, отвечает Закону о защите прав потребителей.</p>
		<p>Предоставляется возможность отказаться от заказа тем покупателям, которые не удовлетворены полученным товаром. Оплату в полном объёме можно вернуть в срок не позднее 7 дней после покупки. Данная норма действует для дистанционной торговли товарами.</p>
	</div>
    <a class="close"title="Закрыть" href="#close"></a>
    </div>
<!-- Модальное окно №3 -->
   <a href="#x" class="overlay" id="win3"></a>
   <div class="popup" style='color:black;'>
	<div id="faq" data-title="Вопросы и ответы">
<h5>Как оформить заказ?</h5>
<p>Надо навести курсор и нажать на указатель «Заказать товар» внизу страницы. Далее заполнить нужные поля. В течение часа с Вами свяжутся операторы интернет-магазина.</p>

<h5>Какие есть способы оплаты?</h5>
<p>Мы работаем без предоплаты. Оплата покупки происходит передачей наличных средств курьеру после доставки товара и проверки Вами целостности и работоспособности товара.</p>
<h5>Каковы сроки доставки?</h5>
<p>Наши курьеры доставят Вам товар в течении 24-х часов, либо по согласованию даты с Вами, в удобное для Вас время.</p>
<h5>Какова цена доставки?</h5>
<p>В нашем интернет-магазине доставка по Москве бесплатная, по области 200р.</p>
<h5>Возможен ли возврат товара?</h5>
<p>Возврат товара возможен в течении 14 дней с момента покупки, если товар и упаковка находятся в состоянии, в котором Вы их приобрели.</p>
	
	</div>
    <a class="close"title="Закрыть" href="#close"></a>
    </div>
<!-- Модальное окно №4 -->
   <a href="#x" class="overlay" id="win4"></a>
   <div class="popup" style='color:black;'>
	<div id="privacy" data-title="Политика конфиденциальности">
		<p>Наш интернет-магазин уважительно относится к правам клиента. Соблюдается строгая конфиденциальность при оформлении заказа. Сведения надёжно сохраняются и защищены от передачи.</p>
		<p>Согласием на обработку данных клиента исключительно с целью оказания услуг является размещение заказа на сайте.</p>
		<p>К персональным данным относится личная информация о клиенте: домашний адрес; имя, фамилия, отчество; сведения о рождении; имущественное, семейное положение; личные контакты (телефон, электронная почта) и прочие сведения, которые перечислены в Законе РФ № 152-ФЗ «О персональных данных» от 27 июля 2006 г.</p>
		<p>Клиент вправе отказаться от обработки персональных данных. Нами в данном случае гарантируется удаление с сайта всех персональных данных в трёхдневный срок в рабочее время. Подобный отказ клиент может оформить простым электронным письмом на адрес, указанный на странице нашего сайта.</p>
	</div>
    <a class="close"title="Закрыть" href="#close"></a>
    </div>
<!-- Модальное окно №5 -->
   <a href="#x" class="overlay" id="win5"></a>
   <div class="popup" style='color:black;'>
		<table border="0" style='width:85%;margin:0px auto'>
			<tr>
				<td width="500"><a href="img/1-2.jpg" onclick="return hs.expand(this)"><img src="img/1-2.jpg" width='400' align='left'></a>
				<a href="img/1-1.jpg" onclick="return hs.expand(this)"><img src="img/1-1.jpg" width='80'></a><br>
				<a href="img/1-3.jpg" onclick="return hs.expand(this)"><img src="img/1-3.jpg" width='80'></a><br><br><br><br><br><br><br>
				<p style='text-align:center;font-weight:bold;font-family: Aaargh;font-size:22px;color:red;'>Осталось 15шт.</p>
				</td>
				<td style='vertical-align:top;'>
					<span style="text-decoration:line-through;float:right;font-size:18pt;"><b>2000 р.</b></span><br><br>
					<span style="float:right;color:red;font-size:22pt;"><b>999 р.</b></span><br><br>
				<div style='float:right;'>
				<form id="form1" class="right order-form;float:right;display:block" method=POST>
				<h4>ОФОРМИТЕ ЗАЯВКУ<br />
				<span style='color:white;'>и купите часы по суперцене!</span></h4>
								<input class="name fio" name="name" placeholder="Ваше имя" required>
				<input class="address addr" placeholder="Адрес доставки" name="adr" required>
								<input class="phone tel" name="tel" placeholder="Контактный телефон" required>
			<input type="submit" name="send1" style='padding-right:30px;' value="Заказать сейчас">
			</form></div>
				</td>
			</tr>
		</table>
    <a class="close"title="Закрыть" href="#close"></a>
    </div>
	
<!-- Модальное окно №6 -->
   <a href="#x" class="overlay" id="win6"></a>
   <div class="popup" style='color:black;'>
		<table border="0" style='width:85%;margin:0px auto'>
			<tr>
				<td width="500"><a href="img/2-1.jpg" onclick="return hs.expand(this)"><img src="img/2-1.jpg" width='400' align='left'></a>
				<a href="img/2-2.jpg" onclick="return hs.expand(this)"><img src="img/2-2.jpg" width='80'></a><br>
				<a href="img/2-3.jpg" onclick="return hs.expand(this)"><img src="img/2-3.jpg" width='80'></a><br><br><br><br><br><br><br>
				<p style='text-align:center;font-weight:bold;font-family: Aaargh;font-size:22px;color:red;'>Осталось 15шт.</p>
				</td>
				<td style='vertical-align:top;'>
					<span style="text-decoration:line-through;float:right;font-size:18pt;"><b>2000 р.</b></span><br><br>
					<span style="float:right;color:red;font-size:22pt;"><b>999 р.</b></span><br><br>
				<div style='float:right;'>
				<form id="form1" class="right order-form;float:right;display:block" method=POST>
				<h4>ОФОРМИТЕ ЗАЯВКУ<br />
				<span style='color:white;'>и купите часы по суперцене!</span></h4>
								<input class="name fio" name="name" placeholder="Ваше имя" required>
				<input class="address addr" placeholder="Адрес доставки" name="adr" required>
								<input class="phone tel" name="tel" placeholder="Контактный телефон" required>
			<input type="submit" name="send2" style='padding-right:30px;' value="Заказать сейчас">
			</form></div>
				</td>
			</tr>
		</table>
    <a class="close"title="Закрыть" href="#close"></a>
    </div>
<!-- Модальное окно №7 -->
   <a href="#x" class="overlay" id="win7"></a>
   <div class="popup" style='color:black;'>
		<table border="0" style='width:85%;margin:0px auto'>
			<tr>
				<td width="500"><a href="img/3-2.jpg" onclick="return hs.expand(this)"><img src="img/3-2.jpg" width='400' align='left'></a>
				<a href="img/3-1.jpg" onclick="return hs.expand(this)"><img src="img/3-1.jpg" width='80'></a><br>
				<a href="img/3-3.jpg" onclick="return hs.expand(this)"><img src="img/3-3.jpg" width='80'></a><br><br><br><br><br><br><br>
		
				</td>
				<td style='vertical-align:top;'>
					<span style="text-decoration:line-through;float:right;font-size:18pt;"><b>2000 р.</b></span><br><br>
					<span style="float:right;color:red;font-size:22pt;"><b>999 р.</b></span><br><br>
				<div style='float:right;'>
				<form id="form1" class="right order-form;float:right;display:block" method=POST>
				<h4>ОФОРМИТЕ ЗАЯВКУ<br />
				<span style='color:white;'>и купите часы по суперцене!</span></h4>
								<input class="name fio" name="name" placeholder="Ваше имя" required>
				<input class="address addr" placeholder="Адрес доставки" name="adr" required>
								<input class="phone tel" name="tel" placeholder="Контактный телефон" required>
			<input type="submit" name="send3" style='padding-right:30px;' value="Заказать сейчас">
			</form></div>
				</td>
			</tr>
		</table>
    <a class="close"title="Закрыть" href="#close"></a>
    </div>
<!-- Модальное окно №8 -->
   <a href="#x" class="overlay" id="win8"></a>
   <div class="popup" style='color:black;'>
		<table border="0" style='width:85%;margin:0px auto'>
			<tr>
				<td width="500"><a href="img/4-2.jpg" onclick="return hs.expand(this)"><img src="img/4-2.jpg" width='400' align='left'></a>
				<a href="img/4-1.jpg" onclick="return hs.expand(this)"><img src="img/4-1.jpg" width='80'></a><br>
				<a href="img/4-3.jpg" onclick="return hs.expand(this)"><img src="img/4-3.jpg" width='80'></a><br><br><br><br><br><br><br>
				
				</td>
				<td style='vertical-align:top;'>
					<span style="text-decoration:line-through;float:right;font-size:18pt;"><b>2000 р.</b></span><br><br>
					<span style="float:right;color:red;font-size:22pt;"><b>999 р.</b></span><br><br>
				<div style='float:right;'>
				<form id="form1" class="right order-form;float:right;display:block" method=POST>
				<h4>ОФОРМИТЕ ЗАЯВКУ<br />
				<span style='color:white;'>и купите часы по суперцене!</span></h4>
								<input class="name fio" name="name" placeholder="Ваше имя" required>
				<input class="address addr" placeholder="Адрес доставки" name="adr" required>
								<input class="phone tel" name="tel" placeholder="Контактный телефон" required>
			<input type="submit" name="send4" style='padding-right:30px;' value="Заказать сейчас">
			</form></div>
				</td>
			</tr>
		</table>
    <a class="close"title="Закрыть" href="#close"></a>
    </div>
	<div id="scrollup"><img alt="Прокрутить вверх" src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-up-01-128.png"></div>
	</body>
</html>