
<?$n_page=9;
require "include/header.php";
?>
<!--start content-->
		<div class="content">
			<div class="page">
				<div class="wrapper">
					<h1>������ ��������� ���������</h1>
					
					<p> 
      
        <div>�������� ������: <select class="form_style2" onchange="calc()" id="type_service"></div>
            <option value="0">�� �������</option>
            <option value="2.5">��������� ��� �������</option>
			<option value="3">��������� � ��������</option>
			<option value="776">��������� ������ � ������ ��������� ������</option>

        </select><br/><br/>
         <div>�������� ��������: <select class="form_style2" onchange="calc()" id="DVD"></div>
            <option value="0">�� �������</option>
            <option value="0">��� DVD</option>
			<option value="0">��� DVD</option>
			<option value="0">������� ������� ����, ������</option>
        </select><br/>	<br/>
		���������� ������, ��.: <input class="form_style1" type="text" id="count_disc" value="1" onkeyup="calc()"   /> (<a href="http://www.digital-blag.ru/faq.php#2">�� �������, ��� �� ���� ���� ���������� 80 ����� ������������ ������. ������ 80 ����� ���� ��������� ��������</a>)<br/><br/>
		<input type="checkbox" onchange="calc()" value="20" id="is_menu" /> <label for="is_menu">�������� DVD-����</label><br/><br/>
		<input type="checkbox" onchange="calc()" value="70" id="is_futlyar" /> <label for="is_futlyar">���������� � ���������� �������, ������� ������</label><br/><br/>
		<input type="checkbox" onchange="calc()" value="0" id="is_dostavka" /> <label for="is_dostavka">C ���������</label><br/><br/>


        ����������������� ������, ���: <input class="form_style1" type="text" id="count" value="1" onkeyup="calc()"   /><br/><br/>
        <div>�����: <font color="#ce1611"><span id="result">0</span></font> ���.</div>					
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
