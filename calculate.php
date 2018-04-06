
<?$n_page=9;
require "include/header.php";
?>
<!--start content-->
		<div class="content">
			<div class="page">
				<div class="wrapper">
					<h1>РАСЧЕТ СТОИМОСТИ ОЦИФРОВКИ</h1>
					
					<p> 
      
        <div>Выберите услугу: <select class="form_style2" onchange="calc()" id="type_service"></div>
            <option value="0">Не выбрано</option>
            <option value="2.5">Оцифровка без монтажа</option>
			<option value="3">Оцифровка с монтажом</option>
			<option value="776">Оцифровка кассет с плохим качеством записи</option>

        </select><br/><br/>
         <div>Выберите носитель: <select class="form_style2" onchange="calc()" id="DVD"></div>
            <option value="0">Не выбрано</option>
            <option value="0">Наш DVD</option>
			<option value="0">Ваш DVD</option>
			<option value="0">Внешний жесткий диск, флешка</option>
        </select><br/>	<br/>
		Количество дисков, шт.: <input class="form_style1" type="text" id="count_disc" value="1" onkeyup="calc()"   /> (<a href="http://www.digital-blag.ru/faq.php#2">из расчета, что на один диск помещается 80 минут качественной записи. Больше 80 минут идет ухудшение качества</a>)<br/><br/>
		<input type="checkbox" onchange="calc()" value="20" id="is_menu" /> <label for="is_menu">Создание DVD-меню</label><br/><br/>
		<input type="checkbox" onchange="calc()" value="70" id="is_futlyar" /> <label for="is_futlyar">Оформление и распечатка обложки, включая футляр</label><br/><br/>
		<input type="checkbox" onchange="calc()" value="0" id="is_dostavka" /> <label for="is_dostavka">C доставкой</label><br/><br/>


        Продолжительность записи, мин: <input class="form_style1" type="text" id="count" value="1" onkeyup="calc()"   /><br/><br/>
        <div>Итого: <font color="#ce1611"><span id="result">0</span></font> руб.</div>					
			 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/> <br/> <br/> <br/> <br/> <br/> <br/> 
					
					</p>
				</div>
			</div>
			
		</div>
<!--end content-->
</div>
<!--end main-->
<?require "include/footer.php";?>
