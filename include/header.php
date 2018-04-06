<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?if ($n_page==1) {
	echo '<title>ОЦИФРОВКА</title>';
}
if ($n_page==2) {
	echo '<title>Услуги ::: ОЦИФРОВКА</title>';
}
if ($n_page==3) {
	echo '<title>Цены ::: ОЦИФРОВКА</title>';
}
if ($n_page==4) {
	echo '<title>Информация ::: ОЦИФРОВКА</title>';
}
if ($n_page==5) {
	echo '<title>Примеры оформления работ ::: ОЦИФРОВКА</title>';
}
if ($n_page==6) {
	echo '<title>Контакты ::: ОЦИФРОВКА</title>';
}
if ($n_page==7) {
	echo '<title>F.A.Q. ::: ОЦИФРОВКА</title>';
}
if ($n_page==8) {
	echo '<title>Сообщение отправлено ::: ОЦИФРОВКА</title>';
}
if ($n_page==9) {
	echo '<title>Рачет стоимости оцифровки ::: ОЦИФРОВКА</title>';
}
if ($n_page==10) {
	echo '<title>Главная ::: ОЦИФРОВКА</title>';
}
?>
	<meta http-equiv="content-language" content="ru" />
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
	<meta name="description" content="Оцифровка видеокассет, черно-белых и цветных пленок (негативов), слайдов, сканирование фото, текста, печать фотографий, документов, печать на дисках, ламинирование, 3D-фото, магнитики с любым изображением" />
	<meta name="keywords" content="оцифровка видеокассет, VHS, Video 8, Благовещенск, Амурская область, запись видеокассет на диск, черно-белых, цветных пленок (негативов), слайдов, сканирование фото, текста, печать фотографий, документов, печать на дисках, ламинирование, 3D-фото, магнитики с любым изображением" />

	<link type="text/css" rel="stylesheet" href="css/styles.css" />
	<link type="text/css" rel="stylesheet" id="theme" href="css/theme1.css" />
	<link rel="stylesheet" href="css/slider.css">

	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.style-switcher.js"></script>
	<script type="text/javascript" src="js/up.js"></script>	
	<script src="js/slides.js"></script>
	<link rel="stylesheet" href="/js/contactable.css" type="text/css" />
	<script type="text/javascript" src="js/css_browser_selector.js"></script>
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
	
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="js/common.js"></script>	

   <script type="text/javascript">
   function calc() {
		var type_service = document.getElementById("type_service"); 
		var DVD = document.getElementById("DVD"); 
		var count = document.getElementById("count"); 
		var is_menu = document.getElementById("is_menu"); 
		var is_futlyar = document.getElementById("is_futlyar");
		var count_disc = document.getElementById("count_disc");
		var result = document.getElementById("result");
		var is_dostavka = document.getElementById("is_dostavka");

		var price = 0;
		var price_dvd = 0;
		var kol_dvd = 0;
		price += parseFloat(type_service.options[type_service.selectedIndex].value);
		price = parseFloat(count.value) * price;
		kol_dvd = parseFloat(DVD.options[DVD.selectedIndex].value);
		price_dvd = parseFloat(count_disc.value) * kol_dvd;
		price += price_dvd;
		
		price += (is_dostavka.checked == true) ? parseFloat(is_dostavka.value) : 0;
		price += (is_menu.checked == true) ? parseFloat(is_menu.value) : 0;
		price += (is_futlyar.checked == true) ? parseFloat(is_futlyar.value) : 0;
		
		result.innerHTML = price;
	}

	</script>

	<script>
	function currentSlide( current ) {
		$(".current_slide").text(current + " of " + $("#slides").slides("status","total") );
	}
	
	$(function(){
		$("#slides").slides({
			navigateEnd: function( current ) {
				currentSlide( current );
			},
			loaded: function(){
				currentSlide( 1 );
			}
		});

		$(".controls").click(function(e) {
			e.preventDefault();

			var slidesStatus = $("#slides").slides("status","state");
			
			if (!slidesStatus || slidesStatus === "stopped") {

				$("#slides").slides("play");

				$(this).text("Стоп");
			} else {

				$("#slides").slides("stop");

				$(this).text("Запуск");
			}
		});
	});
	</script>

	<script type="text/javascript">
		$(function(){
			$("#slides").slides("play");
		});
	</script>

</head>

<body>
<div id="contactable"><!-- contactable html placeholder --></div>
<!-- Browser warning-->
<div class="warning-block">
	<a href="#" class="close" onclick="javascript:this.parentNode.style.display=&quot;none&quot;; return false;" title="Закрыть"></a>
	<div class="info">
		<a class="browser chrome" href="http://www.google.ru/chrome" title="Установить Google Chrome"></a>
		<a class="browser firefox" href="http://www.mozilla-europe.org/ru/firefox/" title="Установить Mozilla Firefox"></a> 
		<a class="browser opera" href="http://www.opera.com/download/get.pl?id=33016&amp;thanks=true&amp;sub=true" title="Установить Opera"></a> 
		<a class="browser safari" href="http://www.apple.com/ru/safari/" title="Установить Apple Safari"></a> 
		<a class="browser explorer" href="http://www.microsoft.com/rus/windows/internet-explorer/" title="Установить Internet Explorer"></a> 
		<strong class="strong">Внимание!</strong> 
		<p class="text">
			Вы пользуетесь устаревшим браузером, подвергая Ваш компьютер повышенной опасности.<br>
			Устаревший браузер может содержать ошибки и проблемы безопасности, которые позволят вирусным программам легко проникнуть на Ваш компьютер.<br>
			Чтобы использовать все возможности этого сайта и обезопасить свой компьютер, обновите браузер.<br>
			Воспользуйтесь одной из ссылок справа для обновления своего браузера.
		</p>
	</div> 
</div> 

<div class="java-warning">
	<p><span>Внимание!</span> В Вашем браузере отключен JavaScript. Необходимо задействовать JavaScript для того, чтобы использовать все функции этого сайта. <span>Внимание!</span></p>
</div>
<!-- -->

<!--start main-->
<div class="main">
<!--start header-->
	<div class="header">
		<div class="wrapper">
		
		<a href="http://www.digital-blag.ru" class="no_line"><h1 class="logo_text">ОЦИФРОВКА</h1><h1 class="logo_text_city">г. Благовещенск</h1></a>
			<script type="text/javascript">
				$(document).ready(function() {
					$('#header').styleSwitcher({
							 preview:false,
							 slidein:false
						});
				});

			</script>

			<div id="header">
					<a href="javascript: void(0)" title="Сменить стиль" id="theme1"><div style="display:inline-block;background: #CE1611; width:16px; height:16px; border:1px solid #613e25;border-radius: 5px;"></div></a>
					<a href="javascript: void(0)" title="Сменить стиль" id="theme2"><div style="display:inline-block;background: #086701; width:16px; height:16px; border:1px solid #613e25;border-radius: 5px;"></div></a>
					<a href="javascript: void(0)" title="Сменить стиль" id="theme3"><div style="display:inline-block;background: #1a02ae; width:16px; height:16px; border:1px solid #613e25;border-radius: 5px;"></div></a>
					<a href="javascript: void(0)" title="Сменить стиль" id="theme4"><div style="display:inline-block;background: #ffa902; width:16px; height:16px; border:1px solid #613e25;border-radius: 5px;"></div></a>
			</div>
			
			<div class="telephone">
				<img src="images/telephone.png" alt="ОЦИФРОВКА Благовещенск" align="left" /><h1 class="phone_text">8 (914) 538-54-68</h1>
				<h1 class="phone_text">38-54-68</h1>
			</div>	

			<ul id="sdt_menu" class="sdt_menu" >
				<li >
					<a href="/">
						<img src="images/1.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Главная</span>
						
						</span>
					</a>
				</li>
				<li>
					<a href="price.php">
						<img src="images/2.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Цены</span>
						</span>
					</a>

				</li>
				<li>
					<a href="info.php">
						<img src="images/3.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Инфо</span>
						</span>
					</a>
				</li>
				<li>
					<a href="examples.php">
						<img src="images/4.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Примеры</span>
						</span>
					</a>
				</li>
				<li>
					<a href="contacts.php">
						<img src="images/5.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Контакты</span>
						</span>
					</a>
				</li>
				<li>
					<a href="faq.php">
						<img src="images/6.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">F.A.Q.</span>
						</span>
					</a>

				</li>
			</ul>

       <!-- The JavaScript -->
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
				/**
				* for each menu element, on mouseenter, 
				* we enlarge the image, and show both sdt_active span and 
				* sdt_wrap span. If the element has a sub menu (sdt_box),
				* then we slide it - if the element is the last one in the menu
				* we slide it to the left, otherwise to the right
				*/
                $('#sdt_menu > li').bind('mouseenter',function(){
					var $elem = $(this);
					$elem.find('img')
						 .stop(true)
						 .animate({
							'width':'89px',
							'height':'90px',
							'left':'0px'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'29px'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'25px'},300,function(){
						var $sub_menu = $elem.find('.sdt_box');
						if($sub_menu.length){
							var left = '90px';
							if($elem.parent().children().length == $elem.index()+1)
								left = '-90px';
							$sub_menu.show().animate({'left':left},200);
						}	
					});
				}).bind('mouseleave',function(){
					var $elem = $(this);
					var $sub_menu = $elem.find('.sdt_box');
					if($sub_menu.length)
						$sub_menu.hide().css('left','0px');
					
					$elem.find('.sdt_active')
						 .stop(true)
						 .animate({'height':'0px'},300)
						 .andSelf().find('img')
						 .stop(true)
						 .animate({
							'width':'0px',
							'height':'0px',
							'left':'85px'},400)
						 .andSelf()
						 .find('.sdt_wrap')
						 .stop(true)
						 .animate({'top':'3px'},500);
				});
            });
        </script>
		
		</div>
	</div>
<!--end header-->

